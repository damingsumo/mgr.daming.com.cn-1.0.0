<?php
/* Smarty version 3.1.31, created on 2017-09-14 17:13:49
  from "D:\phpStudy\WWW\mgr.daming.cn-1.0.0\application\views\brand\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ba484d121d78_39961607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbd099446e90ecbb93212a3d3f7651ce42f81a35' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\mgr.daming.cn-1.0.0\\application\\views\\brand\\edit.tpl',
      1 => 1502516703,
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
function content_59ba484d121d78_39961607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'品牌'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'brand'), 0, false);
?>
 	
<form id="brandForm" action="/brand/edit" method="post"  onsubmit="return check()" enctype="multipart/form-data"> 
<input type="hidden" id="brand_id" name="brand_id" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_id'];?>
">
			<div class="detial">
				<ul class="top">
					<li>品牌详情</li>
				</ul>
				<div class="list">
		    		<ul>
		    			<li>
		    				<em>*</em>
		    				<span>品牌名称：</span>
		    				 <span><?php echo $_smarty_tpl->tpl_vars['brand']->value['name'];?>
</span>
		    			</li>
		    			<li>
		    				<em>*</em>
		    				<span>品牌区域：</span>
		    				<select name="region" id="region">
		    					<option <?php if ($_smarty_tpl->tpl_vars['brand']->value['region'] == 0) {?>selected <?php } else { ?>style="display: none;" <?php }?> value="0"> 请选择</option>
		    					<option <?php if ($_smarty_tpl->tpl_vars['brand']->value['region'] == 1) {?>selected <?php }?> value="1">欧美</option>
		    					<option <?php if ($_smarty_tpl->tpl_vars['brand']->value['region'] == 2) {?>selected <?php }?> value="2">中国</option>
		    					<option <?php if ($_smarty_tpl->tpl_vars['brand']->value['region'] == 3) {?>selected <?php }?> value="3">日韩</option>
		    				</select>
		    				 
		    			</li>
		    			 
		    			<div class="haircolor_img  haircolor_img_add">
		                    <em>*</em>
						    <span>品牌标志：</span>
		                    <input type="file" id="file_input" name="picture_url">
							<div class="increase">
								<img src="<?php echo $_smarty_tpl->tpl_vars['brand']->value['picture_url'];?>
">
							</div>
							 
		                </div>
		    			<li>
		    				<em>*</em>
		    				<span>品牌介绍：</span>
		    				<textarea name="note"><?php echo $_smarty_tpl->tpl_vars['brand']->value['note'];?>
</textarea>
		    			</li>
		    		</ul>
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
			alert('请输入品牌名');
			return false;
		}
		var region = $("#region").val();
		if(region == 0){
			alert('请选择品牌地区');
			return false;
		}
		return true;
	}
<?php echo '</script'; ?>
> 


<?php $_smarty_tpl->_subTemplateRender("file:common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
