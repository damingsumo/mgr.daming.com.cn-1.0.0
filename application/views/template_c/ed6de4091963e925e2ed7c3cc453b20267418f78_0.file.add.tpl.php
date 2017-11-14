<?php
/* Smarty version 3.1.31, created on 2017-11-11 15:47:25
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\image\face\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a06ab0d43c8c7_22435635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed6de4091963e925e2ed7c3cc453b20267418f78' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\image\\face\\add.tpl',
      1 => 1509585907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
    'file:common/image_menu.tpl' => 1,
    'file:common/foot.tpl' => 1,
  ),
),false)) {
function content_5a06ab0d43c8c7_22435635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'品牌列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'image'), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:common/image_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nextType'=>'face'), 0, false);
?>
 
			<div class="detial detial1">
				 
				<form id="brandForm" action="/hair/faceAdd" method="post"  onsubmit="return check()" enctype="multipart/form-data"> 
					<div class="color_add">
						<div>
							<em>*</em>
							<span>脸型：</span>
						</div>
						<input type="text" name="name" id="name">
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

<?php echo '<script'; ?>
 type="text/javascript">	
function check() {
	 var name = $("#name").val();
	    $.trim(name);
		if(name == ''){
			alert('请输入脸型名');
			return false;
		}
		return true;
}

<?php echo '</script'; ?>
> 

<?php $_smarty_tpl->_subTemplateRender("file:common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php }
}
