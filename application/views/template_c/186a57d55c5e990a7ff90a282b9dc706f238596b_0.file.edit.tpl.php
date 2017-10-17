<?php
/* Smarty version 3.1.31, created on 2017-08-26 09:28:30
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\shoes\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a0cebe1e6bd9_94250230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '186a57d55c5e990a7ff90a282b9dc706f238596b' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\shoes\\edit.tpl',
      1 => 1503710906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_59a0cebe1e6bd9_94250230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'鞋子修改'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'shoes'), 0, false);
?>
  
			<div class="detial">
				 
				<form id="brandForm" action="/shoes/edit" method="post"  onsubmit="return check()" enctype="multipart/form-data">
					<div class="color_add">
						<div>
							<em>*</em>
							<span>鞋子名称：</span>
						</div>
						 <input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['shoes']->value['name'];?>
">
	                </div>
	         			<input type="hidden" name="shoes_id" value="<?php echo $_smarty_tpl->tpl_vars['shoes']->value['shoes_id'];?>
">
					<div class="color_add">
						<div>
							<em>*</em>
							<span>鞋子类型：</span>
						</div>
						<select  class="shoes_fashion" id="category" name="category"> 
							<option value="0">请选择</option>
							<option <?php if ($_smarty_tpl->tpl_vars['shoes']->value['category'] == 1) {?> selected <?php }?> value="1">单鞋</option>
							<option <?php if ($_smarty_tpl->tpl_vars['shoes']->value['category'] == 2) {?> selected <?php }?> value="2">凉鞋</option>
							<option <?php if ($_smarty_tpl->tpl_vars['shoes']->value['category'] == 3) {?> selected <?php }?> value="3">休闲鞋</option>
							<option <?php if ($_smarty_tpl->tpl_vars['shoes']->value['category'] == 4) {?> selected <?php }?> value="4">靴子</option>
						</select>
	                </div>
	                  <div class="color_add">
						<div>
							<em>*</em>
							<span>鞋子颜色：</span>
						</div>
						<input type="text" name="color" id="color" value="<?php echo $_smarty_tpl->tpl_vars['shoes']->value['color'];?>
">
	                </div>
	                 
	             
	               <div class="haircolor_img">
	                    <em>*</em>
					    <span>合成图片：</span>
						
						<div class="increase">
							<img src="<?php echo $_smarty_tpl->tpl_vars['shoes']->value['picture_url'];?>
">
						</div>
						<input type="file" id="file_input" name="picture_url">
	                </div>
	                 <div class="haircolor_img">
	                    <em>*</em>
					    <span>展示图片：</span>
						
						<div class="increase1">
							<img src="<?php echo $_smarty_tpl->tpl_vars['shoes']->value['compose_url'];?>
">
						</div>
						<input type="file" id="file_input1" name="compose_url">
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
