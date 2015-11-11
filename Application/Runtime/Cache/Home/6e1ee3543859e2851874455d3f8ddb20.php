<?php if (!defined('THINK_PATH')) exit();?><link href="/jsbdlab/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<script src="/jsbdlab/Public/js/jquery.min.js"></script>
    <script src="/jsbdlab/Public/js/jquery-2.1.4.min.js"></script>
<link href="/jsbdlab/Public/css/navv.css" rel="stylesheet" type="text/css" media="all" />	
<meta name ="viewport" content ="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<!-- uc浏览器的时候强制竖屏 -->
<meta name="screen-orientation" content="portrait" />
<!-- 360浏览器的时候强制竖屏 -->
<meta name="x5-orientation" content="portrait" />
<link rel="stylesheet" type="text/css" href="/jsbdlab/Public/css/button.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="/jsbdlab/Public/js/responsive.js"></script>
<body> 
<!--header-->
<style>
	.dd{
		border-radius: 6px; 
	}
</style>	
<div class="header navbar-fixed-top" >
	<div class="header-top">
			<div class="head-top">
				<div class="logo">
					<h1><a href="<?php echo U('Home/Index/index');?>"><span><img src="/jsbdlab/Public/images/logo.png">JIANGSU BIG-DATA LAB</span></a></h1>
				</div>
			<div class="top-nav">		
			  <span class="menu"><img src="/jsbdlab/Public/images/dd.png" class="dd"></span>
					<ul>
						<li class="active" ><a href="<?php echo U('Home/Index/index');?>">Home</a></li>
						<li><a href="<?php echo U('Home/Lab/labint');?>">Research</a></li>
						<li><a href="<?php echo U('Home/Index/bdt');?>">Bigdata</a></li>
						<li><a href="<?php echo U('Home/Lab/people');?>">People</a></li>
						<li><a href="<?php echo ($url); ?>"  >Login</a></li>
						<li><a href="<?php echo U('Home/Lab/contact');?>">Contact Us</a></li>
						<div class="clearfix"> </div>
					</ul>
			</div>
		</div>
	</div>
</div>
<!-- header -->
<script>
		$("span.menu").click(function(){
			$(".top-nav ul").slideToggle(500, function(){
			});
		});

</script>



  <title>BIGDATA</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="/jsbdlab/Public/css/bootstrap.min.css">
    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="/jsbdlab/Public/js/jquery-2.1.4.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="/jsbdlab/Public/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/jsbdlab/Public/css/Index/style.css">
<link rel="stylesheet" type="text/css" href="/jsbdlab/Public/css/index.css">
<link rel="stylesheet" type="text/css" href="/jsbdlab/Public/css/font-awesome.min.css">

    <div class="container">
        <div class="row">
	        <div class="col-md-7 col-md-offset-1 ">
	        	 <center><h4><?php echo ($scienceAtc['title']); ?></h4></center>
                  <div>
                       <?php echo ($scienceAtc['content']); ?>

                  </div>
                <center>
                        <a href="<?php echo U('Home/BigData/atcpre',array('id'=>$scienceAtc['id']));?>" class="button  button-border button-rounded button-primary button-tiny">Prev</a>
                        <a href="<?php echo U('Home/BigData/listAtcTitle');?>" class="button  button-border button-rounded button-primary button-tiny">More</a>
                        <a href="<?php echo U('Home/BigData/atcnext',array('id'=>$scienceAtc['id']));?>" class="button  button-border button-rounded button-primary button-tiny">Next</a>
                    </center>  
            </div>
             <div class="col-md-3">
              <div class="row">
                  <div class="col-md-12">
                     <div class="top_img">
                      <img src="/jsbdlab/Uploads/<?php echo ($fpic['pathname']); ?>" class="img-response fix_img">
                     </div>
                  </div>
              </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="news-top"> 
                       <br>              
                       <p><span class="glyphicon glyphicon-tags" ></span>&nbsp;&nbsp; Update news</h5></p>
                       <hr style="width:90%;margin-left:0px; margin-top:5px;border:1px solid #e9e9e9;">  
                    </div>
                  </div>
               </div>
                <div class="row">
                  <ol class="news-list">
                  <li>1 .<a href="<?php echo U('Home/BigData/listAtcOne',array('id'=>$satc[0]['id']));?>">
                  <?php echo ($satc[0]['title']); ?></a></li>
                  <hr style="width:90%;border:1px solid #e9e9e9;margin-left:0px;">
                  <li>2 .<a href="<?php echo U('Home/Lab/oneLabNews',array('id'=>$labnews[0]['id']));?>"><?php echo ($labnews[0]['lntitle']); ?></a></li>
                  <hr style="width:90%;border:1px solid #e9e9e9;margin-left:0px;"> 
                  <li>3 .<a href="<?php echo U('Home/BigData/listevent',array('id'=>$event[0]['id']));?>"><?php echo ($event[0]['title']); ?> </a></li>
               </ol>
                   <hr style="width:80%;border:1px solid #e9e9e9;margin-left:20px;"> 
                </div>
               <div class="row">
                      <a href="<?php echo U('Home/Lab/picnews',array('id'=>$pp[0]['id']));?>"><img src="/jsbdlab/Uploads/<?php echo ($pp[0]['pathname']); ?>" class="img-response newspic"></a>
                     <a href="<?php echo U('Home/Lab/picnews',array('id'=>$pp[1]['id']));?>"><img src="/jsbdlab/Uploads/<?php echo ($pp[1]['pathname']); ?>" class="img-response newspic"></a>
               </div>                 
            </div>
        </div>	   
    </div>
     
 <div class="footer">
        	 	 <br>
	            <center><a href="http://www.xznu.edu.cn/" target="_blank">Jiangsu Normal University</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://maths.xznu.edu.cn/">School of Mathematics and Statistics</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://heckman.uchicago.edu/" target="_blank"> The University of Chicago</a>
	            </center>
	            <center><p>Copyright&copy;2015 JSBD reserved All Right</p></center>        
    </div>
</body>
</html>