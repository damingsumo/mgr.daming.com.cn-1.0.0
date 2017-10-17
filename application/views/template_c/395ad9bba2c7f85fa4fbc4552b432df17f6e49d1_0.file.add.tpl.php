<?php
/* Smarty version 3.1.31, created on 2017-09-22 14:36:20
  from "D:\phpStudy\WWW\mgr.daming.cn-1.0.0\application\views\brand\goods\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c4af64831e18_52948613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '395ad9bba2c7f85fa4fbc4552b432df17f6e49d1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\mgr.daming.cn-1.0.0\\application\\views\\brand\\goods\\add.tpl',
      1 => 1503910005,
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
function content_59c4af64831e18_52948613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'新增商品'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'brand'), 0, false);
?>

<div class="goods">
		    <div class="top_header">
			     <span>新增商品</span>
	        </div>
		     <form id="brandForm" action="/goods/add" method="post"  onsubmit="return check()" enctype="multipart/form-data"> 
		     <input type="hidden" name="brand_id" value="<?php echo $_smarty_tpl->tpl_vars['brandId']->value;?>
" id="brand_id">
		     	<div class="goods_plus">
		     		<div class="goods_name">
		     			<em>*</em>
		     			<label>商品名：</label>
		     			<input type="text" id="name" name="name" value="">
		     		</div>
		     		<div class="shoesstyle_img">
		                    <em>*</em>
						    <span>商品图片：</span>

		                    <div style="width:100px;height:100px;float:left;">
		                        <div class="increase none"> 
                                      <img src=" ">
		                        </div>
							 <input type="file" id="file_input" name="picture_url">
		                    </div>
							
							 
		            </div>
		     		<div class="goods_list">
		     			<div class="goods_item">
		     				<em>*</em>
		     				<label>款式：</label>
		     			    <select class="style sb" id="category" name="category">
		     			    	<option value="0" selected  disabled>请选择</option>
		     			    	<option value="3">裙装</option>
		     			    	<option value="1">上装</option>
		     			    	<option value="2">裤装</option>
		     			    	<option value="4">套装</option>
		     			    </select>
		     			</div>
		     			
		     			<div class="goods_item">
		     				<em>*</em>
		     				<label>类型：</label>
		     				 	<div class=" goods_select ">
			     				    <div class="goods_style">
				     					 <select id="genre" name="genre">
					     			    	<option value="0"selected  disabled>请选择</option>
				     			   		 </select>
			     			   		</div>
		     				</div>
		     			</div>
		     			<div class="goods_item  goods_model">
		     				<em>*</em>
		     				<label>型号：</label>
		     			    <input type="text" id="style_number" name="style_number">
		     			</div>
		     			<div class="goods_item ">
		     				<em>*</em>
		     				<label>原价：</label>
		     			    <input type="text" id="old_price" name="old_price">
		     			</div>
		     			<div class="goods_item ">
		     				<em>*</em>
		     				<label>现价：</label>
		     			    <input type="text" id="price" name="price">
		     			</div>
		     			<div class="goods_item  goods_item_last"> 
		     				<label>材质：</label>
		     			    <input type="text" id="material" name="material">
		     			</div>
		     		</div>
		     		 <span class="button plus">
			     		 	<img src=" /assets/images/plus.png">
			     	</span> 
		     	</div>
		        <div class="goods_minus">
		        	<div class="goods_size_list">
		        	 <ul class="goods_size">
			     		 	<li>
			     		 		<label>尺码：</label>
			     		 		<select class="style" name="size[]">
			     			    	<option value="0">全部</option>
			     			    	<option value="1">XXS</option>
			     			    	<option value="2">XS</option>
			     			    	<option value="3">S</option>
			     			    	<option value="4">M</option>
			     			    	<option value="5">L</option>
			     			    	<option value="6">XL</option>
		     			        </select>
			     		 	</li>
			     		 	<li>
			     		 		<label>腰围：</label>
			     		 		<input type="text" name="kummerbund[]">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>胸围：</label>
			     		 		<input type="text" name="bust[]">
			     		 		<label>cm</label>
			     		 	</li>
			     		    <li>
			     		 		<label>臀围：</label>
			     		 		<input type="text" name="hipline[]">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>大腿围：</label>
			     		 		<input type="text" name="thigh_girth[]">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>膝围：</label>
			     		 		<input type="text" name="knee_circumference[]">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>裤长：</label>
			     		 		<input type="text" name="outseam[]">
			     		 		<label>cm</label>
			     		 	</li>
			     		    <li>
			     		 		<label>肩宽：</label>
			     		 		<input type="text" name="s_width[]">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>衣长：</label>
			     		 		<input type="text" name="length[]">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>袖肥：</label>
			     		 		<input type="text" name="sleeve_width[]">
			     		 		<label>cm</label>
			     		 	</li>
			     	     </ul>
			  
			     		  <span class="button remove">
			     		 	<img src=" /assets/images/minus.png">
			     		 </span> 
			     	</div>
			    </div>
			    <div class="sub">
		    		<input type="submit" value="保存">
		    	</div>
			 </form>
		</div>
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
