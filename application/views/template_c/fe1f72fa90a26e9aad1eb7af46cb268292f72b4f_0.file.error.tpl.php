<?php
/* Smarty version 3.1.31, created on 2017-08-14 16:34:12
  from "G:\PHP\mgr.daming.cn-1.0.0\application\views\layouts\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_599160846eadb0_98506858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe1f72fa90a26e9aad1eb7af46cb268292f72b4f' => 
    array (
      0 => 'G:\\PHP\\mgr.daming.cn-1.0.0\\application\\views\\layouts\\error.tpl',
      1 => 1502698640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/head.tpl' => 1,
    'file:common/menu.tpl' => 1,
  ),
),false)) {
function content_599160846eadb0_98506858 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>'品牌列表'), 0, false);
?>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
			<div class="detial">
				<div class="false">
				 	<img src="/assets/images/tp-71.png">
				 	<div class="false-item">
				 		<span><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</span>
				    </div>
				    <div class="sub sub3">
		    			<?php if (isset($_smarty_tpl->tpl_vars['url']->value)) {?>
				<button onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'">返回</button>
            <?php } else { ?>
				<button onclick="javascript:history.go(-1);">返回</button>
            <?php }?>
		    	    </div>
				</div>
	       </div>
	 </div>
</body>
</html>
<?php }
}
