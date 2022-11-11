<?php
/* Smarty version 3.1.43, created on 2022-11-11 17:47:21
  from '/var/www/html/admin038hdoheg/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636e7c99abb515_81763776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '289aa8687f5133d6c2f7003ca3f362b39c0de51f' => 
    array (
      0 => '/var/www/html/admin038hdoheg/themes/default/template/content.tpl',
      1 => 1668179628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e7c99abb515_81763776 (Smarty_Internal_Template $_smarty_tpl) {
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
