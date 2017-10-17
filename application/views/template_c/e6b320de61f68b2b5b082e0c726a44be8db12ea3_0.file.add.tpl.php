<?php
/* Smarty version 3.1.31, created on 2017-08-30 16:25:58
  from "D:\phpStudy\WWW\mgr.daming.cn-1.0.0\application\views\admin\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a676964d5686_05418652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6b320de61f68b2b5b082e0c726a44be8db12ea3' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\mgr.daming.cn-1.0.0\\application\\views\\admin\\add.tpl',
      1 => 1504081267,
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
function content_59a676964d5686_05418652 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'管理员列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'admin'), 0, false);
?>

	    
			<div class="detial">
				<div class="information">
			 		<span>新增管理员</span>
			 	</div>
				<form id="adminform" action="/admin/add" method="post"  onsubmit="return check()">
				<div class="list">
		    		<ul>
		    			<li>
		    				<div class="manage">
		    					<em>*</em>
		    				    <span>用户名：</span>
		    				</div>
		    				<input type="text" id="user_name" name="user_name" value="">
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <em>*</em>
		    				    <span>姓名：</span>
		    				</div>
		    				<input type="text" id="name" name="name" value="">
		    				 
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <em>*</em>
		    				    <span>密码：</span>
		    				</div>
		    				<input type="password" id="password" name="password" value="" style="border-radius: 5px;border: 1px solid #bfbfbf;height:25px;width: 150px;margin-left:0;">
		    				 
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <em>*</em>
		    				    <span>手机号：</span>
		    				</div>
		    				<input type="text" id="mobile" name="mobile" value="">
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <span>email：</span>
		    				</div>
		    				<input type="text" id="email" name="email" value="">
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <span>备注：</span>
		    				</div>
		    				<textarea name="note"></textarea>
		    			</li>
		    		</ul>
		    	</div>
		    		<div class="sub ">
		    		<input type="submit" value="保存">
		    	</div>
		    </form>
	       </div>
	 </div>

<?php echo '<script'; ?>
 type="text/javascript">	
	function check() {
	    var userName = $("#user_name").val();
	    var name = $("#name").val();
	    var password = $("#password").val();
	    var mobile = $("#mobile").val();
	    
		if($.trim(userName) == ''){
			alert('请输入管理员用户名');
			return false;
		}
		if($.trim(name) == ''){
			alert('请输入姓名');
			return false;
		}
		if($.trim(password) == ''){
			alert('请输入密码');
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
		$('#adminform').submit();
	}
<?php echo '</script'; ?>
> 

<?php $_smarty_tpl->_subTemplateRender("file:common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
