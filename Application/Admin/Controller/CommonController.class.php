<?php
namespace  Admin\Controller;
use Think\Controller;

class CommonController extends Controller{
    
 public function  _initialize(){
    $user_name=$_SESSION['username'];
    $user_id=$_SESSION['user_id'];
    $db=M('user')->where(array('id'=>$user_id,'user'=>$user_name))->find();
	if(empty($db)) {
		$this->error('对不起，请先登录!',U('Admin/Login/login'));
	}
}
    
}




?>