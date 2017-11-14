<?php
/* Smarty version 3.1.31, created on 2017-11-14 11:03:13
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\brand\goods\detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a0a5cf1402d10_64835993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3189191c56c685b83e79dfe9372809ca76e96e28' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\brand\\goods\\detail.tpl',
      1 => 1510628427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_5a0a5cf1402d10_64835993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'商品'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'brand'), 0, false);
?>
 	
		    <div class="top_header">
			     <span>商品信息</span>
			     <a href="/goods/goodsModelAdd"><span style="margin-left:0;padding-left:7px;">模特身材数据</span></a>
	        </div>
		     <form>
		        <div class="news ">
			     		 <ul class="news-list">
			     		 	<li>
			     		 		<label>商品名：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</label> 
			     		 	</li>
			     		 	<li>
			     		 		<label>款式：<?php if ($_smarty_tpl->tpl_vars['genre']->value['category'] == 1) {?>上装
			     		 		<?php } elseif ($_smarty_tpl->tpl_vars['genre']->value['category'] == 2) {?>裤子
			     		 		<?php } elseif ($_smarty_tpl->tpl_vars['genre']->value['category'] == 4) {?>套装
			     		 		<?php } elseif ($_smarty_tpl->tpl_vars['genre']->value['category'] == 3) {?>裙装<?php }?></label> 
			     		 	</li>
			     		    <li>
			     		 		<label>类型：<?php echo $_smarty_tpl->tpl_vars['genre']->value['name'];?>

			     		 		</label> 
			     		 	</li>
			     		 	<li>
			     		 		<label>型号：<?php echo $_smarty_tpl->tpl_vars['goods']->value['style_number'];?>
</label> 
			     		 	</li>
			     		 	<li>
			     		 		<label>原价：<?php echo $_smarty_tpl->tpl_vars['goods']->value['old_price']/100;?>
元</label> 
			     		 	</li>
			     		 	<li>
			     		 		<label>现价：<?php echo $_smarty_tpl->tpl_vars['goods']->value['price']/100;?>
元</label> 
			     		 	</li>
			     		    <li>
			     		 		<label>材质：<?php echo $_smarty_tpl->tpl_vars['goods']->value['material'];?>
</label> 
			     		 	</li>
			     		 	 
			     		 </ul>
			     		 <div class="haircolor_img"> 
					    <span>商品图片：</span>
						
						<div class="increase">
							<img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['show_url'];?>
">
						</div>
						 
	                </div>
			     		  
			     	</div>
			     	
			     	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sizes']->value, 'size');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
?>
			     	<div class="goods_minus   goods_minus1">
			     		<ul class="goods_size">
			     		 	<li>
			     		 		<label>尺码：</label>
			     		 		 <label><?php if ($_smarty_tpl->tpl_vars['size']->value['size'] == 1) {?>XXS
			     		 		 <?php } elseif ($_smarty_tpl->tpl_vars['size']->value['size'] == 2) {?>XS
			     		 		 <?php } elseif ($_smarty_tpl->tpl_vars['size']->value['size'] == 3) {?>S
			     		 		 <?php } elseif ($_smarty_tpl->tpl_vars['size']->value['size'] == 4) {?>M
			     		 		 <?php } elseif ($_smarty_tpl->tpl_vars['size']->value['size'] == 5) {?>L
			     		 		 <?php } elseif ($_smarty_tpl->tpl_vars['size']->value['size'] == 6) {?>XL
			     		 		 <?php }?></label>
			     		 	</li>
			     		 	<li>
			     		 		<label>腰围：</label>
			     		 		 <label><?php echo $_smarty_tpl->tpl_vars['size']->value['kummerbund'];?>
cm</label>
			     		 	</li>
			     		    <li>
			     		 		<label>臀围：</label>
			     		 		 <label><?php echo $_smarty_tpl->tpl_vars['size']->value['kummerbund'];?>
cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>胸围：</label>
			     		 		 <label><?php echo $_smarty_tpl->tpl_vars['size']->value['bust'];?>
cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>大腿围：</label>
			     		 		 <label><?php echo $_smarty_tpl->tpl_vars['size']->value['thigh_girth'];?>
cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>膝围：</label>
			     		 		 <label><?php echo $_smarty_tpl->tpl_vars['size']->value['knee_circumference'];?>
cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>裤长：</label>
			     		 		 <label><?php echo $_smarty_tpl->tpl_vars['size']->value['outseam'];?>
cm</label>
			     		 	</li>
			     		    <li>
			     		 		<label>肩宽：</label>
			     		 		 <label><?php echo $_smarty_tpl->tpl_vars['size']->value['s_width'];?>
cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>衣长：</label>
			     		 		 <label><?php echo $_smarty_tpl->tpl_vars['size']->value['length'];?>
cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>袖肥：</label>
			     		 		 <label><?php echo $_smarty_tpl->tpl_vars['size']->value['sleeve_width'];?>
cm</label>
			     		 	</li>
			     		 </ul>
			     	</div>
		      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		     	<!--结束-->
		     </form>
		<div class="sub sub3">
				<button onclick="window.location.href='/goods/goodsList?brand_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['brand_id'];?>
'">返回</button>
	       </div>
		</div>
</body>
</html><?php }
}
