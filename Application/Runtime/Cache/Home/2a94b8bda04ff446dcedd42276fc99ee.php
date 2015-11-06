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
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="/jsbdlab/Public/js/jquery-2.1.4.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="/jsbdlab/Public/js/bootstrap.min.js"></script>
    <script src="/jsbdlab/Public/js/index.js"></script>
    <link rel="stylesheet" type="text/css" href="/jsbdlab/Public/css/Index/index.css">
    <link rel="stylesheet" type="text/css" href="/jsbdlab/Public/css/Index/size.css !important">
    <link rel="stylesheet" href="/jsbdlab/Public/css/button.css">
    <link rel="stylesheet" href="/jsbdlab/Public/css/font-awesome.min.css">
    <link href="/jsbdlab/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
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



    <div class="container">
       <div class="row">
            <div class="col-md-8 ">
                <!--第一屏实验室简介-->
                  <div class="panel panel-default">
                        <div id="myCarousel" class="carousel slide">
                            <!-- 轮播（Carousel）指标 -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- 轮播（Carousel）项目 -->
                            <div class="carousel-inner">
                                <div class="item active" >
                                      <?php if($phone == 1): ?><img  src="/jsbdlab/Uploads/<?php echo ($fpic['pathname']); ?>" style="max-width:100%;min-width:100%;max-height:100%;min-height:58.3%;" title="<?php echo ($fpic['title']); ?>" >
                                            <div class="carousel-caption"><?php echo ($fpic['title']); ?></div>
                                      <?php else: ?>
                                            <img  src="/jsbdlab/Uploads/<?php echo ($fpic['pathname']); ?>" style="max-width:100%;min-width:100%;max-height:100%;min-height:100%;" title="<?php echo ($fpic['title']); ?>" >
                                            <div class="carousel-caption"><?php echo ($fpic['title']); ?></div><?php endif; ?>
                                            
                                </div>
                                <div class="item">
                                   <?php if($phone == 1): ?><a href="<?php echo U('Home/Lab/picnews',array('id'=>$pic[0]['id']));?>" target='_blank'><img src="/jsbdlab/Uploads/<?php echo ($pic[0]['pathname']); ?>" alt="<?php echo ($pic[0]['ptitle']); ?>" title="<?php echo ($pic[0]['ptitle']); ?>"style="max-width:100%;min-width:100%;max-height:100%;min-height:58.3%;" /></a>
                                    <div class="carousel-caption"><?php echo ($pic[0]['ptitle']); ?></div>
                                   <?php else: ?>
                                        <a href="<?php echo U('Home/Lab/picnews',array('id'=>$pic[0]['id']));?>" target='_blank'><img src="/jsbdlab/Uploads/<?php echo ($pic[0]['pathname']); ?>" alt="<?php echo ($pic[0]['ptitle']); ?>" title="<?php echo ($pic[0]['ptitle']); ?>"style="max-width:100%;min-width:100%;max-height:100%;min-height:100%;" /></a>
                                    <div class="carousel-caption"><?php echo ($pic[0]['ptitle']); ?></div><?php endif; ?>
                                </div>
                                <div class="item">
                                   <?php if($phone == 1): ?><a href="<?php echo U('Home/Lab/picnews',array('id'=>$pic[1]['id']));?>" target='_blank' ><img src="/jsbdlab/Uploads/<?php echo ($pic[1]['pathname']); ?>"  style="max-width:100%;min-width:100%;max-height:100%;min-height:58.3%;" alt="<?php echo ($pic[1]['ptitle']); ?>" title="<?php echo ($pic[1]['ptitle']); ?>" /></a>
                                        <div class="carousel-caption"><?php echo ($pic[1]['ptitle']); ?></div>
                                   <?php else: ?>
                                        <a href="<?php echo U('Home/Lab/picnews',array('id'=>$pic[1]['id']));?>" target='_blank' ><img src="/jsbdlab/Uploads/<?php echo ($pic[1]['pathname']); ?>"  style="max-width:100%;min-width:100%;max-height:100%;min-height:100%;" alt="<?php echo ($pic[1]['ptitle']); ?>" title="<?php echo ($pic[1]['ptitle']); ?>" /></a>
                                       <div class="carousel-caption"><?php echo ($pic[1]['ptitle']); ?></div><?php endif; ?> 
                                </div>
                            </div>
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                  </div>
             </div>
             <div class="col-md-4">
             <!-- 实验室新闻 -->
               <div class=" panel panel-primary">
                 <div class="panel-heading">
                    <p><i class="glyphicon glyphicon-flag ico"></i>&nbsp;Laboratory News</p>
                 </div>
                 <ol class="list-group">
                    <?php if(is_array($labnews)): foreach($labnews as $key=>$ln): ?><li class=" labnews">
                         <div class="row">
                            <div class="col-xs-1">
                              <i class="glyphicon glyphicon-send icot"></i>
                            </div>
                            <div class='col-xs-10'>
                               <div style="height:5px;"></div>
                              <a href="<?php echo U('Home/Lab/oneLabNews',array('id'=>$ln['id']));?>" target='_blank'><?php echo ($ln['lntitle']); ?></a>
                            </div>  
                         </div>
                     </li><?php endforeach; endif; ?>
                   <li class="labb" style="border:0px solid white;">
                   <br>
                       <a href="<?php echo U('Home/Lab/listLabNews');?>" target='_blank'>&nbsp;&nbsp;More</a>
                  </li>
                </ol>
              </div>
          </div>
        </div>  
 <!-- 实验室的简介 -->
        <div class="row">
            <div class="col-md-12">
              <div class =" panel panel-default">
                <!-- <div class="panel-heading" style="background:;" > 
                      <p><i class="glyphicon glyphicon-home ico"></i>&nbsp;&nbsp;Introduction to laboratory </p>
                </div> -->
                <div class="panel-body">
                     <div class="col-md-6 ">
                       <img src="/jsbdlab/Uploads/<?php echo ($lpic['pathname']); ?>" class="img-responsive labpic">
                    </div>
                    <div class="col-md-6" style="padding:8px;border-radius:4px;">
                      <p><h4 ><span style="color:#337Ab7;"><i class="glyphicon glyphicon-home ico" ></i>&nbsp;&nbsp;Introduction to laboratory</span></h4></p>
                        <p style="font-size: 14px;"><?php echo ($labint); ?>    ...
                           [<a href="<?php echo U('Home/Lab/labint');?>" style="color:#337Ab7;">More</a>]
                        </p>
                    </div>
                </div>    
            </div>
        </div>
        </div>
<!-- 实验室的bigdata -->
       <div class="row ">
          <div class="col-md-4">
              <div class=" panel panel-primary">
                 <div class="panel-heading">
                    <p ><span class="glyphicon glyphicon-user " style="margin-top: 6px;"></span>&nbsp;Big-Data Scholars</p>
                 </div>
                 <ul class="list-group">
                   <?php if(is_array($bdp)): foreach($bdp as $key=>$bdpo): ?><li class=" labnews">
                           <div class="row">
                              <div class="col-xs-1">
                                <i class="glyphicon glyphicon-send icot"></i>
                              </div>
                              <div class='col-xs-10'>
                                   <div style="height:5px;"></div>
                                    <a href="<?php echo U('Home/BigData/listbdpone',array('id'=>$bdpo['id']));?>" target='_blank'><b><?php echo ($bdpo['bname']); ?></b></a>
                                   <br>
                                 <a href="<?php echo U('Home/BigData/listbdpone',array('id'=>$bdpo['id']));?>" target='_blank'><?php echo ($bdpo['fpara']); ?></a>
                              </div>  
                           </div>
                     </li><?php endforeach; endif; ?>
                <li class="labb" style="border:0px solid white">
                   <br>
                       <a href="<?php echo U('Home/BigData/listbdp');?>" target='_blank'>&nbsp;&nbsp;More</a>
                     </li>
                  </ul>
               </div>
          </div>
          <div class="col-md-4">
              <div class=" panel panel-primary">
                 <div class="panel-heading">
                    <p><span class="glyphicon glyphicon-list-alt " style="margin-top: 6px;"></span>
                    &nbsp;Big-Data Events</p>
                 </div>
                 <ul class="list-group">
                    <?php if(is_array($event)): foreach($event as $key=>$kk): ?><li class=" labnews">
                           <div class="row">
                              <div class="col-xs-1">
                                   <i class="glyphicon glyphicon-send icot"></i> 
                                 </div>
                                 <div class="col-xs-10">
                                 <div style="height:5px;"></div>
                                   <a href="<?php echo U('Home/BigData/listevent',array('id'=>$kk['id']));?>" target='_blank'><?php echo ($kk['title']); ?></a>
                                 </div>
                           </div>
                     </li><?php endforeach; endif; ?>
                    <li class="labb" style="border:0px solid white">
                       <br>
                           <a href="<?php echo U('Home/BigData/events');?>" target='_blank'>&nbsp;&nbsp;More</a>
                    </li>
                  </ul>
               </div>
          </div>
           <div class="col-md-4">
              <div class=" panel panel-primary">
                 <div class="panel-heading">
                     <p><span class='glyphicon glyphicon-book ' style='margin-top:6px;'></span>&nbsp;Big-Data Articles</p>
                 </div>
                 <ul class="list-group">
                     <?php if(is_array($satc)): foreach($satc as $key=>$artic): ?><li class=" labnews">
                          <div class="row">
                            <div class="col-xs-1">
                                <i class="glyphicon glyphicon-send icot"></i>
                            </div>
                            <div class="col-xs-10">
                              <div style="height:5px;"></div>
                              <a href="<?php echo U('Home/BigData/listAtcOne',array('id'=>$artic['id']));?>" target='_blank'><?php echo ($artic['title']); ?></a>
                            </div>
                         </div>
                     </li><?php endforeach; endif; ?>
                      <li class="labb" style="border:0px solid white">
                        <br>
                        <a href="<?php echo U('Home/BigData/listAtcTitle');?>" target='_blank'>&nbsp;&nbsp;More</a>
                     </li>
                  </ul>
               </div>
          </div>              
      </div>
      <!-- 用户信息 -->
       <div class="row">
           <div class="col-md-12" >
               <div class=" panel  panel-default">
                    <!-- <div class="panel-heading">
                      <p><i class="glyphicon glyphicon-hand-right ico"></i>&nbsp;&nbsp;Laboratory Equipment</p>
                    </div> -->
                    <div class="panel-body"> 
                        <div class="row ">
                       <div class="col-md-7">
                           <h4><span style="color:#337Ab7;">Lab Equipment </span></h4>
                           <div class="clearfix"></div>
                           <span style="font-size: 15px;">
                             <?php echo ($eq); ?>
                           </span>
                          [<a href="<?php echo U('Home/Lab/equ',array('id'=>$eid));?>" style="color:#337Ab7;">More</a>]

                       </div>
                       <div class="col-md-5">
                                 <h4><span style="color:#337Ab7;">User Guideline </span></h4>
                                 <div class="clearfix"></div>
                                 <p style="font-size: 15px;" >
                                     <?php echo ($uinfo); ?>
                                  [<a href="<?php echo U('Home/Lab/uinfo',array('id'=>$uid));?>"  style="disabled:disabled;color:#337Ab7;">More</a>]
                                 [<a href="<?php echo ($url); ?>" role="button" style="disabled:disabled;color:#337Ab7;">Login</a>]
                        </div>
                    </div>
                    </div>
                  
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
<script>
//图片的轮播导航
$('.carousel').carousel({
  interval: 10000,
});
//文章的轮播
$('.carousel1').carousel({
  interval: 10000
});
</script>
</html>