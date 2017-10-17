{include file="common/head.tpl" pageTitle='分类列表'}	
{include file="common/menu.tpl" type='genre'}    
			<div class="detial">
				<ul class="top">
					<li><a href="/genre/goAdd" class=""><img src="/assets/images/xinjian.png">新建</a></li>
					<li><a onclick="startUse()" class=""><img src="/assets/images/kai.png">开</a></li>
					<li><a onclick="stopUse()" class=""><img src="/assets/images/guan.png">关</a></li>
					<li><a onclick="deteleUse()" class=""><img src="/assets/images/shanchu.png">删除</a></li>
				</ul>
            
				<form action="/genre/genreList" id="myform" method="GET">
				<div class="search  search1">
					<input type="text" placeholder="请输入分类名称" name="value" value="{if isset($value)}{$value}{/if}">
					<em>类别：</em>
					<select name="category">
						<option  selected  value="0">请选择</option>
						<option {if (isset($category)&&$category==1)} selected {/if} value="1">上装</option>
						<option {if (isset($category)&&$category==2)} selected {/if} value="2">裤装</option>
						<option {if (isset($category)&&$category==3)} selected {/if} value="3">裙装</option>
						<option {if (isset($category)&&$category==4)} selected {/if} value="4">套装</option>
					</select>
					<input type="button" onclick="search()">
				</div>
				<div class="hair">
				{if empty($genres)}
					<div class="data">
						暂无数据
					</div>
					{else}
					<ul>
					{foreach $genres as $genre}
						<li class="hair_border">
							<div class="hair_color"> 
								<img src="{$genre.picture_url}">
								<div>
									<span>{$genre.name}</span>
								</div>
								 <input name="check"  type="checkbox" value="{$genre.genre_id}">
								 <span class="state">{if $genre.status == 1}启用{elseif $genre.status == 2}禁用{/if}</span>
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
			alert('请选择脸型！');
			return false;
		}
     }


	function stopUse(){
		if($('input[name="check"]').is(':checked')) {
			$(".jinyong").css({"display":"block"});
        	
		}else{
			alert('请选择脸型！');
			return false;
		}
     }
	function deteleUse(){
		if($('input[name="check"]').is(':checked')) {
			$(".shanchu").css({"display":"block"});
        	
		}else{
			alert('请选择脸型！');
			return false;
		}
     }
	
	function search() {
		$('#myform').submit();
	}


    function sure(status) {
    	if(status == '1' || status == '2'|| status == '3') {
    		var chk_value =[];
    		$('input[name="check"]:checked').each(function() {
    		chk_value.push($(this).val());
    		});	
    		var genreIds = '';
    		var url ='';
    		if(status == 1) {
    			$(".qiyong").css({"display":"none"});
    			url = "/genre/enabled";
    		}else if(status == 2){
    			$(".jinyong").css({"display":"none"});
    			url = "/genre/disable";
    		}else{
    			$(".shanchu").css({"display":"none"});
    			url = "/genre/detele";

    		}
    		
    		for(var i=0;i<chk_value.length;i++){
    			genreIds += chk_value[i]+',';
    		}

    		$.ajax({
    			type: "POST",
    			url: url,
    			data: {genreIds:genreIds},
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