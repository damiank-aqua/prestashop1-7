<?php
/**
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2016 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registred Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

require_once _PS_MODULE_DIR_.'cz_customcmsblock1/classes/CustomCmsBlock1.php';

class Cz_Customcmsblock1 extends Module implements WidgetInterface
{
    private $templateFile;

    public function __construct()
    {
        $this->name = 'cz_customcmsblock1';
        $this->tab = 'front_office_features';
		$this->author = 'Codezeel';
        $this->version = '1.0.0';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('CZ - Custom CMS Block1', array(), 'Modules.CustomCmsBlock1');
        $this->description = $this->trans('Adds custom information block in your store.', array(), 'Modules.CustomCmsBlock1');

        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);

        $this->templateFile = 'module:cz_customcmsblock1/views/templates/hook/cz_customcmsblock1.tpl';
    }

    public function install()
    {
        return  parent::install() &&
            $this->installDB() &&
			$this->registerHook('displayHome');
    }

    public function uninstall()
    {
        return parent::uninstall() && $this->uninstallDB();
    }

    public function installDB()
    {
        $return = true;
        $return &= Db::getInstance()->execute('
                CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'czcustomcmsblock1info` (
                `id_czcustomcmsblock1info` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                `id_shop` int(10) unsigned DEFAULT NULL,
                PRIMARY KEY (`id_czcustomcmsblock1info`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8 ;'
        );

        $return &= Db::getInstance()->execute('
                CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'czcustomcmsblock1info_lang` (
                `id_czcustomcmsblock1info` INT UNSIGNED NOT NULL,
                `id_lang` int(10) unsigned NOT NULL ,
                `text` text NOT NULL,
                PRIMARY KEY (`id_czcustomcmsblock1info`, `id_lang`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8 ;'
        );

        return $return;
    }

    public function uninstallDB($drop_table = true)
    {
        $ret = true;
        if ($drop_table) {
            $ret &=  Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'czcustomcmsblock1info`') && Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'czcustomcmsblock1info_lang`');
        }

        return $ret;
    }

    public function getContent()
    {
        $output = '';

        if (Tools::isSubmit('savecz_customcmsblock1')) {
            if (!Tools::getValue('text_'.(int)Configuration::get('PS_LANG_DEFAULT'), false)) {
                $output = $this->displayError($this->trans('Please fill out all fields.', array(), 'Admin.Notifications.Error')) . $this->renderForm();
            } else {
                $update = $this->processSaveCustomCmsBlock1();

                if (!$update) {
                    $output = '<div class="alert alert-danger conf error">'
                        .$this->trans('An error occurred on saving.', array(), 'Admin.Notifications.Error')
                        .'</div>';
                }

                $this->_clearCache($this->templateFile);
            }
        }

        return $output.$this->renderForm();
    }

    public function processSaveCustomCmsBlock1()
    {
        $czcustomcmsblock1info = new CustomCmsBlock1(Tools::getValue('id_czcustomcmsblock1info', 1));

        $text = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $text[$lang['id_lang']] = Tools::getValue('text_'.$lang['id_lang']);
        }

        $czcustomcmsblock1info->text = $text;

        if (Shop::isFeatureActive() && !$czcustomcmsblock1info->id_shop) {
            $saved = true;
            $shop_ids = Shop::getShops();
            foreach ($shop_ids as $id_shop) {
                $czcustomcmsblock1info->id_shop = $id_shop;
                $saved &= $czcustomcmsblock1info->add();
            }
        } else {
			$czcustomcmsblock1info->id_shop = Shop::getContextShopID();
			$saved = $czcustomcmsblock1info->save();
        }

        return $saved;
    }

    protected function renderForm()
    {
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        $fields_form = array(
            'tinymce' => true,
            'legend' => array(
                'title' => $this->trans('CMS block', array(), 'Modules.CustomText'),
            ),
            'input' => array(
                'id_czcustomcmsblock1info' => array(
                    'type' => 'hidden',
                    'name' => 'id_czcustomcmsblock1info'
                ),
                'content' => array(
                    'type' => 'textarea',
                    'label' => $this->trans('Text block', array(), 'Modules.CustomText'),
                    'lang' => true,
                    'name' => 'text',
                    'cols' => 40,
                    'rows' => 10,
                    'class' => 'rte',
                    'autoload_rte' => true,
                ),
            ),
            'submit' => array(
                'title' => $this->trans('Save', array(), 'Admin.Actions'),
            ),
            'buttons' => array(
                array(
                    'href' => AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
                    'title' => $this->trans('Back to list', array(), 'Admin.Actions'),
                    'icon' => 'process-icon-back'
                )
            )
        );

        if (Shop::isFeatureActive() && Tools::getValue('id_czcustomcmsblock1info') == false) {
            $fields_form['input'][] = array(
                'type' => 'shop',
                'label' => $this->trans('Shop association', array(), 'Admin.Global'),
                'name' => 'checkBoxShopAsso_theme'
            );
        }


        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = 'cz_customcmsblock1';
        $helper->identifier = $this->identifier;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        foreach (Language::getLanguages(false) as $lang) {
            $helper->languages[] = array(
                'id_lang' => $lang['id_lang'],
                'iso_code' => $lang['iso_code'],
                'name' => $lang['name'],
                'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
            );
        }

        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->toolbar_scroll = true;
        $helper->title = $this->displayName;
        $helper->submit_action = 'savecz_customcmsblock1';

        $helper->fields_value = $this->getFormValues();

        return $helper->generateForm(array(array('form' => $fields_form)));
    }

    public function getFormValues()
    {
        $fields_value = array();
        $id_czcustomcmsblock1info = 1;

        foreach (Language::getLanguages(false) as $lang) {
            $czcustomcmsblock1info = new CustomCmsBlock1((int)$id_czcustomcmsblock1info);
            $fields_value['text'][(int)$lang['id_lang']] = $czcustomcmsblock1info->text[(int)$lang['id_lang']];
        }

        $fields_value['id_czcustomcmsblock1info'] = $id_czcustomcmsblock1info;

        return $fields_value;
    }
	
    public function renderWidget($hookName = null, array $configuration = [])
    {
        if (!$this->isCached($this->templateFile, $this->getCacheId('cz_customcmsblock1'))) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        }

        return $this->fetch($this->templateFile, $this->getCacheId('cz_customcmsblock1'));
    }
    public function getWidgetVariables($hookName = null, array $configuration = [])
    {
        $sql = 'SELECT r.`id_czcustomcmsblock1info`, r.`id_shop`, rl.`text`
            FROM `'._DB_PREFIX_.'czcustomcmsblock1info` r
            LEFT JOIN `'._DB_PREFIX_.'czcustomcmsblock1info_lang` rl ON (r.`id_czcustomcmsblock1info` = rl.`id_czcustomcmsblock1info`)
            WHERE `id_lang` = '.(int)$this->context->language->id.' AND  `id_shop` = '.(int)$this->context->shop->id;
		
        return array(
            'czcustomcmsblock1infos' => Db::getInstance()->getRow($sql),
        );
		
    }
}
