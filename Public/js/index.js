
//弹出人物的介绍
$(document).ready(function(){
       $('.kk').hide();
   $('#hh').mouseover(function(){
      $('.kk').fadeIn(500)
   });
   $('#hh').mouseout(function(){
        $('.kk').fadeOut(500)
   });
});

//验证码刷新
function change_code(obj){
    $("#code").attr("src",verifyURL+'/'+Math.random());
    return false;
}
//弹出登录框
$(function(){
    $(".btn1").click(function(){
       $("#mymodal1").modal("toggle");
        });
    });
//弹出注册框
$(function(){
    $(".btn2").click(function(){
       $("#mymodal2").modal("toggle");
        });
    });


//登录的验证
function check1(){
	var info = '';
	var stats = true;
	var ff = document.getElementById('form1');
	    if(ff.email.value == ''||ff.password.value == ''||ff.verify.value==''){
			if(ff.email.value == ''){
				info += 'email';
				stats = false;
			}
			if(ff.password.value == ''){
				info +=' password';
				stats=false;
			}
			if(ff.verify.value==''){
				info += ' verify'
				stats =false;
			}
			info += '  cannot be empty ！'
		    alert(info);
		}     
	return stats;

}
//注册的验证
function check2(){
  var info = "";
  var st = true;
  var kk = document.getElementById('form2');
  if(kk.email.value == '' || kk.password1.value == '' || kk.password2.value == ''){
  	if(kk.email.value == ''){
  		info += 'email';
  		st = false;
  	}
  	if(kk.password1.value == '' ||kk.password2.value == ''){
  		info += ' password cannot be empty!';
  		st = false;
  	}
  		alert(info);
  		return st;
  }
  if(kk.password1.value != kk.password2.value){
  	info += 'Two input password is not the same ！';
  	alert(info);
  	st = false;
  	return st;
  }

}

