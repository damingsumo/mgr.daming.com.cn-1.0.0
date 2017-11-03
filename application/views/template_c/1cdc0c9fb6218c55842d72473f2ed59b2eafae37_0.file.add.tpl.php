<?php
/* Smarty version 3.1.31, created on 2017-11-03 10:08:02
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\brand\collocation\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59fbcf82f30804_87103978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cdc0c9fb6218c55842d72473f2ed59b2eafae37' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\brand\\collocation\\add.tpl',
      1 => 1509673595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_59fbcf82f30804_87103978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'搭配新增'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'brand'), 0, false);
?>

	          <div class="top_header">
			     <span>搭配新增 </span>
	        </div>
			<div class="detial detial1">
				 
				<form>
				  <div class="match">
				  	<ul> 
				  	   <li>
				  	   	<span>搭配1</span>
				  	   	<span>优衣库裙装</span>
				  	   </li> 
				  	    <li>
				  	   	<span>搭配2</span>
				  	   	<input type="text" placeholder="请输入ID">
				  	   </li>
				  	   <li>
				  	   	<span>搭配3</span>
				  	   	<input type="text" placeholder="请输入ID">
				  	   </li>
				  	   <li>
				  	   	<span>鞋子</span>
				  	   	<input type="text" placeholder="请输入ID">
				  	   </li>
				  	</ul>
				 </div>	 
				 <div class="haircolor_img">
	                    <em>*</em>
					    <span>搭配图片：</span>
	                    <input type="file" id="file_input">
						<div class="increase none">
							<img src=" ">
						</div>
						 
	                </div>
	                <div class="color_add" style="width:33%;">
						<div>
							<em>*</em>
							<span>横坐标：</span>
						</div>
						<input type="text">
	                </div>
	                <div class="color_add" style="width:33%;">
						<div>
							<em>*</em>
							<span>纵坐标：</span>
						</div>
						<input type="text">
	                </div>
	                <div class="color_add" style="width:33%;">
						<div>
							<em>*</em>
							<span>图片长：</span>
						</div>
						<input type="text">
	                </div>
	                <div class="color_add" style="width:33%;">
						<div>
							<em>*</em>
							<span>图片宽：</span>
						</div>
						<input type="text">
	                </div>
				 <div class="sub ">
		    		<input type="submit" value="保存">
		    	</div>
		        </form>
	       </div>
	 </div>
</body>
</html><?php }
}
