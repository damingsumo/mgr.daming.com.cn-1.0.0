{include file="common/head.tpl" pageTitle='搭配新增'}	
{include file="common/menu.tpl" type='brand'}
	          <div class="top_header">
			     <span>搭配新增 </span>
	        </div>
			<div class="detial detial1">
				 
				<form id="brandForm" action="/collocation/add" method="post"  onsubmit="return check()" enctype="multipart/form-data"> 
				<input type="hidden" name="gid" value="{$gid}">
				  <div class="match">
				  	<ul> 
				  	   <li>
				  	   	<span>搭配1</span>
				  	   	<span>优衣库裙装</span>
				  	   </li> 
				  	    <li>
				  	   	<span>搭配2</span>
				  	   	<input type="text" placeholder="请输入ID">
				  	   </li>
				  	   <li>
				  	   	<span>搭配3</span>
				  	   	<input type="text" placeholder="请输入ID">
				  	   </li>
				  	   <li>
				  	   	<span>鞋子</span>
				  	   	<input type="text" placeholder="请输入ID">
				  	   </li>
				  	</ul>
				 </div>	 
				 <div class="haircolor_img">
	                    <em>*</em>
					    <span>搭配图片：</span>
	                    <input type="file" id="file_input" name="picture_url">
						<div class="increase none">
							<img src=" ">
						</div>
						 
	                </div>
	                <div class="color_add" style="width:33%;" >
						<div>
							<em>*</em>
							<span>横坐标：</span>
						</div>
						<input type="text" name="abscissa">
	                </div>
	                <div class="color_add" style="width:33%;">
						<div>
							<em>*</em>
							<span>纵坐标：</span>
						</div>
						<input type="text" name="ordinate">
	                </div>
	                <div class="color_add" style="width:33%;">
						<div>
							<em>*</em>
							<span>图片长：</span>
						</div>
						<input type="text" name="length">
	                </div>
	                <div class="color_add" style="width:33%;">
						<div>
							<em>*</em>
							<span>图片宽：</span>
						</div>
						<input type="text" name="width">
	                </div>
				 <div class="sub ">
		    		<input type="submit" value="保存">
		    	</div>
		        </form>
	       </div>
	 </div>
</body>
</html>