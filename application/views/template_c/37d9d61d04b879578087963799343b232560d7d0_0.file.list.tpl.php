<?php
/* Smarty version 3.1.31, created on 2017-09-28 16:54:20
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\image\hairstyle\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ccb8bc441ec2_72094824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37d9d61d04b879578087963799343b232560d7d0' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\image\\hairstyle\\list.tpl',
      1 => 1503903761,
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
function content_59ccb8bc441ec2_72094824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'品牌列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'image'), 0, false);
?>
 
<?php $_smarty_tpl->_subTemplateRender("file:common/image_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nextType'=>'hairstyle'), 0, false);
?>
 
			<div class="detial detial1">
				<ul class="top">
					<li><a href="/hair/goStyleAdd"><img src="/assets/images/xinjian.png">新建</a></li>
<!-- 					<li><a href=""><img src="/assets/images/bianji.png">编辑</a></li> -->
					<li><a onclick="startUse()" class=""><img src="/assets/images/kai.png">开</a></li>
					<li><a onclick="stopUse()" class=""><img src="/assets/images/guan.png">关</a></li>
					<li><a onclick="deteleUse()" class=""><img src="/assets/images/shanchu.png">删除</a></li>
				</ul>
				<form>
				<div class="hair">
				<?php if (empty($_smarty_tpl->tpl_vars['hairStyles']->value)) {?>
					<div class="data">
						暂无数据
					</div>
					<?php } else { ?>
					<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hairStyles']->value, 'hairStyle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hairStyle']->value) {
?>
						<li class="hair_border">
							<div class="hair_color"> 
								<img src="<?php echo $_smarty_tpl->tpl_vars['hairStyle']->value['picture_url'];?>
">
								<div>
									<span><?php echo $_smarty_tpl->tpl_vars['hairStyle']->value['name'];?>
</span>
								</div>
								 <input name="check"  type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['hairStyle']->value['hair_style_id'];?>
">
								 <span class="state"><?php if ($_smarty_tpl->tpl_vars['hairStyle']->value['status'] == 1) {?>启用<?php } elseif ($_smarty_tpl->tpl_vars['hairStyle']->value['status'] == 2) {?>禁用<?php }?></span>
							</div>
						</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

					</ul>
					<?php }?>
				</div>
		    	<div class="pull-right page-select">
					<div class="total-record">共<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>条记录，每页<span><?php echo $_smarty_tpl->tpl_vars['pageSize']->value;?>
</span>条
			<?php echo $_smarty_tpl->tpl_vars['pager']->value->toHTML();?>

		</div> 
		    </form>
	       </div>
	 </div>

<?php echo '<script'; ?>
 type="text/javascript">
	function startUse(){
		if($('input[name="check"]').is(':checked')) {
        	$(".qiyong").css({"display":"block"});
        	
		}else{
			alert('请勾选发型！');
			return false;
		}
     }


	function stopUse(){
		if($('input[name="check"]').is(':checked')) {
			$(".jinyong").css({"display":"block"});
        	
		}else{
			alert('请勾选发型！');
			return false;
		}
     }

	function deteleUse() {
		if($('input[name="check"]').is(':checked')) {
			$(".shanchu").css({"display":"block"});
        	
		}else{
			alert('请勾选发型！');
			return false;
		}

	}

	

    function sure(status) {
    	if(status == '1' || status == '2'|| status == '3') {
    		var chk_value =[];
    		$('input[name="check"]:checked').each(function() {
    		chk_value.push($(this).val());
    		});	
    		var hairstyleIds = '';
    		var url ='';
    		if(status == '1') {
    			$(".qiyong").css({"display":"none"});
    			url = "/hair/hairstyleEnabled";
    		}else if(status == '2'){
    			$(".jinyong").css({"display":"none"});
    			url = "/hair/hairstyleDisable";
    		}else {
    			$(".shanchu").css({"display":"none"});
    			url = "/hair/hairstyleDetele";
    		}
    		for(var i=0;i<chk_value.length;i++){
    			hairstyleIds += chk_value[i]+',';
    		}

    		$.ajax({
    			type: "POST",
    			url: url,
    			data: {hairstyleIds:hairstyleIds},
    			datatype:'json',
    			success: function(data) {
    				var member = eval("("+data+")");
    				$('#_xinfo').html('');
    				if(member.status == 200) {
    					alert(member.data);
    					window.location.reload();
    				} else {
    					alert(member.data);
    				}
    			}
    		});
		}
    }
	<?php echo '</script'; ?>
>
	
	<?php $_smarty_tpl->_subTemplateRender("file:common/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
