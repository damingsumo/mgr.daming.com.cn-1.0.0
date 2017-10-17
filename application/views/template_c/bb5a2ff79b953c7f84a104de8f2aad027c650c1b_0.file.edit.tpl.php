<?php
/* Smarty version 3.1.31, created on 2017-08-15 13:45:51
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\seller\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59928a8f8d5628_29235386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb5a2ff79b953c7f84a104de8f2aad027c650c1b' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\seller\\edit.tpl',
      1 => 1502775299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_59928a8f8d5628_29235386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'商家修改'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'seller'), 0, false);
?>
 
			 <div class="detial">
			 	<div class="information">
			 		<span>商家信息编辑</span>
			 	</div>
			 	<div class="content">
			 		<ul>
			 			<li>
			 				<em class="color" id="color">*</em>
			 				<span id="shopname">商家名称:</span>
			 				<em><?php echo $_smarty_tpl->tpl_vars['seller']->value['seller_name'];?>
</em>
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
			 	<div class="sub  sub1">
					<a href="">编辑</a>
				</div>
			 </div>
		</div><?php }
}
