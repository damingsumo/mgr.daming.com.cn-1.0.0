{include file="common/head.tpl" pageTitle='用户列表'}	
{include file="common/menu.tpl" type='user'} 
		    
		    <div class="detial">
		    <form action="/user/userList" id="myform" method="GET">
				<div class="search">
					<input type="text" placeholder="请输入用户名" name="value" value="{if isset($value)}{$value}{/if}">
					<input type="button" onclick="search()">
				</div>
				</form>
				<table class="base-table ">
				 	<tbody>
				 		<tr > 
				 			<td>
				 				ID
				 			</td>
				 			<td>
				 				用户名
				 			</td>
				 			<td>
				 				姓名
				 			</td>
				 			<td>
				 				手机
				 			</td>
				 			<td>
				 				创建时间
				 			</td> 
				 		</tr>
				 		{foreach $users as $user}
				 		<tr > 
				 			<td>
				 				 {$user.uid}
				 			</td>
				 			<td>
				 				 <a href="/user/detail?uid={$user.uid}">{$user.user_name}</a>
				 			</td>
				 			<td>
				 				 {$user.name}
				 			</td>
				 			<td>
				 				 {$user.mobile}
				 			</td>
				 			<td>
				 				 {$user.create_time}
				 			</td>
				 		 
				 		</tr>
				 		{/foreach}
				 	</tbody>
				 </table>
				  
			      <div class="pull-right page-select">
					<div class="total-record">共<span>{$total}</span>条记录，每页<span>{$pageSize}</span>条
			{$pager->toHTML()}
		</div>
				</div>
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