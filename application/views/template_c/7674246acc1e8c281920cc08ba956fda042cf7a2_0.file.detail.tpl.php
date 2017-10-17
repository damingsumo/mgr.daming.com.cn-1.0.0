<?php
/* Smarty version 3.1.31, created on 2017-09-15 13:45:32
  from "D:\phpStudy\WWW\mgr.daming.cn-1.0.0\application\views\user\detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59bb68fcf2bf74_74911810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7674246acc1e8c281920cc08ba956fda042cf7a2' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\mgr.daming.cn-1.0.0\\application\\views\\user\\detail.tpl',
      1 => 1503904981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_59bb68fcf2bf74_74911810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'用户详情'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'user'), 0, false);
?>
 
<div class="detial">
	 		
				<ul class="top">
					<li><a href="">用户详情</a></li>
				</ul>
				<div class="new_list">
					<ul>
						<li>
							基本信息
						</li>
						<li>
							<span>身高：<?php echo $_smarty_tpl->tpl_vars['user']->value['figure']['height'];?>
cm</span>
							<span>体重：<?php echo $_smarty_tpl->tpl_vars['user']->value['figure']['weight'];?>
kg</span>
							<span>年龄：<?php echo $_smarty_tpl->tpl_vars['user']->value['figure']['age'];?>
</span>
						</li>
						<li>
							胸罩尺码
						</li>
						<li>
							<span>下胸围：<?php echo $_smarty_tpl->tpl_vars['user']->value['figure']['chest_circumference'];?>
</span>
							<span>罩杯：<?php echo $_smarty_tpl->tpl_vars['user']->value['figure']['cup_size'];?>
</span>
						</li>
						<li>
							身材特征
						</li>
				    </ul>
				</div>
				<div class="feature">

					<ul>
						<div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>腰型：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['waist'] == 1) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>直筒</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['waist'] == 2) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['waist'] == 3) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>有曲线</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['waist'] == 4) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['waist'] == 5) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>曲线明显</span>
					     		</em>
				     		</div>
				     		
				     		
				     		

				     	</li>
				     	</div>
				     	<div class="aaa">
				     	<em class="line"></em> 
						<li>
                            <span>肚腩：</span>
                            <div class="scirle_style">
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['belly'] == 1) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>没有</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['belly'] == 2) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['belly'] == 3) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>小肚腩</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['belly'] == 4) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['belly'] == 5) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>大肚腩</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     	</div>
				     <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>臀形：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['stern_type'] == 1) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>下塌</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['stern_type'] == 2) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['stern_type'] == 3) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['stern_type'] == 4) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['stern_type'] == 5) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>上翘</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					 <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>胯型：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['hip_type'] == 1) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>直筒</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['hip_type'] == 2) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['hip_type'] == 3) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>有曲线</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['hip_type'] == 4) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['hip_type'] == 5) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>曲线明显</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
				      <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>肩膀：</span>
                            <div class="scirle_style">
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['shoulder'] == 1) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>窄</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['shoulder'] == 2) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['shoulder'] == 3) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['shoulder'] == 4) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['shoulder'] == 5) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>宽</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					   <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>臂长：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['arm'] == 1) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>短</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['arm'] == 2) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['arm'] == 3) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['arm'] == 4) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['arm'] == 5) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>长</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					  <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>臂围：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['arm_circumference'] == 1) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>细</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['arm_circumference'] == 2) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['arm_circumference'] == 3) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['arm_circumference'] == 4) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['arm_circumference'] == 5) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>粗</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
				    
				     <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>胯部：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['hip'] == 1) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>窄</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['hip'] == 2) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['hip'] == 3) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['hip'] == 4) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['hip'] == 5) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>宽</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					  <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>大腿：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['thigh'] == 1) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>细</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['thigh'] == 2) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['thigh'] == 3) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['thigh'] == 4) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['thigh'] == 5) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>粗</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					  <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>小腿：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['leg'] == 1) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>细</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['leg'] == 2) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['leg'] == 3) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>正常</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['leg'] == 4) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['leg'] == 5) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>粗</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					 <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>上下身粗：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['body_thick'] == 1) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>上身粗</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['body_thick'] == 2) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['body_thick'] == 3) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>一般比例</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['body_thick'] == 4) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['body_thick'] == 5) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>下身粗</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					  <div class="aaa">
						<em class="line"></em> 
						<li>
                            <span>上下身长：</span>
                            
						
							<div class="scirle_style">
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['body_length'] == 1) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>上身长</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['body_length'] == 2) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['body_length'] == 3) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>一般比例</span>
					     		</em> 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['body_length'] == 4) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     		</em>
					     	 
					     		<em class="scirle">
					     			<em <?php if ($_smarty_tpl->tpl_vars['user']->value['figure']['body_length'] == 5) {?>class="scirle_color color1"<?php } else { ?>class="scirle_color"<?php }?>></em>
					     			<span>下身长</span>
					     		</em>
				     		</div>
				     		
				     	</li>
				     </div>
					    
						<li>
                            <span>注重部分：胯部、臀部、小腿。</span>
                             
				     	 
				     		
				     	</li>
				    
					</ul>
				</div>
			      <div class="footer ">
					<span> </span>
					<span> </span>
					<span> </span>
					<span> </span>
				</div>
	  <div class="sub sub3">
				<button onclick="window.location.href='/shoes/shoesList'">返回</button>
	       </div>
		     </div>
	  </div>
</body>
</html><?php }
}
