{include file="common/head.tpl" pageTitle='新增商家'}
{include file="common/menu.tpl" type='seller'} 
			 	<form id="sellerform" action="/seller/add" method="post"  onsubmit="return check()">
			 <div class="detial">
			 	<div class="information">
			 		<span>新增商家</span>
			 	</div>
			 	<div class="content">
			 		<ul>
			 			<li>
			 				<em  id="color">*</em>
			 				<span id="shopname">商家名:</span>
			 				<input type="text" id="seller_name" name="seller_name" value="">
			 			</li>
			 			<li>
			 				<em class="color">*</em>
			 				<span id="tele">手机号:</span>
			 				<input type="text" id="mobile" name="mobile" value="" >
			 			</li>
			 			 
			 			<li>
			 				<em class="color">&nbsp&nbsp&nbsp*</em>
			 				<span style="margin-left: 0;">邮箱:</span>
			 				<input type="text" id="email" name="email" value="">
			 			</li>
			 			<li>
			 				<em>&nbsp&nbsp</em>
			 				<span>简介:</span>
			 				<textarea name="note"></textarea>
			 			</li>
			 		 
			 		</ul>
			 	</div>
			 	<div class="sub ">
		    		<input type="submit" value="新增">
		    	</div>
			 </div>
			 </form>
		</div>
{literal}
<script type="text/javascript">	
	function check() {
	    var sellerName = $("#seller_name").val();
	    var email = $("#email").val();
	    var mobile = $("#mobile").val();
	    
		if(sellerName == ''){
			alert('请输入商家名称');
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
		if(email == ''){
			alert('请输入电子邮箱');
			return false;
		}
		var isEmail = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
		if(!isEmail.test(email)) {
			alert('请输入正确格式的电子邮箱');
			return false;
		}
		$('#sellerform').submit();
	}
</script> 
{/literal}
{include file="common/foot.tpl"}