{include file="common/head.tpl" pageTitle='商家详情'}
{include file="common/menu.tpl" type='seller'} 
			 <div class="detial">
			 	<div class="information">
			 		<span>商家详情</span>
			 	</div>
			 	<div class="content">
			 		<ul>
			 			<li>
			 				<span>商家名称:</span>
			 				<em>{$seller.seller_name}</em>
			 			</li>
			 			<li>
			 				<span>手机号:</span>
			 				<em>{if $seller.phone ==''}暂无{else}{$seller.phone}{/if}</em>
			 			</li>
			 			<li>
			 				<span>电子邮箱:</span>
			 				<em>{if $seller.email==''}暂无{else}{$seller.email}{/if}</em>
			 			</li>
			 			<li>
			 				<span>商家描述:</span>
			 				<em>{$seller.note}</em>
			 			</li>
			 		</ul>
			 	</div>
			 </div>
			 <div class="sub sub3">
				<button onclick="window.location.href='/seller/sellerList'">返回</button>
	       </div>
		</div>
{include file="common/foot.tpl"}