<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BIGDATA</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="/jsbdlab/Public/css/bootstrap.min.css">
    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="/jsbdlab/Public/css/bootstrap-theme.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="/jsbdlab/Public/js/jquery-2.1.4.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="/jsbdlab/Public/js/bootstrap.min.js"></script>
</head>
<style>
	*{
		padding:0px;
		margin:0px;
	}
	html ,body{
		width: 100%;
		height: 100%;
	}
	.con{
		width: 100%;
		height: 100%;
		background:url(/jsbdlab/Public/images/bg.jpg) 0 0 no-repeat;
		background-size: 100% 100%;
	}
	.container{
		background: white;
	}
	.col-one{
		background: white;
		margin-top: 20%;
		border-radius: 10px;
	}
</style>
<body>
<div class="con">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-3 col-one">
        	    <form action="<?php echo U('Admin/Login/loginHandle');?>" class='form-signin' role='form' method="post">
                    <h4 class='form-signin-heading'><center>Log in</center></h4>
                    <input type='text' class='form-control' placeholder='username' name="username" required autofocus>
                    <div style='height:10px;clear:both;display:block'></div>
                    <input type='password' class='form-control' placeholder='password'name="password" required>
                   <div class='checkbox'>
	                   <!-- <label>
	                    <input type='checkbox' name="remember"> Rember me
	                   </label> -->
                   </div>
                    <button class='btn btn-lg btn-primary btn-block' type='submit'>Login</button>
                    <br>
                </form>           	
            </div>
            <div class="col-md-1"></div>
        </div>
</div>
</body>
</html>