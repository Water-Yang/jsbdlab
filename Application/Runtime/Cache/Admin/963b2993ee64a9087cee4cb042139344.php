<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/jsbdlab/Public/css/style.css" />
	<title>BIGDATA</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="/jsbdlab/Public/css/bootstrap.min.css">
    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="/jsbdlab/Public/css/bootstrap-theme.min.css">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="/jsbdlab/Public/js/jquery-2.1.4.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="/jsbdlab/Public/js/bootstrap.min.js"></script>
    <script src = "/jsbdlab/Public/js/jquery.js"></script>
    <link href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<style>
	html ,body{
		height: 100%;
	}
</style>
<script src="/jsbdlab/Public/ueditor/ueditor.config.js"></script>
<script src="/jsbdlab/Public/ueditor/ueditor.all.min.js"></script>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<center>Revise Password</center>
					</div>
					<div class="panel-body">
						<form action="<?php echo U('Admin/Lab/repwdhandle');?>" method="post" role="form" id="ff" onsubmit=" return check()" enctype="multipart/form-data">
					       <div class="form-group">
					        <label> New password：</label>
					        <input type="text" class="form-control" name="password1">
				         	</div>
                  <div class="form-group">
                  <label class="control-label">Repeat Password:</label>
                  <input type="text" class="form-control" name="password2" >
                  </div>
				         	<div class="form-group">
				         		<center><input type="submit" class="btn btn-primary" value="Revise" ></center>
				         	</div>
				        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
 <script type="text/javascript">
 function check(){
     var kk= document.getElementById('ff');
     if(kk.password1.value == ''||kk.password2.value ==''){
     	 var info = ' password cannot be empty!';
       alert(info);
       return false;
     }else{
      if(kk.password1.value != kk.password2.value){
        var info = 'the password you inputed are not same!';
        alert(info);
        return false;
      }
     }
 }
    </script>
</html>