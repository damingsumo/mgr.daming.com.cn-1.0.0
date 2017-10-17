<?php
/* Smarty version 3.1.31, created on 2017-09-22 14:36:12
  from "D:\phpStudy\WWW\mgr.daming.cn-1.0.0\application\views\brand\goods\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c4af5cc4aef4_14691459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '023b47ddaacbd1a0e2e520c432f6c873994f20ca' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\mgr.daming.cn-1.0.0\\application\\views\\brand\\goods\\list.tpl',
      1 => 1503902276,
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
function content_59c4af5cc4aef4_14691459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'用户列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'brand'), 0, false);
?>

		    <div class="top_header">
			     <span>商品列表</span>
	        </div>
		    <div class="detial  detial1">
	 		
				<ul class="top">
					<li><a href="/goods/goadd?brand_id=<?php echo $_smarty_tpl->tpl_vars['brand_id']->value;?>
"><img src="/assets/images/xinjian.png">新建</a></li>
					<li><a onclick="editSelect()"><img src="/assets/images/bianji.png">编辑</a></li>
					<li><a onclick="startUse()"><img src="/assets/images/kai.png">开</a></li>
					<li><a onclick="stopUse()"><img src="/assets/images/guan.png">关</a></li>
				</ul>
				<form action="/goods/goodsList?brand_id=<?php echo $_smarty_tpl->tpl_vars['brand_id']->value;?>
" id="myform" method="GET">
				<input type="hidden" name="brand_id" value="<?php echo $_smarty_tpl->tpl_vars['brand_id']->value;?>
">
				<div class="search">
					<input type="text" placeholder="请输入商品名称" name="value" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)) {
echo $_smarty_tpl->tpl_vars['value']->value;
}?>">
					<input type="button" onclick="search()">
				</div>
				<table class="base-table ">
				 	<tbody>
				 		<tr id="table_color"> 
				 			<td >
				 				<input name="select" type="checkbox" onclick="selectAll()">
				 			</td>
				 			<td>
				 				ID
				 			</td>
				 			<td>
				 				商品名称
				 			</td>
				 			<td>
				 				品牌名
				 			</td>
				 			<td>
				 				类型
				 			</td>
				 			<td>
				 				分类
				 			</td>
				 			<td>
				 				状态
				 			</td>
				 			<td>
				 				价格
				 			</td>
				 		</tr>
				 		<?php if (!empty($_smarty_tpl->tpl_vars['goodss']->value)) {?>
				 		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodss']->value, 'goods');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->value) {
?>
				 		<tr>
				 			<td>
				 				<input name="check" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['gid'];?>
">
				 			</td>
				 			<td>
				 				<?php echo $_smarty_tpl->tpl_vars['goods']->value['gid'];?>

				 			</td>
				 			<td>
				 			<a href="/goods/detail?gid=<?php echo $_smarty_tpl->tpl_vars['goods']->value['gid'];?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</a>
				 			</td>
				 			<td>
				 			<?php echo $_smarty_tpl->tpl_vars['goods']->value['brand_name'];?>

				 			</td>
				 			<td>
				 			<?php if ($_smarty_tpl->tpl_vars['goods']->value['genre']['category'] == 1) {?>上衣<?php } elseif ($_smarty_tpl->tpl_vars['goods']->value['genre']['category'] == 2) {?>裤子<?php } elseif ($_smarty_tpl->tpl_vars['goods']->value['genre']['category'] == 4) {?>套装<?php } elseif ($_smarty_tpl->tpl_vars['goods']->value['genre']['category'] == 3) {?>裙装<?php }?>
				 			</td>
				 			<td>
				 			<?php echo $_smarty_tpl->tpl_vars['goods']->value['genre']['name'];?>

				 			</td>
				 			<td>
				 			<?php if ($_smarty_tpl->tpl_vars['goods']->value['status'] == 1) {?> 上架<?php } elseif ($_smarty_tpl->tpl_vars['goods']->value['status'] == 2) {?> 下架<?php }?>
				 			</td>
				 			<td>
				 			<?php echo $_smarty_tpl->tpl_vars['goods']->value['price']/100;?>
元
				 			</td>
				 		</tr>
				 		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				 <?php } else { ?>
				 <td colspan="8">
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
				</form>
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
  		var goodsChecks = document.getElementsByName("check");
  		for(var i = 0;i<goodsChecks.length;i++){
  			if(goodsChecks[i].type == "checkbox" && goodsChecks[i].checked == true){
  				var gid = goodsChecks[i].value;
  				break;
  			}
  		}
  		window.location.href='/goods/edit?gid='+gid;
  	}else{
  		alert('请选择商品！');
  	}
  }

	function search() {
		$('#myform').submit();
	}

	function startUse(){
		if($('input[name="check"]').is(':checked')) {
        	$(".qiyong").css({"display":"block"});
        	
		}else{
			alert('请勾选商品！');
			return false;
		}
     }


	function stopUse(){
		if($('input[name="check"]').is(':checked')) {
			$(".jinyong").css({"display":"block"});
        	
		}else{
			alert('请勾选商品！');
			return false;
		}
     }


    function sure(status) {
    	if(status == '1' || status == '2') {
    		var chk_value =[];
    		$('input[name="check"]:checked').each(function() {
    		chk_value.push($(this).val());
    		});	
    		var gids = '';
    		var url ='';
    		if(status == 1) {
    			$(".qiyong").css({"display":"none"});
    			url = "/goods/enabled";
    		}else {
    			$(".jinyong").css({"display":"none"});
    			url = "/goods/disable";
    		}
    		
    		for(var i=0;i<chk_value.length;i++){
    			gids += chk_value[i]+',';
    		}

    		$.ajax({
    			type: "POST",
    			url: url,
    			data: {gids:gids},
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
