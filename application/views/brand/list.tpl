{include file="common/head.tpl" pageTitle='形象列表'}	
{include file="common/menu.tpl" type='brand'} 
<div class="detial">
				<ul class="top">
					<li><a href="/brand/goadd"><img src="/assets/images/xinjian.png">新建</a></li>
					<li><a onclick="editSelect()" ><img src="/assets/images/bianji.png">编辑</a></li>
					<li><a onclick="startUse()"><img src="/assets/images/kai.png">开</a></li>
					<li><a onclick="stopUse()"><img src="/assets/images/guan.png">关</a></li>
				</ul>
				<form action="/brand/brandList" id="myform" method="GET">
				<div class="search">
					<input type="text" placeholder="请输入品牌名称" name="value" value="{if isset($value)}{$value}{/if}">
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
				 				品牌名称
				 			</td>
				 			<td>
				 				品牌区域
				 			</td>
				 			<td>
				 				商品数量
				 			</td>
				 			<td>
				 				状态
				 			</td>
				 		</tr>
				 		{if !empty($brands)}
				 		{foreach $brands as $brand}
				 		<tr>
				 			<td>
				 				<input name="check" type="checkbox" value="{$brand.brand_id}">
				 			</td>
				 			<td>
				 				{$brand.brand_id}
				 			</td>
				 			<td>
				 				<a href="/brand/detail?brand_id={$brand.brand_id}">{$brand.name}</a>
				 			</td>
				 			<td>
				 				{if $brand.region ==1} 欧美 {elseif $brand.region ==2} 中国 {else} 日韩{/if}
				 			</td>
				 			<td>
				 			<a href="/goods/goodsList?brand_id={$brand.brand_id}">{$brand.goodsTotal}</a>
				 			</td>
				 			<td>
				 				{if $brand.status ==1} 启用{elseif $brand.status ==2}禁用{/if}
				 			</td>
				 		</tr>
				 		{/foreach}
				 	{else}
				 		<td colspan="6">
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
  		var brandChecks = document.getElementsByName("check");
  		for(var i = 0;i<brandChecks.length;i++){
  			if(brandChecks[i].type == "checkbox" && brandChecks[i].checked == true){
  				var brand_id = brandChecks[i].value;
  				break;
  			}
  		}
  		window.location.href='/brand/edit?brand_id='+brand_id;
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
    		var brandIds = '';
    		var url ='';
    		if(status == 1) {
    			$(".qiyong").css({"display":"none"});
    			url = "/brand/enabled";
    		}else {
    			$(".jinyong").css({"display":"none"});
    			url = "/brand/disable";
    		}
    		
    		for(var i=0;i<chk_value.length;i++){
    			brandIds += chk_value[i]+',';
    		}

    		$.ajax({
    			type: "POST",
    			url: url,
    			data: {brandIds:brandIds},
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