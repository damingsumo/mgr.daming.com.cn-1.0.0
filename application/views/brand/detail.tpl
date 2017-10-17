{include file="common/head.tpl" pageTitle='品牌'}
{include file="common/menu.tpl" type='brand'} 	
<div class="detial">
				<ul class="top">
					<li> 品牌详情</li>
				</ul>
				<div class="content">
		    		<ul>
		    			<li>
		    				 
		    				<span>品牌名称：</span>
		    				<em>{$brand.name}</em>
		    			</li>
		    			<li>
		    				 
		    				<span>品牌属地：</span>
		    				<em>{if $brand.region == 1}欧美{elseif $brand.region == 2}中国 {elseif $brand.region == 3}日韩{/if}</em>
		    				 
		    			</li>
		    			 
		    			<li id="li-height">
		    				 
		    				<span>品牌简介：</span>
		    				 
		    					<em id="abstcont">
			    					{$brand.note}
		    					</em>
		    				 
		    			</li>
		    			<li>
		    				 
		    				<span>品牌logo：</span>
		    				 <div class="pic">
		    				 	<img src="{$brand.picture_url}">
		    				 </div>
		    			</li>
		    		</ul>
		    	</div>
		    	<div class="sub sub3">
				<button onclick="window.location.href='/brand/brandList'">返回</button>
	       </div>
	 </div>


{include file="common/foot.tpl"}