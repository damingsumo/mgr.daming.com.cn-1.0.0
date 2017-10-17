<?php
/* Smarty version 3.1.31, created on 2017-08-30 16:30:42
  from "D:\phpStudy\WWW\mgr.daming.cn-1.0.0\application\views\genre\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a677b22d98e4_70631161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '670af5749b2525deeb068605d42c10898eb636a6' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\mgr.daming.cn-1.0.0\\application\\views\\genre\\list.tpl',
      1 => 1504081839,
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
function content_59a677b22d98e4_70631161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'分类列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>'genre'), 0, false);
?>
    
			<div class="detial">
				<ul class="top">
					<li><a href="/genre/goAdd" class=""><img src="/assets/images/xinjian.png">新建</a></li>
					<li><a onclick="startUse()" class=""><img src="/assets/images/kai.png">开</a></li>
					<li><a onclick="stopUse()" class=""><img src="/assets/images/guan.png">关</a></li>
					<li><a onclick="deteleUse()" class=""><img src="/assets/images/shanchu.png">删除</a></li>
				</ul>
            
				<form action="/genre/genreList" id="myform" method="GET">
				<div class="search  search1">
					<input type="text" placeholder="请输入分类名称" name="value" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)) {
echo $_smarty_tpl->tpl_vars['value']->value;
}?>">
					<em>类别：</em>
					<select name="category">
						<option  selected  value="0">请选择</option>
						<option <?php if ((isset($_smarty_tpl->tpl_vars['category']->value) && $_smarty_tpl->tpl_vars['category']->value == 1)) {?> selected <?php }?> value="1">上装</option>
						<option <?php if ((isset($_smarty_tpl->tpl_vars['category']->value) && $_smarty_tpl->tpl_vars['category']->value == 2)) {?> selected <?php }?> value="2">裤装</option>
						<option <?php if ((isset($_smarty_tpl->tpl_vars['category']->value) && $_smarty_tpl->tpl_vars['category']->value == 3)) {?> selected <?php }?> value="3">裙装</option>
						<option <?php if ((isset($_smarty_tpl->tpl_vars['category']->value) && $_smarty_tpl->tpl_vars['category']->value == 4)) {?> selected <?php }?> value="4">套装</option>
					</select>
					<input type="button" onclick="search()">
				</div>
				<div class="hair">
				<?php if (empty($_smarty_tpl->tpl_vars['genres']->value)) {?>
					<div class="data">
						暂无数据
					</div>
					<?php } else { ?>
					<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'genre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
?>
						<li class="hair_border">
							<div class="hair_color"> 
								<img src="<?php echo $_smarty_tpl->tpl_vars['genre']->value['picture_url'];?>
">
								<div>
									<span><?php echo $_smarty_tpl->tpl_vars['genre']->value['name'];?>
</span>
								</div>
								 <input name="check"  type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['genre']->value['genre_id'];?>
">
								 <span class="state"><?php if ($_smarty_tpl->tpl_vars['genre']->value['status'] == 1) {?>启用<?php } elseif ($_smarty_tpl->tpl_vars['genre']->value['status'] == 2) {?>禁用<?php }?></span>
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
			alert('请选择脸型！');
			return false;
		}
     }


	function stopUse(){
		if($('input[name="check"]').is(':checked')) {
			$(".jinyong").css({"display":"block"});
        	
		}else{
			alert('请选择脸型！');
			return false;
		}
     }
	function deteleUse(){
		if($('input[name="check"]').is(':checked')) {
			$(".shanchu").css({"display":"block"});
        	
		}else{
			alert('请选择脸型！');
			return false;
		}
     }
	
	function search() {
		$('#myform').submit();
	}


    function sure(status) {
    	if(status == '1' || status == '2'|| status == '3') {
    		var chk_value =[];
    		$('input[name="check"]:checked').each(function() {
    		chk_value.push($(this).val());
    		});	
    		var genreIds = '';
    		var url ='';
    		if(status == 1) {
    			$(".qiyong").css({"display":"none"});
    			url = "/genre/enabled";
    		}else if(status == 2){
    			$(".jinyong").css({"display":"none"});
    			url = "/genre/disable";
    		}else{
    			$(".shanchu").css({"display":"none"});
    			url = "/genre/detele";

    		}
    		
    		for(var i=0;i<chk_value.length;i++){
    			genreIds += chk_value[i]+',';
    		}

    		$.ajax({
    			type: "POST",
    			url: url,
    			data: {genreIds:genreIds},
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
