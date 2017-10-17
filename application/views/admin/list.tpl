{include file="common/head.tpl" pageTitle='管理员列表'}	
{include file="common/menu.tpl" type='admin'}
	        <div class="detial">
				<ul class="top">
					<li><a href="/admin/goadd"><img src="/assets/images/xinjian.png">新建</a></li>
					<li><a onclick="editSelect()"><img src="/assets/images/bianji.png">编辑</a></li>
					<li><a onclick="startUse()"><img src="/assets/images/kai.png">开</a></li>
					<li><a onclick="stopUse()"><img src="/assets/images/guan.png">关</a></li>
				</ul>
				<form action="/admin/adminList" id="myform" method="GET">
				<div class="search">
					<input type="text" placeholder="请输入管理员姓名" name="value" value="{if isset($value)}{$value}{/if}">
					<input type="button" onclick="search()">
				</div>
				</form>
				 <table class="base-table">
				 	<tbody>
				 		<tr>
				 			<td>
				 				<input name="select" type="checkbox" onclick="selectAll()">
				 			</td>
				 			<td>
				 				ID
				 			</td>
				 			<td>
				 				姓名
				 			</td>
				 			<td>
				 				用户名
				 			</td>
				 			<td>
				 				手机
				 			</td>
				 			<td style="width:15%;">
				 				创建时间
				 			</td>
				 			<td>
				 				状态
				 			</td>
				 		</tr>
				 		{foreach $admins as $admin}
				 		<tr>
				 			<td>
				 				<input name="check" type="checkbox" value="{$admin.admin_id}">
				 			</td>
				 			<td>
				 				{$admin.admin_id}
				 			</td>
				 			<td>
				 				{$admin.name}
				 			</td>
				 			<td>
				 				<a href="/admin/detail?admin_id={$admin.admin_id}">{$admin.user_name}</a>
				 			</td>
				 			<td>
				 				{$admin.mobile}
				 			</td>
				 			<td>
				 				{$admin.create_time}
				 			</td>
				 			<td>
				 				{if $admin.status == 1}启用{elseif $admin.status == 2}禁用{/if}
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
function selectAll(){
    var cardChecks = document.getElementsByName("check");
    var b = document.getElementsByName("select");
    if(!b[0].checked){
    	for(var i = 0;i<cardChecks.length;i++){
    		if(cardChecks[i].type == "checkbox"){
    			cardChecks[i].checked = false;
    		}
    	}
    }else{
    	for(var i = 0;i<cardChecks.length;i++){
    		if(cardChecks[i].type == "checkbox"){
    			cardChecks[i].checked = true;
    		}
    	}
    }
}

function editSelect() {
  	if($('input[name="check"]').is(':checked')) {
  		var adminChecks = document.getElementsByName("check");
  		for(var i = 0;i<adminChecks.length;i++){
  			if(adminChecks[i].type == "checkbox" && adminChecks[i].checked == true){
  				var adminId = adminChecks[i].value;
  				break;
  			}
  		}
  		window.location.href='/admin/edit?admin_id='+adminId;
  	}else{
  		alert('请选择品牌！');
  	}
  }

	function search() {
		$('#myform').submit();
	}

	function startUse(){
		if($('input[name="check"]').is(':checked')) {
        	$(".qiyong").css({"display":"block"});
        	
		}else{
			alert('请勾选卡种！');
			return false;
		}
     }


	function stopUse(){
		if($('input[name="check"]').is(':checked')) {
			$(".jinyong").css({"display":"block"});
        	
		}else{
			alert('请勾选卡种！');
			return false;
		}
     }


    function sure(status) {
    	if(status == '1' || status == '2') {
    		var chk_value =[];
    		$('input[name="check"]:checked').each(function() {
    		chk_value.push($(this).val());
    		});	
    		var adminIds = '';
    		var url ='';
    		if(status == 1) {
    			$(".qiyong").css({"display":"none"});
    			url = "/admin/enabled";
    		}else {
    			$(".jinyong").css({"display":"none"});
    			url = "/admin/disable";
    		}
    		
    		for(var i=0;i<chk_value.length;i++){
    			adminIds += chk_value[i]+',';
    		}

    		$.ajax({
    			type: "POST",
    			url: url,
    			data: {adminIds:adminIds},
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
     }   
	</script>
	{/literal}
	{include file="common/foot.tpl"}