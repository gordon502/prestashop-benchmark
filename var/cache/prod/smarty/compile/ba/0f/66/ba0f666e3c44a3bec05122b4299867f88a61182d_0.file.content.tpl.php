<?php
/* Smarty version 3.1.43, created on 2022-11-11 18:33:32
  from '/var/www/html/admin/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636e876c4188a0_72517925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba0f666e3c44a3bec05122b4299867f88a61182d' => 
    array (
      0 => '/var/www/html/admin/themes/new-theme/template/content.tpl',
      1 => 1668179624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e876c4188a0_72517925 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
