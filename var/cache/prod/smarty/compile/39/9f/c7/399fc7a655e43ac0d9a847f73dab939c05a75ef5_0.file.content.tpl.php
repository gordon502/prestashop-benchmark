<?php
/* Smarty version 3.1.43, created on 2022-11-11 18:33:16
  from '/var/www/html/admin/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636e875c40f607_46079633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '399fc7a655e43ac0d9a847f73dab939c05a75ef5' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/content.tpl',
      1 => 1668179628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e875c40f607_46079633 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
