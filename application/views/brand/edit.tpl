{include file="common/head.tpl" pageTitle='品牌'}
{include file="common/menu.tpl" type='brand'} 	
<form id="brandForm" action="/brand/edit" method="post"  onsubmit="return check()" enctype="multipart/form-data"> 
<input type="hidden" id="brand_id" name="brand_id" value="{$brand.brand_id}">
			<div class="detial">
				<ul class="top">
					<li>品牌详情</li>
				</ul>
				<div class="list">
		    		<ul>
		    			<li>
		    				<em>*</em>
		    				<span>品牌名称：</span>
		    				 <span>{$brand.name}</span>
		    			</li>
		    			<li>
		    				<em>*</em>
		    				<span>品牌区域：</span>
		    				<select name="region" id="region">
		    					<option {if $brand.region == 0}selected {else}style="display: none;" {/if} value="0"> 请选择</option>
		    					<option {if $brand.region == 1}selected {/if} value="1">欧美</option>
		    					<option {if $brand.region == 2}selected {/if} value="2">中国</option>
		    					<option {if $brand.region == 3}selected {/if} value="3">日韩</option>
		    				</select>
		    				 
		    			</li>
		    			 
		    			<div class="haircolor_img  haircolor_img_add">
		                    <em>*</em>
						    <span>品牌标志：</span>
		                    <input type="file" id="file_input" name="picture_url">
							<div class="increase">
								<img src="{$brand.picture_url}">
							</div>
							 
		                </div>
		    			<li>
		    				<em>*</em>
		    				<span>品牌介绍：</span>
		    				<textarea name="note">{$brand.note}</textarea>
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
	    var name = $("#name").val();
	    $.trim(name);
		if(name == ''){
			alert('请输入品牌名');
			return false;
		}
		var region = $("#region").val();
		if(region == 0){
			alert('请选择品牌地区');
			return false;
		}
		return true;
	}
</script> 
{/literal}

{include file="common/foot.tpl"}