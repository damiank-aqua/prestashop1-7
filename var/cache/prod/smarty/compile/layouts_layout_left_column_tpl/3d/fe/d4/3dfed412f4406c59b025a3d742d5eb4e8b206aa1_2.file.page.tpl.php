<?php
/* Smarty version 3.1.33, created on 2020-06-15 12:17:50
  from '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee74ace403783_50621114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dfed412f4406c59b025a3d742d5eb4e8b206aa1' => 
    array (
      0 => '/home/admin/domains/rainpolska.gevax.pl/public_html/themes/Electon/templates/page.tpl',
      1 => 1591953612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee74ace403783_50621114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1108336015ee74ace3f91e1_32540703', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_19761887455ee74ace3fa358_85810759 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_18230858405ee74ace3f99d4_96631874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19761887455ee74ace3fa358_85810759', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_2877721265ee74ace400334_53746058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_5936242505ee74ace400d55_40790084 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19170626795ee74ace3ffbc8_43054291 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2877721265ee74ace400334_53746058', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5936242505ee74ace400d55_40790084', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_12657181315ee74ace402342_41800130 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_14131820145ee74ace401cb3_70380045 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12657181315ee74ace402342_41800130', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1108336015ee74ace3f91e1_32540703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1108336015ee74ace3f91e1_32540703',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_18230858405ee74ace3f99d4_96631874',
  ),
  'page_title' => 
  array (
    0 => 'Block_19761887455ee74ace3fa358_85810759',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_19170626795ee74ace3ffbc8_43054291',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2877721265ee74ace400334_53746058',
  ),
  'page_content' => 
  array (
    0 => 'Block_5936242505ee74ace400d55_40790084',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14131820145ee74ace401cb3_70380045',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12657181315ee74ace402342_41800130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18230858405ee74ace3f99d4_96631874', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19170626795ee74ace3ffbc8_43054291', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14131820145ee74ace401cb3_70380045', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
