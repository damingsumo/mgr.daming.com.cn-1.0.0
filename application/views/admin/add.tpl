{include file="common/head.tpl" pageTitle='管理员列表'}	
{include file="common/menu.tpl" type='admin'}
	    
			<div class="detial">
				<div class="information">
			 		<span>新增管理员</span>
			 	</div>
				<form id="adminform" action="/admin/add" method="post"  onsubmit="return check()">
				<div class="list">
		    		<ul>
		    			<li>
		    				<div class="manage">
		    					<em>*</em>
		    				    <span>用户名：</span>
		    				</div>
		    				<input type="text" id="user_name" name="user_name" value="">
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <em>*</em>
		    				    <span>姓名：</span>
		    				</div>
		    				<input type="text" id="name" name="name" value="">
		    				 
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <em>*</em>
		    				    <span>密码：</span>
		    				</div>
		    				<input type="password" id="password" name="password" value="" style="border-radius: 5px;border: 1px solid #bfbfbf;height:25px;width: 150px;margin-left:0;">
		    				 
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <em>*</em>
		    				    <span>手机号：</span>
		    				</div>
		    				<input type="text" id="mobile" name="mobile" value="">
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <span>email：</span>
		    				</div>
		    				<input type="text" id="email" name="email" value="">
		    			</li>
		    			<li>
		    				<div class="manage">
		    				    <span>备注：</span>
		    				</div>
		    				<textarea name="note"></textarea>
		    			</li>
		    		</ul>
		    	</div>
		    		<div class="sub ">
		    		<input type="submit" value="保存">
		    	</div>
		    </form>
	       </div>
	 </div>
{literal}
<script type="text/javascript">	
	function check() {
	    var userName = $("#user_name").val();
	    var name = $("#name").val();
	    var password = $("#password").val();
	    var mobile = $("#mobile").val();
	    
		if($.trim(userName) == ''){
			alert('请输入管理员用户名');
			return false;
		}
		if($.trim(name) == ''){
			alert('请输入姓名');
			return false;
		}
		if($.trim(password) == ''){
			alert('请输入密码');
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
</script> 
{/literal}
{include file="common/foot.tpl"}