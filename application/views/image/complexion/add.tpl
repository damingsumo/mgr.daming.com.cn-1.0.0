{include file="common/head.tpl" pageTitle='品牌列表'}	
{include file="common/menu.tpl" type='image'} 
	        <div class="top_header">
	        	<div>
				     <a href="" class="">脸型管理</a> 
				    <a href="" class="link_color">肤色</a> 
				    <a href="" class="">发型</a> 
				    <a href="" class="">发色</a>  
			    </div>
	        </div>
			<div class="detial detial1">
				 
				<form id="brandForm" action="/hair/complexionAdd" method="post"  onsubmit="return check()" enctype="multipart/form-data"> 
					<div class="color_add">
						<div>
							<em>*</em>
							<span>肤色：</span>
						</div>
						<input type="text" name="name" id="name">
	                </div>
	                <div class="haircolor_img">
	                    <em>*</em>
					    <span>肤色图片：</span>
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
			alert('请输入肤色名');
			return false;
		}
		return true;
}

</script> 
{/literal}
{include file="common/foot.tpl"}			