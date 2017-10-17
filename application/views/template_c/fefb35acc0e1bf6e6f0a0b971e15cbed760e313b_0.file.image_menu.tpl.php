<?php
/* Smarty version 3.1.31, created on 2017-08-12 16:52:33
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\common\image_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598ec1d17b22a3_00441392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fefb35acc0e1bf6e6f0a0b971e15cbed760e313b' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\common\\image_menu.tpl',
      1 => 1502527788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598ec1d17b22a3_00441392 (Smarty_Internal_Template $_smarty_tpl) {
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
