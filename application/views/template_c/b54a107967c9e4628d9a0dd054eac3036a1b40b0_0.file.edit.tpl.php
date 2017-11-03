<?php
/* Smarty version 3.1.31, created on 2017-11-03 08:03:37
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\seller\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59fbb2591c8482_56435846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b54a107967c9e4628d9a0dd054eac3036a1b40b0' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\seller\\edit.tpl',
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
function content_59fbb2591c8482_56435846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'商家修改'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'seller'), 0, false);
?>
 
			 <div class="detial">
			 	<div class="information">
			 		<span>商家信息编辑</span>
			 	</div>
			 	<form id="brandForm" action="/seller/edit" method="post"  onsubmit="return check()"> 
			 	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['seller']->value['sid'];?>
" name="sid">
			 	<div class="content">
			 		<ul>
			 			<li>
			 				<div class="goods_item  goods_model">
		     				<em>*</em>
		     				<label>商家名称：</label>
		     			    <input type="text" name="seller_name" value="<?php echo $_smarty_tpl->tpl_vars['seller']->value['seller_name'];?>
" id="seller_name">
		     			</div>
			 			</li>
			 			<li>
			 				<em class="color"></em>
			 				<span>商家电子邮箱:</span>
			 				<em><?php echo $_smarty_tpl->tpl_vars['seller']->value['email'];?>
</em>
			 			</li>
			 			<li>
			 				<em class="color"></em>
			 				<span>商家手机:</span>
			 				<em><?php echo $_smarty_tpl->tpl_vars['seller']->value['mobile'];?>
</em>
			 			</li>
			 			<li>
			 				<em class="color"></em>
			 				<span>商家账户:</span>
			 				<em><?php echo $_smarty_tpl->tpl_vars['seller']->value['balance'];?>
</em>
			 			</li>
			 			<li>
			 				<em class="color"></em>
			 				<span>商家创建时间:</span>
			 				<em><?php echo $_smarty_tpl->tpl_vars['seller']->value['create_time'];?>
</em>
			 			</li>
			 			<li>
			 				<em class="color"></em>
			 				<span>商家描述:</span>
			 				<textarea><?php echo $_smarty_tpl->tpl_vars['seller']->value['create_time'];?>
</textarea>
			 			</li>
			 		</ul>
			 	</div>
			 	<div class="sub">
					<input type="submit" value="编辑">
				</div>
				</form>
			 </div>
		</div>
		
<?php echo '<script'; ?>
 type="text/javascript">	
		<?php echo '</script'; ?>
> 

<?php $_smarty_tpl->_subTemplateRender("file:common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
