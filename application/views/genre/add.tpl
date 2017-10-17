{include file="common/head.tpl" pageTitle='新增分类'}	
{include file="common/menu.tpl" type='genre'} 
	        <div class="detial">
				<ul class="top">
					 <li>
						<li>新建分类</li>
					</li>
				</ul>
				<form id="brandForm" action="/genre/add" method="post" onsubmit="return check()" enctype="multipart/form-data"> 
					<div class="color_add">
						<div>
							<em>*</em>
							<span>分类名称：</span>
						</div>
						 <input type="text" id="name" name="name">
	                </div>
	             
					<div class="color_add">
						<div>
							<em>*</em>
							<span>分类类别：</span>
						</div>
						<select class="shoes_fashion" id="category" name="category"> 
							<option value="0">请选择</option>
							<option value="4">套装</option>
							<option value="1">上装</option>
							<option value="2">裤装</option>
							<option value="3">套裙</option>
						</select>
	                </div> 
	                 
	             
	               <div class="haircolor_img">
	                    <em>*</em>
					    <span>分类图片：</span>
						
						<div class="increase none">
							<img src=" ">
						</div>
						<input type="file" id="file_input" name="picture_url">
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
		return true;
	}
</script> 
{/literal}
{include file="common/foot.tpl"}			