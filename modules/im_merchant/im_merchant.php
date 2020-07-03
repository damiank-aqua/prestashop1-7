<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class im_merchant extends Module
{
    public function __construct()
    {
        $this->name = 'im_merchant';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'https://internet.media.pl';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Google Merchant - Damian Krawiec');
        $this->description = $this->l('Moduł pozwala wyeksportować wybrane produkty do pliku XML, który następnie zostanie pobrany w systemie Google Merchant Center');

        $this->confirmUninstall = $this->l('Moduł zostanie odinstalowany. Kontynuować?');
    }
    public function install()
    {
        if (!parent::install()) {
            return false;
        }
        return true;
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function getContent()
    {

        if (Tools::isSubmit('submitModuleXML'))
        {

            //Configuration
            $googleCategory = 536;
            $condition = 'new';
            $availability = 'in stock';
            $boxImage = 'thickbox_default';
            $url = 'https://'.$_SERVER['SERVER_NAME'];
            $extensionProduct = 'html';
            $extensionImage = 'jpg';
            $merchantCategoryId = 20;
            $xml = '';

            $sql = 'SELECT
				p.id_product as id,
				pa.price as price
				FROM '._DB_PREFIX_.'product p
				JOIN '._DB_PREFIX_.'product_attribute pa ON (pa.id_product = p.id_product)
				WHERE pa.default_on like 1';

            $isAttribute = Db::getInstance()->executeS($sql);

            $attributeArray = array();
            if($isAttribute) {

                foreach ($isAttribute as $a) {

                    if($a['price'] > 0)
                        $attributeArray[$a['id']] = $a['price'];
                }

            }

            $sql = 'SELECT DISTINCT 
				p.id_product as id,
				pl.name as product_name,
				pl.description_short as description,
				p.price as price,
				IFNULL(sp.reduction, 0) as reduction,
				cl.name as category_name,
				cl.link_rewrite as clink,
				pl.link_rewrite as plink,
				i.id_image as id_image
				FROM '._DB_PREFIX_.'product p
				JOIN '._DB_PREFIX_.'product_lang pl ON (p.id_product = pl.id_product)
				JOIN '._DB_PREFIX_.'category c ON (c.id_category = p.id_category_default)
				JOIN '._DB_PREFIX_.'category_lang cl ON (cl.id_category = c.id_category)
				JOIN '._DB_PREFIX_.'category_product cp ON (cp.id_product = p.id_product)
				LEFT OUTER JOIN '._DB_PREFIX_.'specific_price sp ON (sp.id_product = p.id_product)
				JOIN '._DB_PREFIX_.'image i ON (i.id_product = p.id_product)
				WHERE cp.id_category like '.$merchantCategoryId.' group by p.id_product';

            $data = Db::getInstance()->executeS($sql);

            $xml .= '<?xml version="1.0" encoding="utf-8"?>'."\n";
            $xml .= '<rss version="2.0" xmlns:g="http://base.google.com/ns/1.0">'."\n";
            $xml .= '<channel>'."\n";
            $xml .= '<title>'.$_SERVER['SERVER_NAME'].'</title>'."\n";
            $xml .= '<link>'.$url.'</link>'."\n";

            foreach($data as $d){

                if(is_numeric($d['id'])) {

                    $chars = array('|');

                    $description = strip_tags($d['description']);

                    $description = str_replace($chars, '', $description);

                    $description = preg_replace('~[\r\n\t]+~', '', $description);

                    $price = $d['price'];
                    if(isset($attributeArray[$d['id']]))
                        $price = $attributeArray[$d['id']];

                    if($d['reduction'] > 0)
                        $price -= $d['reduction'];

                    //Add tax
                    $price *= 1.23;

                    $xml .= '<item>'."\n";
                    $xml .= '<g:id>'.$d['id'].'</g:id>'."\n";
                    $xml .= '<g:title>'.$d['product_name'].'</g:title>'."\n";
                    $xml .= '<g:description>'.$description.'</g:description>'."\n";
                    $xml .= '<g:google_product_category>'. $googleCategory.'</g:google_product_category>'."\n";
                    $xml .= '<g:product_type>'.strtolower($d['category_name']).'</g:product_type>'."\n";
                    $xml .= '<g:link>'.$url.'/'.$d['clink'].'/'.$d['pid'].'-'.$d['plink'].'.'.$extensionProduct.'</g:link>'."\n";
                    $xml .= '<g:image_link>'.$url.'/'.$d['id_image'].'-'.$boxImage.'/'.$d['plink'].'.'.$extensionImage.'</g:image_link>'."\n";
                    $xml .= '<g:condition>'.$condition.'</g:condition>'."\n";
                    $xml .= '<g:availability>'.$availability.'</g:availability>'."\n";
                    $xml .= '<g:price>'.number_format($price, 2, '.', '').'</g:price>'."\n";
                    $xml .= '</item>'."\n";

                }

            }

            $xml .= '</channel>'."\n";
            $xml .= '</rss>';

            file_put_contents('../merchant.xml', $xml);

            return $this->displayConfirmation($this->trans('Plik XML został poprawnie wygenerowany. Nowe dane zostaną pobrane przez system Merchant Center w godzinach nocnych (bieżące ustawienia kampanii będą widoczne w dniu jutrzejszym).', array(), 'Admin.Notifications.Success')).$this->renderForm();

        }else return $this->renderForm();

    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Ustawienia'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'label' => $this->l('Użyj poniższego przycisku, aby wygenerować plik XML'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Utwórz plik XML')
                )
            )
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table =  $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitModuleXML';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        return $helper->generateForm(array($fields_form));
    }
}
