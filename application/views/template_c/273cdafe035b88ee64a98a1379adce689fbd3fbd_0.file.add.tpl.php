<?php
/* Smarty version 3.1.31, created on 2017-11-11 14:41:03
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\seller\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a069b7fc58336_06984927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '273cdafe035b88ee64a98a1379adce689fbd3fbd' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\seller\\add.tpl',
      1 => 1509585907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
    'file:common/foot.tpl' => 1,
  ),
),false)) {
function content_5a069b7fc58336_06984927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'新增商家'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'seller'), 0, false);
?>
 
			 	<form id="sellerform" action="/seller/add" method="post"  onsubmit="return check()">
			 <div class="detial">
			 	<div class="information">
			 		<span>新增商家</span>
			 	</div>
			 	<div class="content">
			 		<ul>
			 			<li>
			 				<em  id="color">*</em>
			 				<span id="shopname">商家名:</span>
			 				<input type="text" id="seller_name" name="seller_name" value="">
			 			</li>
			 			<li>
			 				<em class="color">*</em>
			 				<span id="tele">手机号:</span>
			 				<input type="text" id="mobile" name="mobile" value="" >
			 			</li>
			 			 
			 			<li>
			 				<em class="color">&nbsp&nbsp&nbsp*</em>
			 				<span style="margin-left: 0;">邮箱:</span>
			 				<input type="text" id="email" name="email" value="">
			 			</li>
			 			<li>
			 				<em>&nbsp&nbsp</em>
			 				<span>简介:</span>
			 				<textarea name="note"></textarea>
			 			</li>
			 		 
			 		</ul>
			 	</div>
			 	<div class="sub ">
		    		<input type="submit" value="新增">
		    	</div>
			 </div>
			 </form>
		</div>

<?php echo '<script'; ?>
 type="text/javascript">	
	function check() {
	    var sellerName = $("#seller_name").val();
	    var email = $("#email").val();
	    var mobile = $("#mobile").val();
	    
		if(sellerName == ''){
			alert('请输入商家名称');
			return false;
		}
		if(mobile == ''){
			alert('请输入手机号');
			return false;
		}
		var isMobile = /^1[3|4|5|7|8][0-9]\d{8}$/;
		if(!isMobile.test(mobile)) {
			alert('请输入正确格式的手机号');
			return false;
		}
		if(email == ''){
			alert('请输入电子邮箱');
			return false;
		}
		var isEmail = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
		if(!isEmail.test(email)) {
			alert('请输入正确格式的电子邮箱');
			return false;
		}
		$('#sellerform').submit();
	}
<?php echo '</script'; ?>
> 

<?php $_smarty_tpl->_subTemplateRender("file:common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
