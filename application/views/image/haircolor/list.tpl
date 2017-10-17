{include file="common/head.tpl" pageTitle='发色列表'}	
{include file="common/menu.tpl" type='image'} 
{include file="common/image_menu.tpl" nextType='haircolor'} 
			<div class="detial detial1">
				<ul class="top">
					<li><a href="/hair/goColorAdd" class=""><img src="/assets/images/xinjian.png">新建</a></li>
<!-- 					<li><a href="" ><img src="/assets/images/bianji.png">编辑</a></li> -->
					<li><a onclick="startUse()" class=""><img src="/assets/images/kai.png">开</a></li>
					<li><a onclick="stopUse()" class=""><img src="/assets/images/guan.png">关</a></li>
					<li><a onclick="deteleUse()" class=""><img src="/assets/images/shanchu.png">删除</a></li>
				</ul>
				<form>
				<div class="hair">
				{if empty($hairColors)}
					<div class="data">
						暂无数据
					</div>
					{else}
					<ul>
					{foreach $hairColors as $hairColor}
						<li class="hair_border">
							<div class="hair_color"> 
								<img src="{$hairColor.picture_url}">
								<div>
									<span>{$hairColor.name}</span>
								</div>
								 <input name="check"  type="checkbox" value="{$hairColor.hair_color_id}">
								 <span class="state">{if $hairColor.status == 1}启用{elseif $hairColor.status == 2}禁用{/if}</span>
							</div>
						</li>
						{/foreach}
					</ul>
					{/if}
				</div>
		    	<div class="pull-right page-select">
					<div class="total-record">共<span>{$total}</span>条记录，每页<span>{$pageSize}</span>条
			{$pager->toHTML()}
		</div> 
		    </form>
	       </div>
	 </div>
{literal}
<script type="text/javascript">
	function startUse(){
		if($('input[name="check"]').is(':checked')) {
        	$(".qiyong").css({"display":"block"});
        	
		}else{
			alert('请选择发色！');
			return false;
		}
     }


	function stopUse(){
		if($('input[name="check"]').is(':checked')) {
			$(".jinyong").css({"display":"block"});
        	
		}else{
			alert('请选择发色！');
			return false;
		}
     }

	function deteleUse() {
		if($('input[name="check"]').is(':checked')) {
			$(".shanchu").css({"display":"block"});
        	
		}else{
			alert('请选择发色！');
			return false;
		}

	}

	

    function sure(status) {
    	if(status == '1' || status == '2'|| status == '3') {
    		var chk_value =[];
    		$('input[name="check"]:checked').each(function() {
    		chk_value.push($(this).val());
    		});	
    		var haircolorIds = '';
    		var url ='';
    		if(status == '1') {
    			$(".qiyong").css({"display":"none"});
    			url = "/hair/haircolorEnabled";
    		}else if(status == '2'){
    			$(".jinyong").css({"display":"none"});
    			url = "/hair/haircolorDisable";
    		}else {
    			$(".shanchu").css({"display":"none"});
    			url = "/hair/haircolorDetele";
    		}
    		for(var i=0;i<chk_value.length;i++){
    			haircolorIds += chk_value[i]+',';
    		}

    		$.ajax({
    			type: "POST",
    			url: url,
    			data: {haircolorIds:haircolorIds},
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