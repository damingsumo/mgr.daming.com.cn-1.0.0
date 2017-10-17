{include file="common/head.tpl" pageTitle='商家列表'}	
{include file="common/menu.tpl" type='seller'}    
			<div class="detial">
				<ul class="top">
					<li><a href="/seller/goadd"><img src="/assets/images/xinjian.png">新建</a></li>
<!-- 					<li><a href=""><img src="/assets/images/kai.png">开</a></li> -->
<!-- 					<li><a href=""><img src="/assets/images/guan.png">关</a></li> -->
				</ul>
				<form action="/seller/sellerList" id="myform" method="GET">
				<div class="search">
					<input type="text" placeholder="请输入商家名称" name="value" value="{if isset($value)}{$value}{/if}">
					<input type="button" onclick="search()">
				</div>
				</form>
				<table class="base-table">
				 	<tbody>
				 		<tr> 
				 			<td>
				 				商家ID
				 			</td>
				 			<td>
				 				商家名称
				 			</td>
				 			<td>
				 				商家手机
				 			</td>
				 			<td>
				 				状态
				 			</td>
				 			<td>
				 				操作
				 			</td>
				 		</tr>
				 		{if !empty($sellers)}
				 		{foreach $sellers as $seller}
				 		<tr> 
				 			<td>
				 				{$seller.sid}
				 			</td>
				 			<td>
				 				<a href="/seller/detail?sid={$seller.sid}"> {$seller.seller_name}</a>
				 			</td>
				 			<td>
				 				{if $seller.mobile==""}暂无{else}{$seller.mobile}{/if}
				 			</td>
				 			<td>
				 				{if $seller.status == 1}启用{else if $seller.status == 3}禁用{/if}
				 			</td>
				 			<td>
				 				<a href="/seller/edit?sid={$seller.sid}">编辑</a>
				 			</td>
				 		</tr>
				 		{/foreach}
				 		{else}
				 		<td colspan="5">
		 						暂无商家数据
						</td>
						 {/if}
				 	</tbody>
				 </table>
				 <div class="pull-right page-select">
					<div class="total-record">共<span>{$total}</span>条记录，每页<span>{$pageSize}</span>条
			{$pager->toHTML()}
		</div>
				</div>
		<input type="hidden" id="total" value="{$total}"/>
			</div>
		</div>
		{literal}
<script type="text/javascript">	
	function search() {
		$('#myform').submit();
	}
</script> 
{/literal}
{include file="common/foot.tpl"}	    