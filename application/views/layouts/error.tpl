
{include file="common/head.tpl" pageTitle='品牌列表'}	
{include file="common/menu.tpl" } 
			<div class="detial">
				<div class="false">
				 	<img src="/assets/images/tp-71.png">
				 	<div class="false-item">
				 		<span>{$msg}</span>
				    </div>
				    <div class="sub sub3">
		    			{if isset($url)}
				<button onclick="window.location.href='{$url}'">返回</button>
            {else}
				<button onclick="javascript:history.go(-1);">返回</button>
            {/if}
		    	    </div>
				</div>
	       </div>
	 </div>
</body>
</html>
