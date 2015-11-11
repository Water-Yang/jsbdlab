<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="/jsbdlab/Public/css/nav.css" />
	<link rel="stylesheet" href="/jsbdlab/Public/css/index.css" />
	<script src="/jsbdlab/Public/js/jquery.js"></script>
	<script type="text/javascript">
$(document).ready(function(){
	$(".div2").click(function(){ 
		$(this).next("div").slideToggle("slow").siblings(".div3:visible").slideUp("slow");
	});
});
</script>
<style>
	html,body{
		width: 100%;
		height:100%;
	}
	.con{
		width: 100%;
		height: 100%;
	}
</style>
<title>BIGDATA</title>
</head>
<body>
    <div class="con">
		<!-- 导航栏 -->
			<div id="nav" style ="background-image:url(/jsbdlab/Public/images/hd_bg.png)">
				<div id="logo">
				   <img src="/jsbdlab/Public/images/logo.png" alt="" />
				</div>
				<div id="dd">
					<a href="<?php echo U('Admin/Index/logout');?>">注销</a>
				</div>
			</div>
		<!--主体  -->
		<div class="left">
			<div class="div1">
				<div class="left_top">
				<img src="/jsbdlab/Public/images/bbb_01.jpg">
				<img src="/jsbdlab/Public/images/bbb_02.jpg">
				<img src="/jsbdlab/Public/images/bbb_03.jpg">
				<img src="/jsbdlab/Public/images/bbb_04.jpg">
				</div>
				<div class="div2"><div class="xwzx"></div>首页图片</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Lab/addfpic');?>" target="iframe">添加图片</a></li>
						<li><a href="<?php echo U('Admin/Lab/listfpic');?>" target="iframe">标题列表</a></li>
					</ul>
				</div>
				<div class="div2 "><div class="xwzx"></div>图片新闻</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Index/addpicnews');?>" target="iframe">添加新闻</a></li>
						<li><a href="<?php echo U('Admin/Index/listpicnews');?>" target="iframe">新闻列表</a></li>
					</ul>
				</div>
				<div class="div2 "><div class="xwzx"></div>实验室新闻</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Index/addLabNew');?>" target="iframe">添加新闻</a></li>
						<li><a href="<?php echo U('Admin/Index/listLabNew');?>" target="iframe">新闻列表</a></li>
					</ul>
				</div>
				<div class="div2 "><div class="xwzx"></div>实验室图片</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Lab/addlpic');?>" target="iframe">添加图片</a></li>
						<li><a href="<?php echo U('Admin/Lab/listlpic');?>" target="iframe">图片列表</a></li>
					</ul>
				</div>
				<div class="div2 "><div class="xwzx"></div>实验室介绍</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Lab/addlabint');?>" target="iframe">编辑介绍</a></li>
						<li><a href="<?php echo U('Admin/Lab/listlabint');?>" target="iframe">历史记录</a></li>
					</ul>
				</div>
				<div class="div2 "><div class="lmtj"></div>大数据人物</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Index/addBdp');?>" target="iframe">添加人物</a></li>
						<li><a href="<?php echo U('Admin/Index/listBdp');?>" target="iframe">人物列表</a></li>
					</ul>
				</div>
				<div class="div2 "><div class="lmtj"></div>大数据事件</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Index/addEvent');?>" target="iframe">添加事件</a></li>
						<li><a href="<?php echo U('Admin/Index/listEvent');?>" target="iframe">事件列表</a></li>
					</ul>
				</div>
					<div class="div2 "><div class="zxcp"></div>大数据文章</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Index/addActl');?>" target="iframe">添加文章</a></li>
						<li><a href="<?php echo U('Admin/Index/listAtc');?>" target="iframe">文章列表</a></li>
					</ul>
				</div>
				<div class="div2 "><div class="xwzx"></div>招聘信息</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Lab/addempinfo');?>" target="iframe">编辑信息</a></li>
						<li><a href="<?php echo U('Admin/Lab/listemploy');?>" target="iframe">历史记录</a></li>
					</ul>
				</div>
				<div class="div2 "><div class="xwzx"></div>联系方式</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Contact/addcc');?>" target="iframe">添加方式</a></li>
						<li><a href="<?php echo U('Admin/Contact/listcc');?>" target="iframe">历史列表</a></li>
					</ul>
				</div>
				<div class="div2 "><div class="jbsz"></div>成员管理</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Index/addNum');?>" target="iframe">添加成员</a></li>
						<li><a href="<?php echo U('Admin/Index/listNum');?>" target="iframe">成员列表</a></li>
					</ul>
				</div>
				<div class="div2"><div class="xwzx"></div>实验室设备</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Lab/addequ');?>" target="iframe">编辑设备信息</a></li>
					    <li><a href="<?php echo U('Admin/Lab/listequ');?>" target="iframe">设备信息列表</a></li>
					</ul>
				</div>
				<div class="div2"><div class="lmtj"></div>用户设备介绍信息</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Lab/adduinfo');?>" target="iframe"> 设备信息介绍</a></li>
						<li><a href="<?php echo U('Admin/Lab/listuinfo');?>" target="iframe">设备信息介绍列表</a></li>
					</ul>
				</div>
				<div class="div2"><div class="lmtj"></div>密码管理</div>
				<div class="div3">
					<ul>
						<li><a href="<?php echo U('Admin/Lab/repwd');?>" target="iframe"> 修改密码</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="right">
		  <iframe src="" id="iframepage" name="iframe" frameBorder=0 scrolling=no width="100%" onLoad="iFrameHeight()"></iframe>
		</div>
		<script type="text/javascript" language="javascript"> 
		function iFrameHeight() { 
		var ifm= document.getElementById("iframepage"); 
		var subWeb = document.frames ? document.frames["iframepage"].document : ifm.contentDocument; 
		if(ifm != null && subWeb != null) { 
		ifm.height = subWeb.body.scrollHeight; 
		} 
		} 
		</script>
	</div> 
</body>
</html>