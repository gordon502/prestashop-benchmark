<?php
/* Smarty version 3.1.43, created on 2022-11-11 17:44:01
  from '/var/www/html/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636e7bd1d8dc03_02314876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e917709f9a6d5bc9cd7854e1367f385d8ec4c0e8' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1668179641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e7bd1d8dc03_02314876 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
