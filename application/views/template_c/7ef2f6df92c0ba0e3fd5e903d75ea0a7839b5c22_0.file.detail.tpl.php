<?php
/* Smarty version 3.1.31, created on 2017-09-14 15:17:23
  from "D:\phpStudy\WWW\mgr.daming.cn-1.0.0\application\views\seller\detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ba2d03e47476_39387266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ef2f6df92c0ba0e3fd5e903d75ea0a7839b5c22' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\mgr.daming.cn-1.0.0\\application\\views\\seller\\detail.tpl',
      1 => 1503882443,
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
function content_59ba2d03e47476_39387266 (Smarty_Internal_Template $_smarty_tpl) {
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
			 <div class="sub sub3">
				<button onclick="window.location.href='/seller/sellerList'">返回</button>
	       </div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
