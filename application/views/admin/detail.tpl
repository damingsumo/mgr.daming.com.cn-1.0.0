{include file="common/head.tpl" pageTitle='管理员列表'}	
{include file="common/menu.tpl" type='admin'}
			 <div class="detial">
			 	<div class="information">
			 		<span>管理员信息</span>
			 	</div>
			 	<div class="content">
			 		<ul>
			 			<li>
			 				<span>姓名:</span>
			 				<em>{$admin.name}</em>
			 			</li>
			 			<li>
			 				<span>用户名:</span>
			 				<em>{$admin.user_name}</em>
			 			</li>
			 			<li>
			 				<span>手机号:</span>
			 				<em>{$admin.mobile}</em>
			 			</li>
			 			<li>
			 				<span>邮箱:</span>
			 				<em>{$admin.email}</em>
			 			</li>
			 			<li>
			 				<span>备注:</span>
			 				<em>{$admin.note}</em>
			 			</li>
			 		 
			 		</ul>
			 	</div>
			 	 <div class="sub sub3">
				<button onclick="window.location.href='/admin/adminList'">返回</button>
	       </div>
			 </div>
		</div>
</body>
</html>