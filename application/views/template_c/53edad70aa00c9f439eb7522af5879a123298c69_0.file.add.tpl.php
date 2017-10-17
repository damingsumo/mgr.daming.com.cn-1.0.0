<?php
/* Smarty version 3.1.31, created on 2017-08-14 15:47:21
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\image\hairstyle\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5991558945b6e9_72203927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53edad70aa00c9f439eb7522af5879a123298c69' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\image\\hairstyle\\add.tpl',
      1 => 1502696838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
    'file:common/image_menu.tpl' => 1,
  ),
),false)) {
function content_5991558945b6e9_72203927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'品牌列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'image'), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:common/image_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nextType'=>'hairstyle'), 0, false);
?>
 
			<div class="detial detial1">
				<form id="brandForm" action="/hair/hairStyleAdd" method="post"  onsubmit="return check()" enctype="multipart/form-data"> 
					<div class="color_add">
						<div>
							<em>*</em>
							<span>发型：</span>
						</div>
						<input type="text" name="name" id="name">
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
</body>
</html>				<?php }
}
