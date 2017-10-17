{if !isset($type)}
{$type=''}
{/if}

	<div class="content_fr">
			<div class="ul_fl">
				<ul>
					<li {if $type=="seller"} class="item"{/if} onclick ="go_seller()"><div><img src="../assets/images/shang.png">商家管理</div></li>
					<li {if $type=="brand"}class="item" {/if} onclick ="go_brand()"><div><img src="../assets/images/pinpai.png">品牌管理</div></li>
					<li {if $type=="image"}class="item" {/if} onclick ="go_image()"><div><img src="../assets/images/faxing.png">形象管理</div></li>
					<li {if $type=="shoes"}class="item" {/if} onclick ="go_shoes()"><div><img src="../assets/images/xiezi.png">鞋子管理</div></li>
					<li {if $type=="genre"}class="item" {/if} onclick ="go_genre()"><div><img src="../assets/images/fenlei1.png">分类管理</div></li>
					<li {if $type=="user"}class="item" {/if} onclick ="go_user()"><div><img src="../assets/images/yonghu.png">用户管理</div></li>
					<li {if $type=="admin"}class="item" {/if} onclick ="go_admin()"><div><img src="../assets/images/xitong.png">系统管理</div></li>
				</ul>
			</div>

	<script type="text/javascript">
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
	
</script>