{include file="common/head.tpl" pageTitle='搭配管理'}	
{include file="common/menu.tpl" type='brand'}
		   
		    <div class="detial ">
	 		    <ul class="top">
					<li><a href="/collocation/goadd?gid={$goods.gid}"><img src="/assets/images/xinjian.png">新建</a></li>
					<li><a href="">搭配管理</a></li>
				</ul>
				<div class="color_add">
						<div> 
							<span>品牌：</span>
						</div>
						 <span>{$goods.brand_name}</span>
	            </div>
	            <div class="collocation"> 
	            {foreach $collocations as $collocation}
	            <div class="color_add  ">
						<div> 
							<span>搭配1ID：</span>
						</div>
						<div> 
							<span>{$goods.brand_name}</span>
						</div>
						<div> 
							<span>名称：{$goods.goods_name}</span>
						</div>
						<div> 
							<span>类别：{if $goods['genre']['category'] == 1}上装{else if $goods['genre']['category'] == 2}裤子{else if $goods['genre']['category'] == 3}套装{else if $goods['genre']['category'] == 4} 裙装{/if} </span>
						<div> 
							<span>分类：{$goods['genre']['name']}</span>
						</div>
	            </div>
	            {if isset($collocation['firstinfo'])}
	            <div class="color_add  ">
						<div> 
							<span>搭配2ID：</span>
						</div>
						<div> 
							<span>{$collocation['firstinfo']['gid']}</span>
						</div>
						<div> 
							<span>名称：{$collocation['firstinfo']['goods_name']}</span>
						</div>
						<div> 
							<span>类别：{if $collocation['firstinfo']['genre']['category'] == 1}上装{else if $collocation['firstinfo']['genre']['category'] == 2}裤子{else if $collocation['firstinfo']['genre']['category'] == 3}套装{else if $collocation['firstinfo']['genre']['category'] == 4} 裙装{/if} </span>
						</div>
						<div> 
							<span>分类：{$collocation['firstinfo']['genre']['name']}</span>
						</div>
	            </div>
	            {/if}
	            {if isset($collocation['secondinfo'])}
	            <div class="color_add  ">
						<div> 
							<span>搭配3ID：</span>
						</div>
						<div> 
							<span>{$collocation['secondinfo']['gid']}</span>
						</div>
						<div> 
							<span>名称：{$collocation['secondinfo']['goods_name']}</span>
						</div>
						<div> 
							<span>类别：{if $collocation['secondinfo']['genre']['category'] == 1}上装{else if $collocation['secondinfo']['genre']['category'] == 2}裤子{else if $collocation['secondinfo']['genre']['category'] == 3}套装{else if $collocation['secondinfo']['genre']['category'] == 4} 裙装{/if}</span>
						</div>
						<div> 
							<span>分类：{$collocation['secondinfo']['genre']['name']}</span>
						</div>
	            </div>
	            {/if}
	        </div>
	             <div class="haircolor_img collocation_img ">
	                    <em>*</em>
					    <span>搭配图片：</span>
					    <div class="increase increase2">
					    	<img src="{$collocation.synthesis_url}">
					    </div>
	                   
						
						 
	                </div>
	            {/foreach}
		     </div>
	  </div>
</body>
</html>