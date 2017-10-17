{include file="common/head.tpl" pageTitle='鞋子管理'}	
{include file="common/menu.tpl" type='shoes'}  
		    <div class="top_header">
	        	<div>
				    <a href="" class="link_color">鞋子管理</a> 
			    </div>
	        </div>
		    <div class="detial detial1 ">
	 		
				<ul class="top">
					<li><a href="/shoes/goAdd"><img src="/assets/images/xinjian.png">新建</a></li>
					<!--<li><a onclick="editSelect()"><img src="/assets/images/bianji.png">编辑</a></li>-->
					<li><a onclick="startUse()"><img src="/assets/images/kai.png">开</a></li>
					<li><a onclick="stopUse()"><img src="/assets/images/guan.png">关</a></li>
				</ul>
				<form action="/shoes/shoesList" id="myform" method="GET">
				<div class="search">
					<input type="text" placeholder="请输入鞋子名字" name="value" value="{if isset($value)}{$value}{/if}">
					<input type="button" onclick="search()">
				</div>
				</form>
				<table class="base-table ">
				 	<tbody>
				 		<tr> 
				 			<td>
				 				<input name="select" type="checkbox" onclick="selectAll()">
				 			</td>
				 			<td style="width: 8%">
				 				ID
				 			</td>
				 			<td>
				 				名称
				 			</td>
				 			<td>
				 				款式
				 			</td>
				 			<td>
				 				颜色
				 			</td>
				 			<td style="width: 20%">
				 				创建时间
				 			</td>
				 			 <td>
				 				状态
				 			</td>
				 		</tr>
				 		{if !empty($shoes)}
				 		{foreach $shoes as $shoe}
				 		<tr> 
				 			<td>
				 				<input name="check" type="checkbox" value="{$shoe.shoes_id}">
				 			</td>
				 			<td >
				 				{$shoe.shoes_id}
				 			</td>
				 			<td>
				 				<a href="/shoes/detail?shoes_id={$shoe.shoes_id}">{$shoe.name}</a>
				 			</td>
				 			<td>
				 				{if $shoe.category == 1}单鞋{elseif $shoe.category == 2}凉鞋 {elseif $shoe.category == 3}休闲鞋{elseif $shoe.category == 4} 靴子{/if}
				 			</td>
				 			 <td>
				 				{$shoe.color}
				 			</td>
				 			<td>
				 				{$shoe.create_time}
				 			</td>
				 			<td>
				 				{if $shoe.status ==1} 启用{elseif $shoe.status ==2}禁用{/if}
				 			</td>
				 		</tr>
				 		{/foreach}
				 		{else}
				 		<td colspan="7">
		 						暂无鞋子数据
						</td>
						 {/if}
				 	</tbody>
				 </table>
				 <div class="pull-right page-select">
					<div class="total-record">共<span>{$total}</span>条记录，每页<span>{$pageSize}</span>条
			{$pager->toHTML()}
		</div>
				</div>
				</form>
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
  		var brandChecks = document.getElementsByName("check");
  		for(var i = 0;i<brandChecks.length;i++){
  			if(brandChecks[i].type == "checkbox" && brandChecks[i].checked == true){
  				var shoes_id = brandChecks[i].value;
  				break;
  			}
  		}
  		window.location.href='/shoes/edit?shoes_id='+shoes_id;
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
    		var shoesIds = '';
    		var url ='';
    		if(status == 1) {
    			$(".qiyong").css({"display":"none"});
    			url = "/shoes/enabled";
    		}else {
    			$(".jinyong").css({"display":"none"});
    			url = "/shoes/disable";
    		}
    		
    		for(var i=0;i<chk_value.length;i++){
    			shoesIds += chk_value[i]+',';
    		}

    		$.ajax({
    			type: "POST",
    			url: url,
    			data: {shoesIds:shoesIds},
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