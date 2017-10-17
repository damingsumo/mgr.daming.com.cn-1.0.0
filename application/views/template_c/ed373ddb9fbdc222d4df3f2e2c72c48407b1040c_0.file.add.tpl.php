<?php
/* Smarty version 3.1.31, created on 2017-08-26 10:22:43
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\shoes\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a0db732d5467_46022332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed373ddb9fbdc222d4df3f2e2c72c48407b1040c' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\shoes\\add.tpl',
      1 => 1502846419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_59a0db732d5467_46022332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'鞋子管理'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'shoes'), 0, false);
?>
  
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
</body>
</html>				<?php }
}
