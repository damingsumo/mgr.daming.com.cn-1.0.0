<?php
/* Smarty version 3.1.31, created on 2017-08-17 09:10:50
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\common\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5994ed1a3c23c2_67726923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c7f6be72febe71d5b9aa716a92b362fef7cfedd' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\common\\head.tpl',
      1 => 1502870684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5994ed1a3c23c2_67726923 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商家管理</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<?php echo '<script'; ?>
 src="/assets/js/jquery-1.8.2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/common.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="header">
		<span class="logo"></span>
		<em>金狐狸服务平台</em>
		<div class="header_right">
			 <span class="infor"></span>
			<span>当前用户： <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['user_name'];?>
</span>
			<a href="/index/loginout">退出登录</a>
		</div>
	</div>
	
	<div class="bg qiyong" style="display:none;" id="qiyong"> 
		      <div class="tishi-close"></div>
		      <div class="tishi-text2">确认要启用吗？</div>
		      <div class="tishi-btn">
		         <button onclick="sure(1)">确定<tton>
		         <button class="startfail">取消<tton>
		      </div> 
		</div>
		<div class="bg jinyong" style="display:none;" id="jinyong"> 
		      <div class="tishi-close"></div>
		      <div class="tishi-text2">确认要禁用吗？</div>
		      <div class="tishi-btn">
		         <button  onclick="sure(2)">确定<tton>
		         <button  class="startfail">取消<tton>
		      </div> 
		</div>
		<div class="bg shanchu" style="display:none;"> 
				      <div class="tishi-close"></div>
				      <div class="tishi-text2">确认要删除吗？</div>
				      <div class="tishi-btn">
				         <button  onclick="sure(3)">确定<tton>
				         <button  class="startfail">取消<tton>
				      </div> 
		        </div><?php }
}
