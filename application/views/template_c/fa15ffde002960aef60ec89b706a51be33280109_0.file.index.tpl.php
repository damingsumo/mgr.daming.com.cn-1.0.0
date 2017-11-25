<?php
/* Smarty version 3.1.31, created on 2017-11-20 18:40:06
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a12b1068b2466_32566198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa15ffde002960aef60ec89b706a51be33280109' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\index\\index.tpl',
      1 => 1510904785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a12b1068b2466_32566198 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登陆</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<?php echo '<script'; ?>
 src="/assets/js/jquery-1.8.2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
</head>
 <body class="login-bg">
		<div class="login-con">
		  <div class="login-middle">
		    <img class="pull-left login-img" src="/assets/images/jinhu.png">
		    <div class="pull-left login-form">
		      <form id="adminform" action="/index/login" method="post"  onsubmit="return check()">
		        <div class="login-inline">
		          <img src="/assets/images/name.png"></img>
		          <div>
		            <input type="text" class="form-control" placeholder="请输入用户名" name="user_name" id="user_name" value="">
		          </div>
		        </div>
		        <div class="login-inline">
		          <img src="/assets/images/passw.png"></img>
		          <div>
		            <input type="password" class="form-control" placeholder="密码" name="password" id="password" value="">
		          </div>
		        </div>
		        <div class="rember-pwd">
		          <input type="checkbox">
		          &nbsp;记住密码 </div>
		        <input class="login-btn" type="submit" value="登录">
		      </form>
		    </div>
		  </div>
		 
		</div>
 
<?php echo '<script'; ?>
 type="text/javascript">	
	function check() {
	    var username = $("#user_name").val();
	    var password = $("#password").val();
		if( $.trim(username) == ''){
			alert('请输入用户名名');
			return false;
		}
		if( $.trim(password) == ''){
			alert('请输入密码');
			return false;
		}
		return true;
	}
<?php echo '</script'; ?>
> 

</body>
</html><?php }
}
