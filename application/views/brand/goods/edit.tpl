{include file="common/head.tpl" pageTitle='修改商品'}	
{include file="common/menu.tpl" type='brand'}
		   <div class="goods">
		    <div class="top_header">
			     <span>修改商品</span>
	        </div>
		     <form id="brandForm" action="/goods/edit" method="post"  onsubmit="return check()"> 
		     <input type="hidden" value="{$goods.gid}" name="gid">
		     <input type="hidden" value="{$goods.brand_id}" name="brand_id">
		     	<div class="goods_plus">
		     		<div class="goods_name">
		     			<em>*</em>
		     			<label>商品名：</label>
		     			<input type="text" name="name" value="{$goods.goods_name}">
		     		</div>
		     		<div class="goods_list">
		     			<div class="goods_item">
		     				<em>*</em>
		     				<label>款式：</label>
		     			    <select class="style sb" name="category">
		     			    	<option value="3" {if $genre.category == 3}selected{/if}>裙装</option>
		     			    	<option value="1" {if $genre.category == 1}selected{/if}>上装</option>
		     			    	<option value="2" {if $genre.category == 2}selected{/if}>裤装</option>
		     			    	<option value="4" {if $genre.category == 4}selected{/if}>套装</option>
		     			    </select>
		     			</div>
		     			
		     			<div class="goods_item">
		     				<em>*</em>
		     				<label>类型：</label>
		     				 	<div class=" goods_select ">
			     				    <div class="goods_style">
				     					 <select id="genre" name="genre">
					     			    	{$genresStr} 
				     			   		 </select>
			     			   		</div>
		     				</div>
		     			   
		     			</div>
		     			<div class="goods_item  goods_model">
		     				<em>*</em>
		     				<label>型号：</label>
		     			    <input type="text" name="style_number" value="{$goods.style_number}" id="style_number">
		     			</div>
		     			<div class="goods_item ">
		     				<em>*</em>
		     				<label>原价：</label>
		     			    <input type="text" name="price" value="{$goods.price/100}" id="price">
		     			</div>
		     			<div class="goods_item ">
		     				<em>*</em>
		     				<label>现价：</label>
		     			    <input type="text" name="old_price" value="{$goods.old_price/100}" id="old_price">
		     			</div>
		     			<div class="goods_item  goods_item_last"> 
		     				<label>材质：</label>
		     			    <input type="text" name="material" value="{$goods.material}" id="material">
		     			</div>
		     		</div>
		     		 <span class="button plus">
			     		 	<img src=" /assets/images/plus.png">
			     	</span> 
		     	</div>
		        <div class="goods_minus">
		     	{foreach $sizes as $size}
		        	<div class="goods_size_list">
		        	 <ul class="goods_size">
			     		 	<li>
			     		 		<label>尺寸：</label>
			     		 		<select class="style" name="size[]">
			     			    	<option value="0">全部</option>
			     			    	<option value="1" {if $size.size == 1}selected{/if}>XXS</option>
			     			    	<option value="2" {if $size.size == 2}selected{/if}>XS</option>
			     			    	<option value="3" {if $size.size == 3}selected{/if}>S</option>
			     			    	<option value="4" {if $size.size == 4}selected{/if}>M</option>
			     			    	<option value="5" {if $size.size == 5}selected{/if}>L</option>
			     			    	<option value="6" {if $size.size == 6}selected{/if}>XL</option>
		     			        </select>
			     		 	</li>
			     		 	<li>
			     		 		<label>腰围：</label>
			     		 		<input type="text" name="kummerbund[]" value="{$size.kummerbund}">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>胸围：</label>
			     		 		<input type="text" name="bust[]" value="{$size.bust}">
			     		 		<label>cm</label>
			     		 	</li>
			     		    <li>
			     		 		<label>臀围：</label> 
			     		 		<input type="text" name="hipline[]" value="{$size.hipline}">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>大腿围：</label>
			     		 		<input type="text" name="thigh_girth[]" value="{$size.thigh_girth}">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>膝围：</label>
			     		 		<input type="text" name="knee_circumference[]" value="{$size.knee_circumference}">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>裤长：</label>
			     		 		<input type="text" name="outseam[]" value="{$size.outseam}">
			     		 		<label>cm</label>
			     		 	</li>
			     		    <li>
			     		 		<label>肩宽：</label>
			     		 		<input type="text" name="s_width[]" value="{$size.s_width}">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>衣长：</label>
			     		 		<input type="text" name="length[]" value="{$size.length}">
			     		 		<label>cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>袖肥：</label>
			     		 		<input type="text" name="sleeve_width[]" value="{$size.sleeve_width}">
			     		 		<label>cm</label>
			     		 	</li>
			     	     </ul>
			  
			     		  <span class="button remove">
			     		 	<img src=" /assets/images/minus.png">
			     		 </span> 
			     	</div>
			    {/foreach}
			    </div>
			    <div class="sub">
		    		<input type="submit" value="保存">
		    	</div>	
			 </form>
		</div>
		</div>
{literal}
<script type="text/javascript">	
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



		
</script> 
{/literal}
{include file="common/foot.tpl"}