{include file="common/head.tpl" pageTitle='鞋子管理'}	
{include file="common/menu.tpl" type='shoes'}  
			<div class="detial">
				<ul class="top">
					 
					<li>
						新增鞋子
					</li>
				</ul>
				<form id="brandForm" action="/shoes/add" method="post"  onsubmit="return check()" enctype="multipart/form-data"> 
					<div class="color_add">
						<div>
							<em>*</em>
							<span>鞋子名称：</span>
						</div>
						 <input type="text" id="name" name="name">
	                </div>
	             
					<div class="color_add">
						<div>
							<em>*</em>
							<span>鞋子类型：</span>
						</div>
						<select  class="shoes_fashion" id="category" name="category"> 
							<option value="0">请选择</option>
							<option value="1">单鞋</option>
							<option value="2">凉鞋</option>
							<option value="3">休闲鞋</option>
							<option value="4">靴子</option>
						</select>
	                </div>
	                  <div class="color_add">
						<div>
							<em>*</em>
							<span>鞋子颜色：</span>
						</div>
						 <input type="text" name="color" id="color">
	                </div>
	                 
	             
	               <div class="haircolor_img">
	                    <em>*</em>
					    <span>合成图片：</span>
						
						<div class="increase none">
							<img src=" ">
						</div>
						<input type="file" id="file_input" name="picture_url">
	                </div>
	                 <div class="haircolor_img">
	                    <em>*</em>
					    <span>展示图片：</span>
						
						<div class="increase1 none">
							<img src=" ">
						</div>
						<input type="file" id="file_input1" name="compose_url">
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
			alert('请输入分类名称');
			return false;
		}
		var category = $("#category").val();
		if(category == 0){
			alert('请选择类别');
			return false;
		}
		var category = $("#color").val();
		if(category == 0){
			alert('请选择颜色');
			return false;
		}
		return true;
	}
</script> 
{/literal}
{include file="common/foot.tpl"}				