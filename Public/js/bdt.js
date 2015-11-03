//大数据的技术文章的ajax的加载
var bdsurl = "{:U('Home/Index/morebds','','')}";
		$('#bds').click(function(){
              $.ajax({
              	url:bdsurl,
	              type:'post',
	              data:{lastid:$('#forum>.tabthree > div:hidden').last().text()},
	              success:function(data){
	              	for(var i = 0;i<data.length;i++){
	              		if(i==0){
	              			$(".tabthree").last().append("<hr>");
	              		}
	              	  $(".tabthree").last().after('<div class="tabthree">'+'<p>'+'<a>'+'<b>'+data[i].title+'</b>'+'</a>'+'</p>'+data[i].content+'<div class="hide">'+data[i].id+'</div>'+'</div>');
	              	  url='http://localhost/jsbdlab/index.php/Home/Index/listAtcOne/id/'+data[i].id;
	              		$(".tabthree").last().children().first().find("a").attr('href',url);
	              	  $('.tabthree').last().children("a").find("a").attr('href',url);	              	 
		          	   if (i < data.length-1) {
		          	  	$(".tabthree").last().append("<hr>");
		          	  }
	              	}
	              }
	          });
		});


//大数据人物的ajax的加载
	var bdcurl = "{:U('Home/Index/morebdc','','')}";
		$('#bdc').click(function(){
              $.ajax({
              	url:bdcurl,
	              type:'post',
	              data:{lastid:$('#bulletin>.tabone > div:hidden').last().text()},
	             
	              success:function(data){

	              	for(var i = 0;i<data.length;i++){
	              	  $(".tabone").last().after('<div class="tabone">'+'<a>'+'<b>'+data[i].bname+'</b>'+'</a>'+'<a>'+data[i].fpara+'</a>'+'<div class="hide">'+data[i].id+'</div>'+'</div>');	      
	              	  url='http://localhost/jsbdlab/index.php/Home/Index/listBdpOne/id/'+data[i].id;
	              	  $('.tabone').last().children('a').attr('href',url);	              	 
		          	   if (i < data.length) {
		          	  	$(".tabone").last().append("<hr>");
		          	  }
	              	}
	              }
	          });
		});
//大数据事件的ajax加载
 var bdeurl = "{:U('Home/Index/morebde','','')}";
		$('#bde').click(function(){
              $.ajax({
              	url:bdeurl,
	              type:'post',
	              data:{lastid:$('#rule>.tabtwo > div:hidden').last().text()},
	              success:function(data){
	              	for(var i = 0;i<data.length;i++){
	              		if(i==0){
	              			$(".tabtwo").last().append("<hr>");
	              		}
	              	  $(".tabtwo").last().after('<div class="tabtwo">'+'<p>'+'<a>'+'<b>'+data[i].title+'</b>'+'</a>'+'</p>'+data[i].content+'<div class="hide">'+data[i].id+'</div>'+'</div>');
	              	  url='http://localhost/jsbdlab/index.php/Home/Index/listevent/id/'+data[i].id;
	              		$(".tabtwo").last().children().first().find("a").attr('href',url);
	              	  $('.tabtwo').last().children("a").find("a").attr('href',url);	              	 
		          	   if (i < data.length-1) {
		          	  	$(".tabtwo").last().append("<hr>");
		          	  }
	              	}
	              }
	          });
		});
