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
<link rel="stylesheet" type="text/css" href="/jsbdlab/Public/css/Index/contact.css">
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>
    <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-offset-1 ">
              <ul id="myTab" class="nav nav-tabs" role="tablist">
                  <li class="active"><a href="#bulletin" role="tab" data-toggle="tab">Job Opportunities</a></li>
                  <li><a href="#rule" role="tab" data-toggle="tab">Contact Information</a></li>
              </ul> 
               <!-- 选项卡面板 -->
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane active" id="bulletin">
                     <div class="row">
                        <div class="col-xs-12">
                        <br>
                          <?php echo ($db); ?>
                        </div>
                     </div>
                  </div> 
                  <div class="tab-pane" id="rule">
                    <div class="row">
                       <div class="col-xs-10">
                          <br>
                          <p>&nbsp;&nbsp;<b>Tel</b>&nbsp;:&nbsp;<?php echo ($cc['tel']); ?></p>
                          <br>
                          <p>&nbsp;&nbsp;<b>Email</b>&nbsp;:&nbsp;<?php echo ($cc['email']); ?></p>
                          <br>
                          <p>&nbsp;&nbsp;<b>Address</b>&nbsp;:&nbsp;<?php echo ($cc['address']); ?></p>
                          <br>
                          <hr>
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-xs-10">
                             
                               <div class="map">
                  <body onload="loand()">
                    <div id="cont"></div>
                    <input id="lng" type="hidden" runat="server" />
                    <input id="lat" type="hidden" runat="server" />
                   </body>
                </div>    
                       </div> 
                    </div>
                  </div> 
                </div>  
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
         <script type="text/javascript">
                    function getbiaoji() {
                        var lng = document.getElementByIdx_x("lng").value;
                        var lat = document.getElementByIdx_x("lat").value;
                        var map = new BMap.Map("cont");
                        var point = new BMap.Point(lng, lat);
                        var marker = new BMap.Marker(point);
                        var opts = {
                            width: 50,     // 信息窗口宽度  
                            height: 40,     // 信息窗口高度  
                            title: "address"  // 信息窗口标题  
                        }
                        var infoWindow = new BMap.InfoWindow("move to BIGDATA  address:" + lng + lat, opts);  // 创建信息窗口对象


                        marker.enableDragging(); //启用拖拽
                        map.addControl(new BMap.NavigationControl()); //左上角控件
                        map.enableScrollWheelZoom(); //滚动放大
                        map.enableKeyboard(); //键盘放大

                        map.centerAndZoom(point, 13); //绘制地图
                        map.addOverlay(marker); //标记地图

                        map.openInfoWindow(infoWindow, map.getCenter());
                    }

                    function loand() {
                        var map = new BMap.Map("cont");
                        var point = new BMap.Point(117.19046710254666, 34.24842); //默认中心点
                        var marker = new BMap.Marker(point);
                        var opts = {
                            // width: 230,     // 信息窗口宽度  
                            // height: 20,     // 信息窗口高度  
                            // title: "address"  // 信息窗口标题  
                        }
                        // var infoWindow = new BMap.InfoWindow("BIG DATA LAB", opts);  // 创建信息窗口对象


                        marker.enableDragging(); //启用拖拽
                        marker.addEventListener("dragend", function (e) {
                            point = new BMap.Point(e.point.lng, e.point.lat); //标记坐标（拖拽以后的坐标）
                            marker = new BMap.Marker(point);

                            document.getElementByIdx_x("lng").value = e.point.lng;
                            document.getElementByIdx_x("lat").value = e.point.lat;
                            infoWindow = new BMap.InfoWindow("当前位置<br />经度：" + e.point.lng + "<br />纬度：" + e.point.lat, opts);

                            map.openInfoWindow(infoWindow, point);
                        })

                        map.addControl(new BMap.NavigationControl()); //左上角控件
                        map.enableScrollWheelZoom(); //滚动放大
                        map.enableKeyboard(); //键盘放大

                        map.centerAndZoom(point, 13); //绘制地图
                        map.addOverlay(marker); //标记地图

                        map.openInfoWindow(infoWindow, map.getCenter());      // 打开信息窗口      
                    }        
                    </script>
</html>