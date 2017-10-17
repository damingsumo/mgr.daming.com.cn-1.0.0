<?php
/* Smarty version 3.1.31, created on 2017-08-28 14:50:45
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\image\face\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a3bd45a021b3_03081621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a74f2d5b994763882daf36b0e2325b1d284b94a' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\image\\face\\add.tpl',
      1 => 1502846323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_59a3bd45a021b3_03081621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'品牌列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'image'), 0, false);
?>
 
	        <div class="top_header">
	        	<div>
				    <a href="" class="link_color">脸型管理</a> 
				    <a href="" class="">肤色</a> 
				    <a href="" class="">发型</a> 
				    <a href="" class="">发色</a> 
			    </div>
	        </div>
			<div class="detial detial1">
				 
				<form id="brandForm" action="/hair/faceAdd" method="post"  onsubmit="return check()" enctype="multipart/form-data"> 
					<div class="color_add">
						<div>
							<em>*</em>
							<span>脸型：</span>
						</div>
						<input type="text" name="name">
	                </div>
	               <div class="haircolor_img">
	                    <em>*</em>
					    <span>脸型图片：</span>
					    <div class="increase none">
					    	<img src=" ">
					    </div>
	                    <input type="file" id="file_input" name="picture_url">
						<div class="increase1 none">
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
