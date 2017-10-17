{include file="common/head.tpl" pageTitle='用户列表'}	
{include file="common/menu.tpl" type='brand'}
		    <div class="top_header">
			     <span>商品列表</span>
	        </div>
		    <div class="detial  detial1">
	 		
				<ul class="top">
					<li><a href="/goods/goadd?brand_id={$brand_id}"><img src="/assets/images/xinjian.png">新建</a></li>
					<li><a onclick="editSelect()"><img src="/assets/images/bianji.png">编辑</a></li>
					<li><a onclick="startUse()"><img src="/assets/images/kai.png">开</a></li>
					<li><a onclick="stopUse()"><img src="/assets/images/guan.png">关</a></li>
				</ul>
				<form action="/goods/goodsList?brand_id={$brand_id}" id="myform" method="GET">
				<input type="hidden" name="brand_id" value="{$brand_id}">
				<div class="search">
					<input type="text" placeholder="请输入商品名称" name="value" value="{if isset($value)}{$value}{/if}">
					<input type="button" onclick="search()">
				</div>
				<table class="base-table ">
				 	<tbody>
				 		<tr id="table_color"> 
				 			<td >
				 				<input name="select" type="checkbox" onclick="selectAll()">
				 			</td>
				 			<td>
				 				ID
				 			</td>
				 			<td>
				 				商品名称
				 			</td>
				 			<td>
				 				品牌名
				 			</td>
				 			<td>
				 				类型
				 			</td>
				 			<td>
				 				分类
				 			</td>
				 			<td>
				 				状态
				 			</td>
				 			<td>
				 				价格
				 			</td>
				 		</tr>
				 		{if !empty($goodss)}
				 		{foreach $goodss as $goods}
				 		<tr>
				 			<td>
				 				<input name="check" type="checkbox" value="{$goods.gid}">
				 			</td>
				 			<td>
				 				{$goods.gid}
				 			</td>
				 			<td>
				 			<a href="/goods/detail?gid={$goods.gid}">{$goods.goods_name}</a>
				 			</td>
				 			<td>
				 			{$goods.brand_name}
				 			</td>
				 			<td>
				 			{if $goods['genre'].category==1}上衣{elseif $goods['genre'].category==2}裤子{elseif $goods['genre'].category==4}套装{elseif $goods['genre'].category==3}裙装{/if}
				 			</td>
				 			<td>
				 			{$goods['genre'].name}
				 			</td>
				 			<td>
				 			{if $goods.status == 1} 上架{elseif $goods.status == 2} 下架{/if}
				 			</td>
				 			<td>
				 			{$goods.price/100}元
				 			</td>
				 		</tr>
				 		{/foreach}
				 {else}
				 <td colspan="8">
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
				</form>
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
  		var goodsChecks = document.getElementsByName("check");
  		for(var i = 0;i<goodsChecks.length;i++){
  			if(goodsChecks[i].type == "checkbox" && goodsChecks[i].checked == true){
  				var gid = goodsChecks[i].value;
  				break;
  			}
  		}
  		window.location.href='/goods/edit?gid='+gid;
  	}else{
  		alert('请选择商品！');
  	}
  }

	function search() {
		$('#myform').submit();
	}

	function startUse(){
		if($('input[name="check"]').is(':checked')) {
        	$(".qiyong").css({"display":"block"});
        	
		}else{
			alert('请勾选商品！');
			return false;
		}
     }


	function stopUse(){
		if($('input[name="check"]').is(':checked')) {
			$(".jinyong").css({"display":"block"});
        	
		}else{
			alert('请勾选商品！');
			return false;
		}
     }


    function sure(status) {
    	if(status == '1' || status == '2') {
    		var chk_value =[];
    		$('input[name="check"]:checked').each(function() {
    		chk_value.push($(this).val());
    		});	
    		var gids = '';
    		var url ='';
    		if(status == 1) {
    			$(".qiyong").css({"display":"none"});
    			url = "/goods/enabled";
    		}else {
    			$(".jinyong").css({"display":"none"});
    			url = "/goods/disable";
    		}
    		
    		for(var i=0;i<chk_value.length;i++){
    			gids += chk_value[i]+',';
    		}

    		$.ajax({
    			type: "POST",
    			url: url,
    			data: {gids:gids},
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