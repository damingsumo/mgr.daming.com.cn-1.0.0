{include file="common/head.tpl" pageTitle='商品'}
{include file="common/menu.tpl" type='brand'} 	
		    <div class="top_header">
			     <span>商品信息</span>
			     <a href="/goods/goodsModelAdd"><span style="margin-left:0;padding-left:7px;">模特身材数据</span></a>
	        </div>
		     <form>
		        <div class="news ">
			     		 <ul class="news-list">
			     		 	<li>
			     		 		<label>商品名：{$goods.goods_name}</label> 
			     		 	</li>
			     		 	<li>
			     		 		<label>款式：{if $genre.category == 1}上装
			     		 		{elseif $genre.category == 2}裤子
			     		 		{elseif $genre.category == 4}套装
			     		 		{elseif $genre.category == 3}裙装{/if}</label> 
			     		 	</li>
			     		    <li>
			     		 		<label>类型：{$genre.name}
			     		 		</label> 
			     		 	</li>
			     		 	<li>
			     		 		<label>型号：{$goods.style_number}</label> 
			     		 	</li>
			     		 	<li>
			     		 		<label>原价：{$goods.old_price/100}元</label> 
			     		 	</li>
			     		 	<li>
			     		 		<label>现价：{$goods.price/100}元</label> 
			     		 	</li>
			     		    <li>
			     		 		<label>材质：{$goods.material}</label> 
			     		 	</li>
			     		 	 
			     		 </ul>
			     		 <div class="haircolor_img"> 
					    <span>商品图片：</span>
						
						<div class="increase">
							<img src="{$goods.show_url}">
						</div>
						 
	                </div>
			     		  
			     	</div>
			     	
			     	{foreach  $sizes as $size}
			     	<div class="goods_minus   goods_minus1">
			     		<ul class="goods_size">
			     		 	<li>
			     		 		<label>尺码：</label>
			     		 		 <label>{if $size.size == 1}XXS
			     		 		 {elseif $size.size == 2}XS
			     		 		 {elseif $size.size == 3}S
			     		 		 {elseif $size.size == 4}M
			     		 		 {elseif $size.size == 5}L
			     		 		 {elseif $size.size == 6}XL
			     		 		 {/if}</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>腰围：</label>
			     		 		 <label>{$size.kummerbund}cm</label>
			     		 	</li>
			     		    <li>
			     		 		<label>臀围：</label>
			     		 		 <label>{$size.kummerbund}cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>胸围：</label>
			     		 		 <label>{$size.bust}cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>大腿围：</label>
			     		 		 <label>{$size.thigh_girth}cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>膝围：</label>
			     		 		 <label>{$size.knee_circumference}cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>裤长：</label>
			     		 		 <label>{$size.outseam}cm</label>
			     		 	</li>
			     		    <li>
			     		 		<label>肩宽：</label>
			     		 		 <label>{$size.s_width}cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>衣长：</label>
			     		 		 <label>{$size.length}cm</label>
			     		 	</li>
			     		 	<li>
			     		 		<label>袖肥：</label>
			     		 		 <label>{$size.sleeve_width}cm</label>
			     		 	</li>
			     		 </ul>
			     	</div>
		      {/foreach}
		     	<!--结束-->
		     </form>
		<div class="sub sub3">
				<button onclick="window.location.href='/goods/goodsList?brand_id={$goods.brand_id}'">返回</button>
	       </div>
		</div>
</body>
</html>