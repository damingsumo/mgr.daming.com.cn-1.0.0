<?php
/* Smarty version 3.1.31, created on 2017-09-14 17:15:50
  from "D:\phpStudy\WWW\mgr.daming.cn-1.0.0\application\views\brand\detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ba48c6cabab7_72215532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14210ae7b608bc5c33b26baa62549f9b359abdd8' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\mgr.daming.cn-1.0.0\\application\\views\\brand\\detail.tpl',
      1 => 1503710775,
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
function content_59ba48c6cabab7_72215532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'品牌'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'brand'), 0, false);
?>
 	
<div class="detial">
				<ul class="top">
					<li> 品牌详情</li>
				</ul>
				<div class="content">
		    		<ul>
		    			<li>
		    				 
		    				<span>品牌名称：</span>
		    				<em><?php echo $_smarty_tpl->tpl_vars['brand']->value['name'];?>
</em>
		    			</li>
		    			<li>
		    				 
		    				<span>品牌属地：</span>
		    				<em><?php if ($_smarty_tpl->tpl_vars['brand']->value['region'] == 1) {?>欧美<?php } elseif ($_smarty_tpl->tpl_vars['brand']->value['region'] == 2) {?>中国 <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value['region'] == 3) {?>日韩<?php }?></em>
		    				 
		    			</li>
		    			 
		    			<li id="li-height">
		    				 
		    				<span>品牌简介：</span>
		    				 
		    					<em id="abstcont">
			    					<?php echo $_smarty_tpl->tpl_vars['brand']->value['note'];?>

		    					</em>
		    				 
		    			</li>
		    			<li>
		    				 
		    				<span>品牌logo：</span>
		    				 <div class="pic">
		    				 	<img src="<?php echo $_smarty_tpl->tpl_vars['brand']->value['picture_url'];?>
">
		    				 </div>
		    			</li>
		    		</ul>
		    	</div>
		    	<div class="sub sub3">
				<button onclick="window.location.href='/brand/brandList'">返回</button>
	       </div>
	 </div>


<?php $_smarty_tpl->_subTemplateRender("file:common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
