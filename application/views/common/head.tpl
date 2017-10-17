<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商家管理</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<script src="/assets/js/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/assets/js/common.js"></script>
</head>
<body>
	<div class="header">
		<span class="logo"></span>
		<em>金狐狸服务平台</em>
		<div class="header_right">
			 <span class="infor"></span>
			<span>当前用户： {$_SESSION['user_name']}</span>
			<a href="/index/loginout">退出登录</a>
		</div>
	</div>
	
	<div class="bg qiyong" style="display:none;" id="qiyong"> 
		      <div class="tishi-close"></div>
		      <div class="tishi-text2">确认要启用吗？</div>
		      <div class="tishi-btn">
		         <button onclick="sure(1)">确定<tton>
		         <button class="startfail">取消<tton>
		      </div> 
		</div>
		<div class="bg jinyong" style="display:none;" id="jinyong"> 
		      <div class="tishi-close"></div>
		      <div class="tishi-text2">确认要禁用吗？</div>
		      <div class="tishi-btn">
		         <button  onclick="sure(2)">确定<tton>
		         <button  class="startfail">取消<tton>
		      </div> 
		</div>
		<div class="bg shanchu" style="display:none;"> 
				      <div class="tishi-close"></div>
				      <div class="tishi-text2">确认要删除吗？</div>
				      <div class="tishi-btn">
				         <button  onclick="sure(3)">确定<tton>
				         <button  class="startfail">取消<tton>
				      </div> 
		        </div>