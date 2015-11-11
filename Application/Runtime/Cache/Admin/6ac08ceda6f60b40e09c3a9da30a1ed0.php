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
    html,body{
        height: 100%;
        width: 100%;
    }
</style>
<script src="/jsbdlab/Public/ueditor/ueditor.config.js"></script>
<script src="/jsbdlab/Public/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript">
        //下面用于多图片上传预览功能
        function setImagePreviews(avalue) {
            var docObj = document.getElementById("doc");
            var dd = document.getElementById("dd");
            dd.innerHTML = "";
            var fileList = docObj.files;
            for (var i = 0; i < fileList.length; i++) {
                dd.innerHTML += "<div style='float:left' > <img id='img" + i + "'  /> </div>";
                var imgObjPreview = document.getElementById("img"+i);
                if (docObj.files && docObj.files[i]) {
                    //火狐下，直接设img属性
                    imgObjPreview.style.display = 'block';
                    imgObjPreview.style.width = '';
                    imgObjPreview.style.height = '';
                    //imgObjPreview.src = docObj.files[0].getAsDataURL();
                    //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
                    imgObjPreview.src = window.URL.createObjectURL(docObj.files[i]);
                }
                else {
                    //IE下，使用滤镜
                    docObj.select();
                    var imgSrc = document.selection.createRange().text;
                    alert(imgSrc)
                    var localImagId = document.getElementById("img" + i);
                    //必须设置初始大小
                    localImagId.style.width = "150px";
                    localImagId.style.height = "180px";
                    //图片异常的捕捉，防止用户修改后缀来伪造图片
                    try {
                        localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
                        localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
                    }
                    catch (e) {
                        alert("您上传的图片格式不正确，请重新选择!");
                        return false;
                    }
                    imgObjPreview.style.display = 'none';
                    document.selection.empty();
                }
            }
            return true;
        }
    </script>
<body>
 <div class＝"container">
   <div class="row">
       <div class="col-md-1"></div>
       <div class="col-md-8">
           <div class="panel panel-primary">
               <div class="panel-heading">
                   <center>Add First Page Picture</center>
               </div>
               <div class="panel-body">
                   <form action="<?php echo U('Admin/Lab/addfpichandle');?>" method="post" role="form" id="ff" onsubmit=" return check()" enctype="multipart/form-data">
                       <div class="form-group">
                           <label>Title</label>
                           <input  type="text" class="form-control" name="tit">
                       </div>
                       <div class="form-group" >
                           <label>Upload Picture(750x395px)</label>
                           <div class="row">
                                <input type="file"  name="photo" id="doc" multiple="multiple"  style="width:300px;margin-left:20px;" onchange="javascript:setImagePreviews();" accept="image/*" />
                           </div>
                          
                       </div>
                       <div class="form-group">
                           <center><input type="submit" class="btn btn-primary" value="Submit"  id="Add"></center>
                       </div>
                   </form>
               </div>
           </div>
       </div>
       <div class="col-md-1"></div>
   </div>
   <div class="row">
     <div class="col-md-1"></div>
         <div class="col-md-8">
             <div id="dd" style=" width:700px;height:500px ;"></div>
         </div>
     <div class="col-md-1"></div>
   </div>
 </div>
</body>
</html>
<script>
    function check(){
        var kk  = document.getElementById('ff');
        info = '';
        var stats = true;
        if(kk.tit.value== ''||kk.photo.value==''){
            if(ff.tit.value==''){
                info += ' Title';
                stats = false;
            }
            if(ff.photo.value==''){
                info += ' Picture';
                stats = false;
            }
            info += ' can not be empty!';
            alert(info);
            return stats;
        }else{
            return stats;
        }
    }

</script>