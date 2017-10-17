{include file="common/head.tpl" pageTitle='鞋子详情'}	
{include file="common/menu.tpl" type='shoes'}  
		   
		    <div class="detial ">
	 		
				<ul class="top">
					<li>鞋子信息</li>
				</ul>
				<div class="color_add">
						<div> 
							<span>ID：</span>
						</div>
						 <span>{$shoes.shoes_id}</span>
	            </div>
	            <div class="color_add">
						<div> 
							<span>名称：</span>
						</div>
						 <span>{$shoes.name}</span>
	            </div>
	            <div class="color_add">
						<div> 
							<span>分类：</span>
						</div>
						 <span>{if $shoes.category == 1 } 单鞋 {elseif $shoes.category == 2}凉鞋 
						  {elseif $shoes.category == 3} 休闲鞋 {elseif $shoes.category == 4}靴子 {/if}</span>
	            </div>
	            <div class="color_add">
						<div> 
							<span>颜色：</span>
						</div>
						 <span>{$shoes.color}</span>
	            </div> 
	            <div class="color_add">
						<div> 
							<span>状态：</span>
						</div>
						 <span>{if $shoes.status == 1}启用{elseif $shoes.status == 2}禁用{/if}</span>
	            </div> 
	            <div class="color_add">
						<div> 
							<span>创建时间：</span>
						</div>
						 <span>{$shoes.create_time}</span>
	            </div> 
	             
	             <div class="haircolor_img"> 
					    <span>合成图片：</span>
						
						<div class="increase">
							<img src="{$shoes.picture_url}">
						</div>
						 
	                </div>
	                 <div class="haircolor_img"> 
					    <span>展示图片：</span>
						
						<div class="increase">
							<img src="{$shoes.compose_url}">
						</div>
						 
	                </div>
	                
                    <div class="sub sub3">
				<button onclick="window.location.href='/user/userList'">返回</button>
	       </div>
		     </div>
	  </div>
</body>
</html>