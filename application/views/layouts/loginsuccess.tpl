<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录失败</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
	<div class="false">
		<img src="/assets/images/correct-70.png">
		<div class="false-item">
			<span>{$msg}</span>
		</div>
		<img src="/assets/images/line.png">
		<div class="sub sub3">
		   		{if isset($url)}
				<button onclick="window.location.href='{$url}'">返回</button>
            {else}
				<button onclick="javascript:history.go(-1);">返回</button>
            {/if}
		</div>
	</div>
</body>
</html>