<?php
/* Smarty version 3.1.31, created on 2017-08-02 08:33:38
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\seller\detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59817242eab6c7_24320462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8ad04bf98dfb6b5a490ad321eeb6047e8c9fb6b' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\seller\\detail.tpl',
      1 => 1501643336,
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
function content_59817242eab6c7_24320462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'商家详情'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'seller'), 0, false);
?>
 
			 <div class="detial">
			 	<div class="information">
			 		<span>商家详情</span>
			 	</div>
			 	<div class="content">
			 		<ul>
			 			<li>
			 				<span>商家名称:</span>
			 				<em><?php echo $_smarty_tpl->tpl_vars['seller']->value['seller_name'];?>
</em>
			 			</li>
			 			<li>
			 				<span>手机号:</span>
			 				<em><?php if ($_smarty_tpl->tpl_vars['seller']->value['phone'] == '') {?>暂无<?php } else {
echo $_smarty_tpl->tpl_vars['seller']->value['phone'];
}?></em>
			 			</li>
			 			<li>
			 				<span>电子邮箱:</span>
			 				<em><?php if ($_smarty_tpl->tpl_vars['seller']->value['email'] == '') {?>暂无<?php } else {
echo $_smarty_tpl->tpl_vars['seller']->value['email'];
}?></em>
			 			</li>
			 			<li>
			 				<span>商家描述:</span>
			 				<em><?php echo $_smarty_tpl->tpl_vars['seller']->value['note'];?>
</em>
			 			</li>
			 		</ul>
			 	</div>
			 </div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
