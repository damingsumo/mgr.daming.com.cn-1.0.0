<?php
/* Smarty version 3.1.31, created on 2017-11-02 09:35:13
  from "H:\daima\mgr.daming.com.cn-1.0.0\application\views\common\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59fa76515d1109_14448735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dcaf204a438d17a857fdec6cb3ec097e1c2b725' => 
    array (
      0 => 'H:\\daima\\mgr.daming.com.cn-1.0.0\\application\\views\\common\\menu.tpl',
      1 => 1509585907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fa76515d1109_14448735 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['type']->value)) {
$_smarty_tpl->_assignInScope('type', '');
}?>

	<div class="content_fr">
			<div class="ul_fl">
				<ul>
					<li <?php if ($_smarty_tpl->tpl_vars['type']->value == "seller") {?> class="item"<?php }?> onclick ="go_seller()"><div><img src="../assets/images/shang.png">商家管理</div></li>
					<li <?php if ($_smarty_tpl->tpl_vars['type']->value == "brand") {?>class="item" <?php }?> onclick ="go_brand()"><div><img src="../assets/images/pinpai.png">品牌管理</div></li>
					<li <?php if ($_smarty_tpl->tpl_vars['type']->value == "image") {?>class="item" <?php }?> onclick ="go_image()"><div><img src="../assets/images/faxing.png">形象管理</div></li>
					<li <?php if ($_smarty_tpl->tpl_vars['type']->value == "shoes") {?>class="item" <?php }?> onclick ="go_shoes()"><div><img src="../assets/images/xiezi.png">鞋子管理</div></li>
					<li <?php if ($_smarty_tpl->tpl_vars['type']->value == "genre") {?>class="item" <?php }?> onclick ="go_genre()"><div><img src="../assets/images/fenlei1.png">分类管理</div></li>
					<li <?php if ($_smarty_tpl->tpl_vars['type']->value == "user") {?>class="item" <?php }?> onclick ="go_user()"><div><img src="../assets/images/yonghu.png">用户管理</div></li>
					<li <?php if ($_smarty_tpl->tpl_vars['type']->value == "admin") {?>class="item" <?php }?> onclick ="go_admin()"><div><img src="../assets/images/xitong.png">系统管理</div></li>
				</ul>
			</div>

	<?php echo '<script'; ?>
 type="text/javascript">
	function go_seller() {
		window.location.href='/seller/sellerList';
	}
	function go_brand() {
		window.location.href='/brand/brandList';
	}
	function go_admin() {
		window.location.href='/admin/adminList';
	}
	function go_user() {
		window.location.href='/user/userList';
	}
	function go_image() {
		window.location.href='/hair/faceList';
	}
	function go_shoes() {
		window.location.href='/shoes/shoesList';
	}
	function go_genre() {
		window.location.href='/genre/genreList';
	}
	
<?php echo '</script'; ?>
><?php }
}
