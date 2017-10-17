{include file="common/head.tpl" pageTitle='新增品牌'}	
{include file="common/menu.tpl" type='brand'} 
			<div class="detial">
				<ul class="top">
					<li> 新增品牌</li>
				</ul>
				<form id="brandForm" action="/brand/add" method="post"  onsubmit="return check()" enctype="multipart/form-data">  
				<div class="list">
		    		<ul>
		    			<li>
		    				<em>*</em>
		    				<span>品牌名称：</span>
		    				<input type="text" id="name" name="name" value="">
		    			</li>
		    			<li>
		    				<em>*</em>
		    				<span>品牌区域：</span>
		    				<select id="region" name="region">
		    					<option select="selected" value="0"> 请选择</option>
		    					<option value="1">欧美</option>
		    					<option value="2">中国</option>
		    					<option value="3">日韩</option>
		    				</select>
		    				 
		    			</li>
		    			<li>
			    			<div class="haircolor_img  haircolor_img_add">
			                    <em>*</em>
							    <span>品牌标志：</span>
			                    <input type="file" id="file_input" name="picture_url">
								<div class="increase">
									<img src=" ">
								</div>
								 
			                </div>
		                </li>
		    			<li>
		    				<span>&nbsp&nbsp品牌介绍：</span>
		    				<textarea name="note"></textarea>
		    			</li>
		    		</ul>
		    	</div>
		    	<div class="sub ">
		    		<button type="submit">保存</button>
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