{include file="common/head.tpl" pageTitle='鞋子修改'}	
{include file="common/menu.tpl" type='shoes'}  
			<div class="detial">
				 
				<form id="brandForm" action="/shoes/edit" method="post"  onsubmit="return check()" enctype="multipart/form-data">
					<div class="color_add">
						<div>
							<em>*</em>
							<span>鞋子名称：</span>
						</div>
						 <input type="text" id="name" name="name" value="{$shoes.name}">
	                </div>
	         			<input type="hidden" name="shoes_id" value="{$shoes.shoes_id}">
					<div class="color_add">
						<div>
							<em>*</em>
							<span>鞋子类型：</span>
						</div>
						<select  class="shoes_fashion" id="category" name="category"> 
							<option value="0">请选择</option>
							<option {if $shoes.category == 1} selected {/if} value="1">单鞋</option>
							<option {if $shoes.category == 2} selected {/if} value="2">凉鞋</option>
							<option {if $shoes.category == 3} selected {/if} value="3">休闲鞋</option>
							<option {if $shoes.category == 4} selected {/if} value="4">靴子</option>
						</select>
	                </div>
	                  <div class="color_add">
						<div>
							<em>*</em>
							<span>鞋子颜色：</span>
						</div>
						<input type="text" name="color" id="color" value="{$shoes.color}">
	                </div>
	                 
	             
	               <div class="haircolor_img">
	                    <em>*</em>
					    <span>合成图片：</span>
						
						<div class="increase">
							<img src="{$shoes.picture_url}">
						</div>
						<input type="file" id="file_input" name="picture_url">
	                </div>
	                 <div class="haircolor_img">
	                    <em>*</em>
					    <span>展示图片：</span>
						
						<div class="increase1">
							<img src="{$shoes.compose_url}">
						</div>
						<input type="file" id="file_input1" name="compose_url">
	                </div>
	                
                    <div class="sub ">
		    			<input type="submit" value="保存">
		    	    </div>

                </form>
	       </div>
	 </div>
</body>
</html>				