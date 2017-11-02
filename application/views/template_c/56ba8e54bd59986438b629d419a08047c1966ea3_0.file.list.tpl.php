<?php
/* Smarty version 3.1.31, created on 2017-11-02 18:15:03
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\brand\collocation\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59faf0274ea8b4_50172885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56ba8e54bd59986438b629d419a08047c1966ea3' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\brand\\collocation\\list.tpl',
      1 => 1509617587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_59faf0274ea8b4_50172885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'搭配管理'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'brand'), 0, false);
?>

		   
		    <div class="detial ">
	 		    <ul class="top">
					<li><a href="/collocation/goadd?gid=<?php echo $_smarty_tpl->tpl_vars['goods']->value['gid'];?>
"><img src="/assets/images/xinjian.png">新建</a></li>
					<li><a href="">搭配管理</a></li>
				</ul>
				<div class="color_add">
						<div> 
							<span>品牌：</span>
						</div>
						 <span><?php echo $_smarty_tpl->tpl_vars['goods']->value['brand_name'];?>
</span>
	            </div>
	            <div class="collocation"> 
	            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collocations']->value, 'collocation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['collocation']->value) {
?>
	            <div class="color_add  ">
						<div> 
							<span>搭配1ID：</span>
						</div>
						<div> 
							<span><?php echo $_smarty_tpl->tpl_vars['goods']->value['brand_name'];?>
</span>
						</div>
						<div> 
							<span>名称：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</span>
						</div>
						<div> 
							<span>类别：<?php if ($_smarty_tpl->tpl_vars['goods']->value['genre']['category'] == 1) {?>上装<?php } elseif ($_smarty_tpl->tpl_vars['goods']->value['genre']['category'] == 2) {?>裤子<?php } elseif ($_smarty_tpl->tpl_vars['goods']->value['genre']['category'] == 3) {?>套装<?php } elseif ($_smarty_tpl->tpl_vars['goods']->value['genre']['category'] == 4) {?> 裙装<?php }?> </span>
						<div> 
							<span>分类：<?php echo $_smarty_tpl->tpl_vars['goods']->value['genre']['name'];?>
</span>
						</div>
	            </div>
	            <?php if (isset($_smarty_tpl->tpl_vars['collocation']->value['firstinfo'])) {?>
	            <div class="color_add  ">
						<div> 
							<span>搭配2ID：</span>
						</div>
						<div> 
							<span><?php echo $_smarty_tpl->tpl_vars['collocation']->value['firstinfo']['gid'];?>
</span>
						</div>
						<div> 
							<span>名称：<?php echo $_smarty_tpl->tpl_vars['collocation']->value['firstinfo']['goods_name'];?>
</span>
						</div>
						<div> 
							<span>类别：<?php if ($_smarty_tpl->tpl_vars['collocation']->value['firstinfo']['genre']['category'] == 1) {?>上装<?php } elseif ($_smarty_tpl->tpl_vars['collocation']->value['firstinfo']['genre']['category'] == 2) {?>裤子<?php } elseif ($_smarty_tpl->tpl_vars['collocation']->value['firstinfo']['genre']['category'] == 3) {?>套装<?php } elseif ($_smarty_tpl->tpl_vars['collocation']->value['firstinfo']['genre']['category'] == 4) {?> 裙装<?php }?> </span>
						</div>
						<div> 
							<span>分类：<?php echo $_smarty_tpl->tpl_vars['collocation']->value['firstinfo']['genre']['name'];?>
</span>
						</div>
	            </div>
	            <?php }?>
	            <?php if (isset($_smarty_tpl->tpl_vars['collocation']->value['secondinfo'])) {?>
	            <div class="color_add  ">
						<div> 
							<span>搭配3ID：</span>
						</div>
						<div> 
							<span><?php echo $_smarty_tpl->tpl_vars['collocation']->value['secondinfo']['gid'];?>
</span>
						</div>
						<div> 
							<span>名称：<?php echo $_smarty_tpl->tpl_vars['collocation']->value['secondinfo']['goods_name'];?>
</span>
						</div>
						<div> 
							<span>类别：<?php if ($_smarty_tpl->tpl_vars['collocation']->value['secondinfo']['genre']['category'] == 1) {?>上装<?php } elseif ($_smarty_tpl->tpl_vars['collocation']->value['secondinfo']['genre']['category'] == 2) {?>裤子<?php } elseif ($_smarty_tpl->tpl_vars['collocation']->value['secondinfo']['genre']['category'] == 3) {?>套装<?php } elseif ($_smarty_tpl->tpl_vars['collocation']->value['secondinfo']['genre']['category'] == 4) {?> 裙装<?php }?></span>
						</div>
						<div> 
							<span>分类：<?php echo $_smarty_tpl->tpl_vars['collocation']->value['secondinfo']['genre']['name'];?>
</span>
						</div>
	            </div>
	            <?php }?>
	        </div>
	             <div class="haircolor_img collocation_img ">
	                    <em>*</em>
					    <span>搭配图片：</span>
					    <div class="increase increase2">
					    	<img src="<?php echo $_smarty_tpl->tpl_vars['collocation']->value['synthesis_url'];?>
">
					    </div>
	                   
						
						 
	                </div>
	            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		     </div>
	  </div>
</body>
</html><?php }
}
