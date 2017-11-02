<?php
/* Smarty version 3.1.31, created on 2017-11-02 09:41:14
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\brand\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59fa77ba482f71_91894859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19eff4788765fa840097e279cedff0e91d6c8f8c' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\brand\\add.tpl',
      1 => 1509585907,
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
function content_59fa77ba482f71_91894859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'新增品牌'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'brand'), 0, false);
?>
 
			<div class="detial">
				<ul class="top">
					<li> 新增品牌</li>
				</ul>
				<form id="brandForm" action="/brand/add" method="post"  onsubmit="return check()" enctype="multipart/form-data">  
				<div class="list">
		    		<ul>
		    			<li>
		    				<em>*</em>
		    				<span>品牌名称：</span>
		    				<input type="text" id="name" name="name" value="">
		    			</li>
		    			<li>
		    				<em>*</em>
		    				<span>品牌区域：</span>
		    				<select id="region" name="region">
		    					<option select="selected" value="0"> 请选择</option>
		    					<option value="1">欧美</option>
		    					<option value="2">中国</option>
		    					<option value="3">日韩</option>
		    				</select>
		    				 
		    			</li>
		    			<li>
			    			<div class="haircolor_img  haircolor_img_add">
			                    <em>*</em>
							    <span>品牌标志：</span>
			                    <input type="file" id="file_input" name="picture_url">
								<div class="increase">
									<img src=" ">
								</div>
								 
			                </div>
		                </li>
		    			<li>
		    				<span>&nbsp&nbsp品牌介绍：</span>
		    				<textarea name="note"></textarea>
		    			</li>
		    		</ul>
		    	</div>
		    	<div class="sub ">
		    		<button type="submit">保存</button>
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
?>
	<?php }
}
