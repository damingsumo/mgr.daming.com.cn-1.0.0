<?php
/* Smarty version 3.1.31, created on 2017-08-14 15:59:53
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\image\complexion\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59915879793be1_12684028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fafcdc74c26f68c2f388b57e68cabd818c3652e1' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\image\\complexion\\add.tpl',
      1 => 1502697587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_59915879793be1_12684028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'品牌列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'image'), 0, false);
?>
 
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
						<input type="text" name="name">
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
</body>
</html>				<?php }
}
