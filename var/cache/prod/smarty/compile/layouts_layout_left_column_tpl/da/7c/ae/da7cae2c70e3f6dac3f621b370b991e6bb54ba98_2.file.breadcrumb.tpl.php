<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace656177_70904638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da7cae2c70e3f6dac3f621b370b991e6bb54ba98' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/_partials/breadcrumb.tpl',
      1 => 1591953612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace656177_70904638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
   <div class="container">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16526337665ee74ace64fea1_30222734', 'breadcrumb');
?>

  </ol>
  </div>
</nav>
<?php }
/* {block 'breadcrumb_item'} */
class Block_11429502405ee74ace651840_20669525 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
          <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
        <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
      </li>
      <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_16526337665ee74ace64fea1_30222734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_16526337665ee74ace64fea1_30222734',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_11429502405ee74ace651840_20669525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11429502405ee74ace651840_20669525', 'breadcrumb_item', $this->tplIndex);
?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'breadcrumb'} */
}
