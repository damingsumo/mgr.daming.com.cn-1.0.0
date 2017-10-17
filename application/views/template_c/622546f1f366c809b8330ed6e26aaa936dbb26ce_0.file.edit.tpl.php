<?php
/* Smarty version 3.1.31, created on 2017-08-30 16:25:53
  from "D:\phpStudy\WWW\mgr.daming.cn-1.0.0\application\views\admin\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a67691c5d8d6_70249437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '622546f1f366c809b8330ed6e26aaa936dbb26ce' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\mgr.daming.cn-1.0.0\\application\\views\\admin\\edit.tpl',
      1 => 1504081550,
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
function content_59a67691c5d8d6_70249437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'管理员列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'admin'), 0, false);
?>

			<div class="detial">
				<div class="information">
			 		<span>管理员信息修改</span>
			 	</div>
				<form id="adminform" action="/admin/edit" method="post">
				<input type="hidden" name="admin_id" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_id'];?>
" id="admin_id"> 
				<div class="list">
		    		<ul>
		    			<li>
		    				<div class="manage">
		    					<em>*</em>
		    				    <span>用户名：</span>
		    				</div>
		    				<em><?php echo $_smarty_tpl->tpl_vars['admin']->value['user_name'];?>
</em>
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <em>*</em>
		    				    <span>姓名：</span>
		    				</div>
		    				<input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['name'];?>
">
		    				 
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <em>*</em>
		    				    <span>手机号：</span>
		    				</div>
		    				<input type="text" id="mobile" name="mobile" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['mobile'];?>
" style ="border-radius: 5px;border: 1px solid #bfbfbf;height:25px;width: 150px;margin-left:0;">
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <span>email：</span>
		    				</div>
		    				<input type="text" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['email'];?>
">
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <span>备注：</span>
		    				</div>
		    				<textarea name="note" style="margin-left: 0;"><?php echo $_smarty_tpl->tpl_vars['admin']->value['note'];?>
</textarea>
		    			</li>
		    		</ul>
		    	</div>
		    	<div class="sub">
		    		<button onclick="check()">保存</button>
		    		</div>
		    </form>
		    	<div class="sub">
		    		<button onclick="changePassword()">重置密码</button>
		    	</div>
	       </div>
	 </div>

<?php echo '<script'; ?>
 type="text/javascript">	
	function check() {
	    var name = $("#name").val();
	    var mobile = $("#mobile").val();
	    
		if($.trim(name) == ''){
			alert('请输入姓名');
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

	function changePassword() {
		var adminId = $("#admin_id").val();
		var url ='/admin/changePassword';
		$.ajax({
			type: "POST",
			url: url,
			data: {adminId:adminId},
			datatype:'json',
			success: function(data) {
				var member = eval("("+data+")");
				$('#_xinfo').html('');
				if(member.status == 200) {
					alert(member.data);
					window.location.reload();
				} else {
					alert(member.data);
				}
			}
		});

	}
<?php echo '</script'; ?>
> 

<?php $_smarty_tpl->_subTemplateRender("file:common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
