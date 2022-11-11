<?php
/* Smarty version 3.1.43, created on 2022-11-11 18:33:32
  from '/var/www/html/admin/themes/new-theme/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636e876c5ccd26_98855217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f26719618a6a6db063d0f5949f89ee1226cac23' => 
    array (
      0 => '/var/www/html/admin/themes/new-theme/template/footer.tpl',
      1 => 1668179624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e876c5ccd26_98855217 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer" class="bootstrap">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

</div>
<?php }
}
