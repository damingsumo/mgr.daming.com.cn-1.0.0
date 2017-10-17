{include file="common/head.tpl" pageTitle='商家修改'}	
{include file="common/menu.tpl" type='seller'} 
			 <div class="detial">
			 	<div class="information">
			 		<span>商家信息编辑</span>
			 	</div>
			 	<form id="brandForm" action="/seller/edit" method="post"  onsubmit="return check()"> 
			 	<input type="hidden" value="{$seller.sid}" name="sid">
			 	<div class="content">
			 		<ul>
			 			<li>
			 				<div class="goods_item  goods_model">
		     				<em>*</em>
		     				<label>商家名称：</label>
		     			    <input type="text" name="seller_name" value="{$seller.seller_name}" id="seller_name">
		     			</div>
			 			</li>
			 			<li>
			 				<em class="color"></em>
			 				<span>商家电子邮箱:</span>
			 				<em>{$seller.email}</em>
			 			</li>
			 			<li>
			 				<em class="color"></em>
			 				<span>商家手机:</span>
			 				<em>{$seller.mobile}</em>
			 			</li>
			 			<li>
			 				<em class="color"></em>
			 				<span>商家账户:</span>
			 				<em>{$seller.balance}</em>
			 			</li>
			 			<li>
			 				<em class="color"></em>
			 				<span>商家创建时间:</span>
			 				<em>{$seller.create_time}</em>
			 			</li>
			 			<li>
			 				<em class="color"></em>
			 				<span>商家描述:</span>
			 				<textarea>{$seller.create_time}</textarea>
			 			</li>
			 		</ul>
			 	</div>
			 	<div class="sub">
					<input type="submit" value="编辑">
				</div>
				</form>
			 </div>
		</div>
		{literal}
<script type="text/javascript">	
		</script> 
{/literal}
{include file="common/foot.tpl"}