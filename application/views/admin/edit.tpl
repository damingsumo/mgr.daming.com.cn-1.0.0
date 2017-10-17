{include file="common/head.tpl" pageTitle='管理员列表'}	
{include file="common/menu.tpl" type='admin'}
			<div class="detial">
				<div class="information">
			 		<span>管理员信息修改</span>
			 	</div>
				<form id="adminform" action="/admin/edit" method="post">
				<input type="hidden" name="admin_id" value="{$admin.admin_id}" id="admin_id"> 
				<div class="list">
		    		<ul>
		    			<li>
		    				<div class="manage">
		    					<em>*</em>
		    				    <span>用户名：</span>
		    				</div>
		    				<em>{$admin.user_name}</em>
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <em>*</em>
		    				    <span>姓名：</span>
		    				</div>
		    				<input type="text" id="name" name="name" value="{$admin.name}">
		    				 
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <em>*</em>
		    				    <span>手机号：</span>
		    				</div>
		    				<input type="text" id="mobile" name="mobile" value="{$admin.mobile}" style ="border-radius: 5px;border: 1px solid #bfbfbf;height:25px;width: 150px;margin-left:0;">
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <span>email：</span>
		    				</div>
		    				<input type="text" id="email" name="email" value="{$admin.email}">
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <span>备注：</span>
		    				</div>
		    				<textarea name="note" style="margin-left: 0;">{$admin.note}</textarea>
		    			</li>
		    		</ul>
		    	</div>
		    	<div class="sub">
		    		<button onclick="check()">保存</button>
		    		</div>
		    </form>
		    	<div class="sub">
		    		<button onclick="changePassword()">重置密码</button>
		    	</div>
	       </div>
	 </div>
{literal}
<script type="text/javascript">	
	function check() {
	    var name = $("#name").val();
	    var mobile = $("#mobile").val();
	    
		if($.trim(name) == ''){
			alert('请输入姓名');
			return false;
		}
		if(mobile == ''){
			alert('请输入手机号');
			return false;
		}
		var isMobile = /^1[3|4|5|7|8][0-9]\d{8}$/;
		if(!isMobile.test(mobile)) {
			alert('请输入正确格式的手机号');
			return false;
		}
		$('#adminform').submit();
	}

	function changePassword() {
		var adminId = $("#admin_id").val();
		var url ='/admin/changePassword';
		$.ajax({
			type: "POST",
			url: url,
			data: {adminId:adminId},
			datatype:'json',
			success: function(data) {
				var member = eval("("+data+")");
				$('#_xinfo').html('');
				if(member.status == 200) {
					alert(member.data);
					window.location.reload();
				} else {
					alert(member.data);
				}
			}
		});

	}
</script> 
{/literal}
{include file="common/foot.tpl"}