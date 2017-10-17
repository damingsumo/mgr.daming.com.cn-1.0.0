<?php
/* Smarty version 3.1.31, created on 2017-09-14 17:14:13
  from "D:\phpStudy\WWW\mgr.daming.cn-1.0.0\application\views\shoes\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ba4865bdeec4_96443305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1914f1ce3d1be3e7a4094faab9e128aa0b76588e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\mgr.daming.cn-1.0.0\\application\\views\\shoes\\list.tpl',
      1 => 1503714457,
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
function content_59ba4865bdeec4_96443305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'鞋子管理'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'shoes'), 0, false);
?>
  
		    <div class="top_header">
	        	<div>
				    <a href="" class="link_color">鞋子管理</a> 
			    </div>
	        </div>
		    <div class="detial detial1 ">
	 		
				<ul class="top">
					<li><a href="/shoes/goAdd"><img src="/assets/images/xinjian.png">新建</a></li>
					<!--<li><a onclick="editSelect()"><img src="/assets/images/bianji.png">编辑</a></li>-->
					<li><a onclick="startUse()"><img src="/assets/images/kai.png">开</a></li>
					<li><a onclick="stopUse()"><img src="/assets/images/guan.png">关</a></li>
				</ul>
				<form action="/shoes/shoesList" id="myform" method="GET">
				<div class="search">
					<input type="text" placeholder="请输入鞋子名字" name="value" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)) {
echo $_smarty_tpl->tpl_vars['value']->value;
}?>">
					<input type="button" onclick="search()">
				</div>
				</form>
				<table class="base-table ">
				 	<tbody>
				 		<tr> 
				 			<td>
				 				<input name="select" type="checkbox" onclick="selectAll()">
				 			</td>
				 			<td style="width: 8%">
				 				ID
				 			</td>
				 			<td>
				 				名称
				 			</td>
				 			<td>
				 				款式
				 			</td>
				 			<td>
				 				颜色
				 			</td>
				 			<td style="width: 20%">
				 				创建时间
				 			</td>
				 			 <td>
				 				状态
				 			</td>
				 		</tr>
				 		<?php if (!empty($_smarty_tpl->tpl_vars['shoes']->value)) {?>
				 		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shoes']->value, 'shoe');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['shoe']->value) {
?>
				 		<tr> 
				 			<td>
				 				<input name="check" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['shoe']->value['shoes_id'];?>
">
				 			</td>
				 			<td >
				 				<?php echo $_smarty_tpl->tpl_vars['shoe']->value['shoes_id'];?>

				 			</td>
				 			<td>
				 				<a href="/shoes/detail?shoes_id=<?php echo $_smarty_tpl->tpl_vars['shoe']->value['shoes_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['shoe']->value['name'];?>
</a>
				 			</td>
				 			<td>
				 				<?php if ($_smarty_tpl->tpl_vars['shoe']->value['category'] == 1) {?>单鞋<?php } elseif ($_smarty_tpl->tpl_vars['shoe']->value['category'] == 2) {?>凉鞋 <?php } elseif ($_smarty_tpl->tpl_vars['shoe']->value['category'] == 3) {?>休闲鞋<?php } elseif ($_smarty_tpl->tpl_vars['shoe']->value['category'] == 4) {?> 靴子<?php }?>
				 			</td>
				 			 <td>
				 				<?php echo $_smarty_tpl->tpl_vars['shoe']->value['color'];?>

				 			</td>
				 			<td>
				 				<?php echo $_smarty_tpl->tpl_vars['shoe']->value['create_time'];?>

				 			</td>
				 			<td>
				 				<?php if ($_smarty_tpl->tpl_vars['shoe']->value['status'] == 1) {?> 启用<?php } elseif ($_smarty_tpl->tpl_vars['shoe']->value['status'] == 2) {?>禁用<?php }?>
				 			</td>
				 		</tr>
				 		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				 		<?php } else { ?>
				 		<td colspan="7">
		 						暂无鞋子数据
						</td>
						 <?php }?>
				 	</tbody>
				 </table>
				 <div class="pull-right page-select">
					<div class="total-record">共<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>条记录，每页<span><?php echo $_smarty_tpl->tpl_vars['pageSize']->value;?>
</span>条
			<?php echo $_smarty_tpl->tpl_vars['pager']->value->toHTML();?>

		</div>
				</div>
				</form>
		     </div>
	
<?php echo '<script'; ?>
 type="text/javascript">
function selectAll(){
    var cardChecks = document.getElementsByName("check");
    var b = document.getElementsByName("select");
    if(!b[0].checked){
    	for(var i = 0;i<cardChecks.length;i++){
    		if(cardChecks[i].type == "checkbox"){
    			cardChecks[i].checked = false;
    		}
    	}
    }else{
    	for(var i = 0;i<cardChecks.length;i++){
    		if(cardChecks[i].type == "checkbox"){
    			cardChecks[i].checked = true;
    		}
    	}
    }
}

function editSelect() {
  	if($('input[name="check"]').is(':checked')) {
  		var brandChecks = document.getElementsByName("check");
  		for(var i = 0;i<brandChecks.length;i++){
  			if(brandChecks[i].type == "checkbox" && brandChecks[i].checked == true){
  				var shoes_id = brandChecks[i].value;
  				break;
  			}
  		}
  		window.location.href='/shoes/edit?shoes_id='+shoes_id;
  	}else{
  		alert('请选择品牌！');
  	}
  }

	function search() {
		$('#myform').submit();
	}

	function startUse(){
		if($('input[name="check"]').is(':checked')) {
        	$(".qiyong").css({"display":"block"});
        	
		}else{
			alert('请勾选卡种！');
			return false;
		}
     }


	function stopUse(){
		if($('input[name="check"]').is(':checked')) {
			$(".jinyong").css({"display":"block"});
        	
		}else{
			alert('请勾选卡种！');
			return false;
		}
     }


    function sure(status) {
    	if(status == '1' || status == '2') {
    		var chk_value =[];
    		$('input[name="check"]:checked').each(function() {
    		chk_value.push($(this).val());
    		});	
    		var shoesIds = '';
    		var url ='';
    		if(status == 1) {
    			$(".qiyong").css({"display":"none"});
    			url = "/shoes/enabled";
    		}else {
    			$(".jinyong").css({"display":"none"});
    			url = "/shoes/disable";
    		}
    		
    		for(var i=0;i<chk_value.length;i++){
    			shoesIds += chk_value[i]+',';
    		}

    		$.ajax({
    			type: "POST",
    			url: url,
    			data: {shoesIds:shoesIds},
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
