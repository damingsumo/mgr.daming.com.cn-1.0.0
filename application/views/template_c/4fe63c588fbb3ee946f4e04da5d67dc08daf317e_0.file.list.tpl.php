<?php
/* Smarty version 3.1.31, created on 2017-08-17 09:32:55
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\admin\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5994f24752cb30_81311760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fe63c588fbb3ee946f4e04da5d67dc08daf317e' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\admin\\list.tpl',
      1 => 1502933569,
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
function content_5994f24752cb30_81311760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'管理员列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'admin'), 0, false);
?>

	        <div class="detial">
				<ul class="top">
					<li><a href="/admin/goadd"><img src="/assets/images/xinjian.png">新建</a></li>
					<li><a onclick="editSelect()"><img src="/assets/images/bianji.png">编辑</a></li>
					<li><a onclick="startUse()"><img src="/assets/images/kai.png">开</a></li>
					<li><a onclick="stopUse()"><img src="/assets/images/guan.png">关</a></li>
				</ul>
				<form action="/admin/adminList" id="myform" method="GET">
				<div class="search">
					<input type="text" placeholder="请输入管理员姓名" name="value" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)) {
echo $_smarty_tpl->tpl_vars['value']->value;
}?>">
					<input type="button" onclick="search()">
				</div>
				</form>
				 <table class="base-table">
				 	<tbody>
				 		<tr>
				 			<td>
				 				<input name="select" type="checkbox" onclick="selectAll()">
				 			</td>
				 			<td>
				 				ID
				 			</td>
				 			<td>
				 				姓名
				 			</td>
				 			<td>
				 				用户名
				 			</td>
				 			<td>
				 				手机
				 			</td>
				 			<td style="width:15%;">
				 				创建时间
				 			</td>
				 			<td>
				 				状态
				 			</td>
				 		</tr>
				 		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admins']->value, 'admin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
?>
				 		<tr>
				 			<td>
				 				<input name="check" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_id'];?>
">
				 			</td>
				 			<td>
				 				<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_id'];?>

				 			</td>
				 			<td>
				 				<?php echo $_smarty_tpl->tpl_vars['admin']->value['name'];?>

				 			</td>
				 			<td>
				 				<a href="/admin/detail?admin_id=<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['admin']->value['user_name'];?>
</a>
				 			</td>
				 			<td>
				 				<?php echo $_smarty_tpl->tpl_vars['admin']->value['mobile'];?>

				 			</td>
				 			<td>
				 				<?php echo $_smarty_tpl->tpl_vars['admin']->value['create_time'];?>

				 			</td>
				 			<td>
				 				<?php if ($_smarty_tpl->tpl_vars['admin']->value['status'] == 1) {?>启用<?php } elseif ($_smarty_tpl->tpl_vars['admin']->value['status'] == 2) {?>禁用<?php }?>
				 			</td>
				 			 
				 		</tr>
				 		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				 	</tbody>
				 </table>
				 	 <div class="pull-right page-select">
					<div class="total-record">共<span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>条记录，每页<span><?php echo $_smarty_tpl->tpl_vars['pageSize']->value;?>
</span>条
			<?php echo $_smarty_tpl->tpl_vars['pager']->value->toHTML();?>

		</div>
				</div>
			</div>
			
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
  		var adminChecks = document.getElementsByName("check");
  		for(var i = 0;i<adminChecks.length;i++){
  			if(adminChecks[i].type == "checkbox" && adminChecks[i].checked == true){
  				var adminId = adminChecks[i].value;
  				break;
  			}
  		}
  		window.location.href='/admin/edit?admin_id='+adminId;
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
    		var adminIds = '';
    		var url ='';
    		if(status == 1) {
    			$(".qiyong").css({"display":"none"});
    			url = "/admin/enabled";
    		}else {
    			$(".jinyong").css({"display":"none"});
    			url = "/admin/disable";
    		}
    		
    		for(var i=0;i<chk_value.length;i++){
    			adminIds += chk_value[i]+',';
    		}

    		$.ajax({
    			type: "POST",
    			url: url,
    			data: {adminIds:adminIds},
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
