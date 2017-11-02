<?php
/* Smarty version 3.1.31, created on 2017-11-02 11:53:00
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\common\image_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59fa969c26eb20_06938804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '739eafc17a456db9863dfbf3a2f26fa4b73490c8' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\common\\image_menu.tpl',
      1 => 1509585907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fa969c26eb20_06938804 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['nextType']->value)) {
$_smarty_tpl->_assignInScope('nextType', '');
}?>

<div class="top_header">
	<div>
	 <a <?php if ($_smarty_tpl->tpl_vars['nextType']->value == "face") {?> class="link_color" <?php }?> onclick ="go_face()">脸型管理</a> 
	 <a <?php if ($_smarty_tpl->tpl_vars['nextType']->value == "complexion") {?> class="link_color" <?php }?> onclick ="go_complexion()">肤色管理</a> 
	 <a <?php if ($_smarty_tpl->tpl_vars['nextType']->value == "hairstyle") {?> class="link_color" <?php }?> onclick ="go_hairstyle()">发型管理</a> 
	 <a <?php if ($_smarty_tpl->tpl_vars['nextType']->value == "haircolor") {?> class="link_color" <?php }?> onclick ="go_haircolor()">发色管理</a> 
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	function go_face() {
		window.location.href='/hair/faceList';
	}
	function go_complexion() {
		window.location.href='/hair/complexionList';
	}
	function go_hairstyle() {
		window.location.href='/hair/hairstyleList';
	}
	function go_haircolor() {
		window.location.href='/hair/haircolorList';
	}
	
<?php echo '</script'; ?>
><?php }
}
