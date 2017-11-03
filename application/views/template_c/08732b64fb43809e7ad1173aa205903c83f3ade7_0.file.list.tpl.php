<?php
/* Smarty version 3.1.31, created on 2017-11-03 08:03:22
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\user\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59fbb24a17a254_24104929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08732b64fb43809e7ad1173aa205903c83f3ade7' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\user\\list.tpl',
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
function content_59fbb24a17a254_24104929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'用户列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'user'), 0, false);
?>
 
		    
		    <div class="detial">
		    <form action="/user/userList" id="myform" method="GET">
				<div class="search">
					<input type="text" placeholder="请输入用户名" name="value" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)) {
echo $_smarty_tpl->tpl_vars['value']->value;
}?>">
					<input type="button" onclick="search()">
				</div>
				</form>
				<table class="base-table ">
				 	<tbody>
				 		<tr > 
				 			<td>
				 				ID
				 			</td>
				 			<td>
				 				用户名
				 			</td>
				 			<td>
				 				姓名
				 			</td>
				 			<td>
				 				手机
				 			</td>
				 			<td>
				 				创建时间
				 			</td> 
				 		</tr>
				 		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
				 		<tr > 
				 			<td>
				 				 <?php echo $_smarty_tpl->tpl_vars['user']->value['uid'];?>

				 			</td>
				 			<td>
				 				 <a href="/user/detail?uid=<?php echo $_smarty_tpl->tpl_vars['user']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</a>
				 			</td>
				 			<td>
				 				 <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>

				 			</td>
				 			<td>
				 				 <?php echo $_smarty_tpl->tpl_vars['user']->value['mobile'];?>

				 			</td>
				 			<td>
				 				 <?php echo $_smarty_tpl->tpl_vars['user']->value['create_time'];?>

				 			</td>
				 		 
				 		</tr>
				 		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				 	</tbody>
				 </table>
				  
			      <div class="pull-right page-select">
					<div class="total-record">共<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>条记录，每页<span><?php echo $_smarty_tpl->tpl_vars['pageSize']->value;?>
</span>条
			<?php echo $_smarty_tpl->tpl_vars['pager']->value->toHTML();?>

		</div>
				</div>
		     </div>
	  </div>
	
<?php echo '<script'; ?>
 type="text/javascript">
	function search() {
		$('#myform').submit();
	}
	<?php echo '</script'; ?>
>
	
	<?php $_smarty_tpl->_subTemplateRender("file:common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
