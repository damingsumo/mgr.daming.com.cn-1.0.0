{if !isset($nextType)}
{$nextType=''}
{/if}

<div class="top_header">
	<div>
	 <a {if $nextType=="face"} class="link_color" {/if} onclick ="go_face()">脸型管理</a> 
	 <a {if $nextType=="complexion"} class="link_color" {/if} onclick ="go_complexion()">肤色管理</a> 
	 <a {if $nextType=="hairstyle"} class="link_color" {/if} onclick ="go_hairstyle()">发型管理</a> 
	 <a {if $nextType=="haircolor"} class="link_color" {/if} onclick ="go_haircolor()">发色管理</a> 
	</div>
</div>
<script type="text/javascript">
	function go_face() {
		window.location.href='/hair/faceList';
	}
	function go_complexion() {
		window.location.href='/hair/complexionList';
	}
	function go_hairstyle() {
		window.location.href='/hair/hairstyleList';
	}
	function go_haircolor() {
		window.location.href='/hair/haircolorList';
	}
	
</script>