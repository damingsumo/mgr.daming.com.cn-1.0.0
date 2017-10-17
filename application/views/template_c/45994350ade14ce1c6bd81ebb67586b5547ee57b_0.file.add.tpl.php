<?php
/* Smarty version 3.1.31, created on 2017-09-14 16:49:28
  from "D:\phpStudy\WWW\mgr.daming.cn-1.0.0\application\views\genre\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ba42984d9195_35453212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45994350ade14ce1c6bd81ebb67586b5547ee57b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\mgr.daming.cn-1.0.0\\application\\views\\genre\\add.tpl',
      1 => 1503622458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
    'file:common/foot.tpl' => 1,
  ),
),false)) {
function content_59ba42984d9195_35453212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'新增分类'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'genre'), 0, false);
?>
 
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
 
<?php echo '<script'; ?>
 type="text/javascript">	
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
<?php echo '</script'; ?>
> 

<?php $_smarty_tpl->_subTemplateRender("file:common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php }
}
