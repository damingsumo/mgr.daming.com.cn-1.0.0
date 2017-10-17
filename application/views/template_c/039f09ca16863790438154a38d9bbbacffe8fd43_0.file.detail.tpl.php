<?php
/* Smarty version 3.1.31, created on 2017-08-28 15:11:07
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\shoes\detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a3c20bd1e9d4_12814853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '039f09ca16863790438154a38d9bbbacffe8fd43' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\shoes\\detail.tpl',
      1 => 1503904239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_59a3c20bd1e9d4_12814853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'鞋子详情'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'shoes'), 0, false);
?>
  
		   
		    <div class="detial ">
	 		
				<ul class="top">
					<li>鞋子信息</li>
				</ul>
				<div class="color_add">
						<div> 
							<span>ID：</span>
						</div>
						 <span><?php echo $_smarty_tpl->tpl_vars['shoes']->value['shoes_id'];?>
</span>
	            </div>
	            <div class="color_add">
						<div> 
							<span>名称：</span>
						</div>
						 <span><?php echo $_smarty_tpl->tpl_vars['shoes']->value['name'];?>
</span>
	            </div>
	            <div class="color_add">
						<div> 
							<span>分类：</span>
						</div>
						 <span><?php if ($_smarty_tpl->tpl_vars['shoes']->value['category'] == 1) {?> 单鞋 <?php } elseif ($_smarty_tpl->tpl_vars['shoes']->value['category'] == 2) {?>凉鞋 
						  <?php } elseif ($_smarty_tpl->tpl_vars['shoes']->value['category'] == 3) {?> 休闲鞋 <?php } elseif ($_smarty_tpl->tpl_vars['shoes']->value['category'] == 4) {?>靴子 <?php }?></span>
	            </div>
	            <div class="color_add">
						<div> 
							<span>颜色：</span>
						</div>
						 <span><?php echo $_smarty_tpl->tpl_vars['shoes']->value['color'];?>
</span>
	            </div> 
	            <div class="color_add">
						<div> 
							<span>状态：</span>
						</div>
						 <span><?php if ($_smarty_tpl->tpl_vars['shoes']->value['status'] == 1) {?>启用<?php } elseif ($_smarty_tpl->tpl_vars['shoes']->value['status'] == 2) {?>禁用<?php }?></span>
	            </div> 
	            <div class="color_add">
						<div> 
							<span>创建时间：</span>
						</div>
						 <span><?php echo $_smarty_tpl->tpl_vars['shoes']->value['create_time'];?>
</span>
	            </div> 
	             
	             <div class="haircolor_img"> 
					    <span>合成图片：</span>
						
						<div class="increase">
							<img src="<?php echo $_smarty_tpl->tpl_vars['shoes']->value['picture_url'];?>
">
						</div>
						 
	                </div>
	                 <div class="haircolor_img"> 
					    <span>展示图片：</span>
						
						<div class="increase">
							<img src="<?php echo $_smarty_tpl->tpl_vars['shoes']->value['compose_url'];?>
">
						</div>
						 
	                </div>
	                
                    <div class="sub sub3">
				<button onclick="window.location.href='/shoes/shoesList'">返回</button>
	       </div>
		     </div>
	  </div>
</body>
</html><?php }
}
