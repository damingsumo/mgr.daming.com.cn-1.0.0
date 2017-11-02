<?php
/* Smarty version 3.1.31, created on 2017-11-02 09:40:34
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\brand\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59fa77927c1629_29539456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f550b719709c7018303bb3dec490246d649fb4' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\brand\\list.tpl',
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
function content_59fa77927c1629_29539456 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'形象列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'brand'), 0, false);
?>
 
<div class="detial">
				<ul class="top">
					<li><a href="/brand/goadd"><img src="/assets/images/xinjian.png">新建</a></li>
					<li><a onclick="editSelect()" ><img src="/assets/images/bianji.png">编辑</a></li>
					<li><a onclick="startUse()"><img src="/assets/images/kai.png">开</a></li>
					<li><a onclick="stopUse()"><img src="/assets/images/guan.png">关</a></li>
				</ul>
				<form action="/brand/brandList" id="myform" method="GET">
				<div class="search">
					<input type="text" placeholder="请输入品牌名称" name="value" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)) {
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
				 				品牌名称
				 			</td>
				 			<td>
				 				品牌区域
				 			</td>
				 			<td>
				 				商品数量
				 			</td>
				 			<td>
				 				状态
				 			</td>
				 		</tr>
				 		<?php if (!empty($_smarty_tpl->tpl_vars['brands']->value)) {?>
				 		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
				 		<tr>
				 			<td>
				 				<input name="check" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_id'];?>
">
				 			</td>
				 			<td>
				 				<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_id'];?>

				 			</td>
				 			<td>
				 				<a href="/brand/detail?brand_id=<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value['name'];?>
</a>
				 			</td>
				 			<td>
				 				<?php if ($_smarty_tpl->tpl_vars['brand']->value['region'] == 1) {?> 欧美 <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value['status'] == 2) {?> 中国 <?php } else { ?> 日韩<?php }?>
				 			</td>
				 			<td>
				 			<a href="/goods/goodsList?brand_id=<?php echo $_smarty_tpl->tpl_vars['brand']->value['brand_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value['goodsTotal'];?>
</a>
				 			</td>
				 			<td>
				 				<?php if ($_smarty_tpl->tpl_vars['brand']->value['status'] == 1) {?> 启用<?php } elseif ($_smarty_tpl->tpl_vars['brand']->value['status'] == 2) {?>禁用<?php }?>
				 			</td>
				 		</tr>
				 		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				 	<?php } else { ?>
				 		<td colspan="6">
		 						暂无商家数据
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
		<input type="hidden" id="total" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
"/>
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
  		var brandChecks = document.getElementsByName("check");
  		for(var i = 0;i<brandChecks.length;i++){
  			if(brandChecks[i].type == "checkbox" && brandChecks[i].checked == true){
  				var brand_id = brandChecks[i].value;
  				break;
  			}
  		}
  		window.location.href='/brand/edit?brand_id='+brand_id;
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
    		var brandIds = '';
    		var url ='';
    		if(status == 1) {
    			$(".qiyong").css({"display":"none"});
    			url = "/brand/enabled";
    		}else {
    			$(".jinyong").css({"display":"none"});
    			url = "/brand/disable";
    		}
    		
    		for(var i=0;i<chk_value.length;i++){
    			brandIds += chk_value[i]+',';
    		}

    		$.ajax({
    			type: "POST",
    			url: url,
    			data: {brandIds:brandIds},
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
