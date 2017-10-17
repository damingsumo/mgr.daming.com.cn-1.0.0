<?php
/* Smarty version 3.1.31, created on 2017-08-28 16:51:36
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\brand\goods\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a3d9986ebf55_80107468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bf64c63f20829314c185e0b64f9392e0d9006fe' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\brand\\goods\\edit.tpl',
      1 => 1503910293,
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
function content_59a3d9986ebf55_80107468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'修改商品'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'brand'), 0, false);
?>

		   <div class="goods">
		    <div class="top_header">
			     <span>修改商品</span>
	        </div>
		     <form id="brandForm" action="/goods/edit" method="post"  onsubmit="return check()"> 
		     <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['gid'];?>
" name="gid">
		     <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['brand_id'];?>
" name="brand_id">
		     	<div class="goods_plus">
		     		<div class="goods_name">
		     			<em>*</em>
		     			<label>商品名：</label>
		     			<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
">
		     		</div>
		     		<div class="goods_list">
		     			<div class="goods_item">
		     				<em>*</em>
		     				<label>款式：</label>
		     			    <select class="style sb" name="category">
		     			    	<option value="3" <?php if ($_smarty_tpl->tpl_vars['genre']->value['category'] == 3) {?>selected<?php }?>>裙装</option>
		     			    	<option value="1" <?php if ($_smarty_tpl->tpl_vars['genre']->value['category'] == 1) {?>selected<?php }?>>上装</option>
		     			    	<option value="2" <?php if ($_smarty_tpl->tpl_vars['genre']->value['category'] == 2) {?>selected<?php }?>>裤装</option>
		     			    	<option value="4" <?php if ($_smarty_tpl->tpl_vars['genre']->value['category'] == 4) {?>selected<?php }?>>套装</option>
		     			    </select>
		     			</div>
		     			
		     			<div class="goods_item">
		     				<em>*</em>
		     				<label>类型：</label>
		     				 	<div class=" goods_select ">
			     				    <div class="goods_style">
				     					 <select id="genre" name="genre">
					     			    	<?php echo $_smarty_tpl->tpl_vars['genresStr']->value;?>
 
				     			   		 </select>
			     			   		</div>
		     				</div>
		     			   
		     			</div>
		     			<div class="goods_item  goods_model">
		     				<em>*</em>
		     				<label>型号：</label>
		     			    <input type="text" name="style_number" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['style_number'];?>
" id="style_number">
		     			</div>
		     			<div class="goods_item ">
		     				<em>*</em>
		     				<label>原价：</label>
		     			    <input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['price']/100;?>
" id="price">
		     			</div>
		     			<div class="goods_item ">
		     				<em>*</em>
		     				<label>现价：</label>
		     			    <input type="text" name="old_price" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['old_price']/100;?>
" id="old_price">
		     			</div>
		     			<div class="goods_item  goods_item_last"> 
		     				<label>材质：</label>
		     			    <input type="text" name="material" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['material'];?>
" id="material">
		     			</div>
		     		<div class="haircolor_img"> 
					    <span>商品图片：</span>
						
						<div class="increase">
							<img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picture_url'];?>
">
						</div>
		     		</div>
		     		 <span class="button plus">
			     		 	<img src=" /assets/images/plus.png">
			     	</span> 
		     	</div>
		        <div class="goods_minus">
		     	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sizes']->value, 'size');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
?>
		        	<div class="goods_size_list">
		        	 <ul class="goods_size">
			     		 	<li>
			     		 		<label>尺寸：</label>
			     		 		<select class="style" name="size[]">
			     			    	<option value="0">全部</option>
			     			    	<option value="1" <?php if ($_smarty_tpl->tpl_vars['size']->value['size'] == 1) {?>selected<?php }?>>XXS</option>
			     			    	<option value="2" <?php if ($_smarty_tpl->tpl_vars['size']->value['size'] == 2) {?>selected<?php }?>>XS</option>
			     			    	<option value="3" <?php if ($_smarty_tpl->tpl_vars['size']->value['size'] == 3) {?>selected<?php }?>>S</option>
			     			    	<option value="4" <?php if ($_smarty_tpl->tpl_vars['size']->value['size'] == 4) {?>selected<?php }?>>M</option>
			     			    	<option value="5" <?php if ($_smarty_tpl->tpl_vars['size']->value['size'] == 5) {?>selected<?php }?>>L</option>
			     			    	<option value="6" <?php if ($_smarty_tpl->tpl_vars['size']->value['size'] == 6) {?>selected<?php }?>>XL</option>
		     			        </select>
			     		 	</li>
			     		 	<li>
			     		 		<label>腰围：</label>
			     		 		<input type="text" name="kummerbund[]" value="<?php echo $_smarty_tpl->tpl_vars['size']->value['kummerbund'];?>
">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>胸围：</label>
			     		 		<input type="text" name="bust[]" value="<?php echo $_smarty_tpl->tpl_vars['size']->value['bust'];?>
">
			     		 		<label>cm</label>
			     		 	</li>
			     		    <li>
			     		 		<label>臀围：</label> 
			     		 		<input type="text" name="hipline[]" value="<?php echo $_smarty_tpl->tpl_vars['size']->value['hipline'];?>
">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>大腿围：</label>
			     		 		<input type="text" name="thigh_girth[]" value="<?php echo $_smarty_tpl->tpl_vars['size']->value['thigh_girth'];?>
">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>膝围：</label>
			     		 		<input type="text" name="knee_circumference[]" value="<?php echo $_smarty_tpl->tpl_vars['size']->value['knee_circumference'];?>
">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>裤长：</label>
			     		 		<input type="text" name="outseam[]" value="<?php echo $_smarty_tpl->tpl_vars['size']->value['outseam'];?>
">
			     		 		<label>cm</label>
			     		 	</li>
			     		    <li>
			     		 		<label>肩宽：</label>
			     		 		<input type="text" name="s_width[]" value="<?php echo $_smarty_tpl->tpl_vars['size']->value['s_width'];?>
">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>衣长：</label>
			     		 		<input type="text" name="length[]" value="<?php echo $_smarty_tpl->tpl_vars['size']->value['length'];?>
">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>袖肥：</label>
			     		 		<input type="text" name="sleeve_width[]" value="<?php echo $_smarty_tpl->tpl_vars['size']->value['sleeve_width'];?>
">
			     		 		<label>cm</label>
			     		 	</li>
			     	     </ul>
			  
			     		  <span class="button remove">
			     		 	<img src=" /assets/images/minus.png">
			     		 </span> 
			     	</div>
			    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			    </div>
			    <div class="sub">
		    		<input type="submit" value="保存">
		    	</div>	
			 </form>
		</div>
		</div>

<?php echo '<script'; ?>
 type="text/javascript">	
$(".sb").change(function(){
	var category = $(this).val();
	var url = "/genre/getGenre";
	$.ajax({
		type: "POST",
		url: url,
		data: {category:category},
		datatype:'json',
		success: function(data) {
			var member = eval("("+data+")");
			if(member.status = 200){
    			$('#genre').find("option").remove();
    			$('#genre').append(member.res);
			}
		}
	});
});

function check() {
	 var name = $("#name").val();
	    $.trim(name);
		if(name == ''){
			alert('请输入商品名');
			return false;
		}
		var category = $("#category").val();
		if(category == 0){
			alert('请选择类别');
			return false;
		}
		var genre = $("#genre").val();
		if(genre == 0){
			alert('请选择分类');
			return false;
		}
		var style_number = $("#style_number").val();
		if(style_number == ''){
			alert('请选择类别');
			return false;
		}
		var old_price = $("#old_price").val();
		if(old_price == 0){
			alert('请选择原价');
			return false;
		}
		var price = $("#price").val();
		if(price == 0){
			alert('请选择现价');
			return false;
		}
		var price = $("#price").val();
		if(price == 0){
			alert('请选择现价');
			return false;
		}
		var size = $("#size").val();
		if(size == 0){
			alert('请选择尺码');
			return false;
		}
		
		return true;
}



		
<?php echo '</script'; ?>
> 

<?php $_smarty_tpl->_subTemplateRender("file:common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
