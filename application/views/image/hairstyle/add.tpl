{include file="common/head.tpl" pageTitle='品牌列表'}	
{include file="common/menu.tpl" type='image'} 
{include file="common/image_menu.tpl" nextType='hairstyle'} 
			<div class="detial detial1">
				<form id="brandForm" action="/hair/hairStyleAdd" method="post"  onsubmit="return check()" enctype="multipart/form-data"> 
					<div class="color_add">
						<div>
							<em>*</em>
							<span>发型：</span>
						</div>
						<input type="text" name="name" id="name" id="name">
	                </div>
	                <div class="haircolor_img">
	                    <em>*</em>
					    <span>发型图片：</span>
	                    <input type="file" id="file_input" name="picture_url">
						<div class="increase none">
							<img src=" ">
						</div>
						 
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
			alert('请输入发型名');
			return false;
		}
		return true;
}

</script> 
{/literal}
{include file="common/foot.tpl"}			