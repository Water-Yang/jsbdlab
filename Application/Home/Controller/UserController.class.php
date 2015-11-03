<?php
namespace Home\Controller;
use Think\Controller;
 class UserController extends Controller{
 	
  public function more(){
    $id = I('id');
    $this->db = M('uinfo')->where(array('active'=>1,'id'=>$id))->find();
    $this->display();
  }
 
 }
?>