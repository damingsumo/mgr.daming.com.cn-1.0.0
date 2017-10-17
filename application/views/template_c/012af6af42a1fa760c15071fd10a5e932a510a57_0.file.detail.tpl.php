<?php
/* Smarty version 3.1.31, created on 2017-08-28 15:36:35
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\admin\detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a3c803ca7102_83039488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '012af6af42a1fa760c15071fd10a5e932a510a57' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\admin\\detail.tpl',
      1 => 1503905301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_59a3c803ca7102_83039488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'管理员列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'admin'), 0, false);
?>

			 <div class="detial">
			 	<div class="information">
			 		<span>管理员信息</span>
			 	</div>
			 	<div class="content">
			 		<ul>
			 			<li>
			 				<span>姓名:</span>
			 				<em><?php echo $_smarty_tpl->tpl_vars['admin']->value['name'];?>
</em>
			 			</li>
			 			<li>
			 				<span>用户名:</span>
			 				<em><?php echo $_smarty_tpl->tpl_vars['admin']->value['user_name'];?>
</em>
			 			</li>
			 			<li>
			 				<span>手机号:</span>
			 				<em><?php echo $_smarty_tpl->tpl_vars['admin']->value['mobile'];?>
</em>
			 			</li>
			 			<li>
			 				<span>邮箱:</span>
			 				<em><?php echo $_smarty_tpl->tpl_vars['admin']->value['email'];?>
</em>
			 			</li>
			 			<li>
			 				<span>备注:</span>
			 				<em><?php echo $_smarty_tpl->tpl_vars['admin']->value['note'];?>
</em>
			 			</li>
			 		 
			 		</ul>
			 	</div>
			 	 <div class="sub sub3">
				<button onclick="window.location.href='/admin/adminList'">返回</button>
	       </div>
			 </div>
		</div>
</body>
</html><?php }
}
