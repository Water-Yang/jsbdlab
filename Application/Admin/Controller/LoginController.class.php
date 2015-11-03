<?php

namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
  //登录
  public function login(){
    $this->display();
  }

//登录处理
  public function loginHandle(){
     $username=$_POST['username'];
     $password=$_POST['password'];
     $db=M('user')->where(array('user'=>$username))->find();
     if(empty($db)){
        $this->error('Illeage User!',U('Admin/Login/login'));
     }else{
          $num1=$db['num1'];
          $num2= $db['num2'];
          $psd = md5($num1.md5($password).$num2.md5($username));

          if($psd==$db['psd']){
               session('username',$username);
               session('user_id',$db['id']);   
              $this->redirect('Admin/Index/index');
          }else{
            $this->error('wrong password!',U('Admin/Login/login'));

          }
     }

  }

}


?>