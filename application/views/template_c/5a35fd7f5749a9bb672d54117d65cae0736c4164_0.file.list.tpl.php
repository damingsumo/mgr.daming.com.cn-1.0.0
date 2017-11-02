<?php
/* Smarty version 3.1.31, created on 2017-11-02 09:35:17
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\seller\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59fa76551f3467_47551623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a35fd7f5749a9bb672d54117d65cae0736c4164' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\seller\\list.tpl',
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
function content_59fa76551f3467_47551623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'商家列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'seller'), 0, false);
?>
    
			<div class="detial">
				<ul class="top">
					<li><a href="/seller/goadd"><img src="/assets/images/xinjian.png">新建</a></li>
<!-- 					<li><a href=""><img src="/assets/images/kai.png">开</a></li> -->
<!-- 					<li><a href=""><img src="/assets/images/guan.png">关</a></li> -->
				</ul>
				<form action="/seller/sellerList" id="myform" method="GET">
				<div class="search">
					<input type="text" placeholder="请输入商家名称" name="value" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)) {
echo $_smarty_tpl->tpl_vars['value']->value;
}?>">
					<input type="button" onclick="search()">
				</div>
				</form>
				<table class="base-table">
				 	<tbody>
				 		<tr> 
				 			<td>
				 				商家ID
				 			</td>
				 			<td>
				 				商家名称
				 			</td>
				 			<td>
				 				商家手机
				 			</td>
				 			<td>
				 				状态
				 			</td>
				 			<td>
				 				操作
				 			</td>
				 		</tr>
				 		<?php if (!empty($_smarty_tpl->tpl_vars['sellers']->value)) {?>
				 		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sellers']->value, 'seller');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['seller']->value) {
?>
				 		<tr> 
				 			<td>
				 				<?php echo $_smarty_tpl->tpl_vars['seller']->value['sid'];?>

				 			</td>
				 			<td>
				 				<a href="/seller/detail?sid=<?php echo $_smarty_tpl->tpl_vars['seller']->value['sid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['seller']->value['seller_name'];?>
</a>
				 			</td>
				 			<td>
				 				<?php if ($_smarty_tpl->tpl_vars['seller']->value['mobile'] == '') {?>暂无<?php } else {
echo $_smarty_tpl->tpl_vars['seller']->value['mobile'];
}?>
				 			</td>
				 			<td>
				 				<?php if ($_smarty_tpl->tpl_vars['seller']->value['status'] == 1) {?>启用<?php } elseif ($_smarty_tpl->tpl_vars['seller']->value['status'] == 3) {?>禁用<?php }?>
				 			</td>
				 			<td>
				 				<a href="/seller/edit?sid=<?php echo $_smarty_tpl->tpl_vars['seller']->value['sid'];?>
">编辑</a>
				 			</td>
				 		</tr>
				 		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				 		<?php } else { ?>
				 		<td colspan="5">
		 						暂无商家数据
						</td>
						 <?php }?>
				 	</tbody>
				 </table>
				 <div class="pull-right page-select">
					<div class="total-record">共<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>条记录，每页<span><?php echo $_smarty_tpl->tpl_vars['pageSize']->value;?>
</span>条
			<?php echo $_smarty_tpl->tpl_vars['pager']->value->toHTML();?>

		</div>
				</div>
		<input type="hidden" id="total" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
"/>
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
?>
	    <?php }
}
