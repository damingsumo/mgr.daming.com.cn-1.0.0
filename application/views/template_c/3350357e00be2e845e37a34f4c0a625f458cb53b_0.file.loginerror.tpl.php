<?php
/* Smarty version 3.1.31, created on 2017-11-02 09:34:39
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\layouts\loginerror.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59fa762f40e279_84282933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3350357e00be2e845e37a34f4c0a625f458cb53b' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\layouts\\loginerror.tpl',
      1 => 1509585907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fa762f40e279_84282933 (Smarty_Internal_Template $_smarty_tpl) {
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
