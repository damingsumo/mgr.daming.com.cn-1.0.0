<?php
/* Smarty version 3.1.31, created on 2017-09-14 16:49:10
  from "D:\phpStudy\WWW\mgr.daming.cn-1.0.0\application\views\layouts\loginerror.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ba4286a0e7c2_55521890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd62728c35eb7c32ef74395446954964ce3dc2006' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\mgr.daming.cn-1.0.0\\application\\views\\layouts\\loginerror.tpl',
      1 => 1502700796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ba4286a0e7c2_55521890 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录失败</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
	<div class="false">
		<img src="/assets/images/false.png">
		<div class="false-item">
			<span>失败原因：</span>
			<span><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</span>
		</div>
		<img src="/assets/images/line.png">
		<div class="sub sub3">
		   		<?php if (isset($_smarty_tpl->tpl_vars['url']->value)) {?>
				<button onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'">返回</button>
            <?php } else { ?>
				<button onclick="javascript:history.go(-1);">返回</button>
            <?php }?>
		</div>
	</div>
</body>
</html><?php }
}
