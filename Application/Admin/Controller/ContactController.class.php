<?php
namespace  Admin\Controller;
use Think\Controller;

class ContactController extends CommonController{
	//添加联系方式
   public function addcc(){
	   $this->display();
	}	
	public function addcchandle(){
	   	$db = M('con');
	   	$db->create();
	   	$db->add();
	   	if($db){
	   		$this->success('添加成功！',U('Admin/Contact/listcc'));
	   	}else{
	        $this->error('添加失败');
	   	}
   }
    public function listcc(){
	    $count=M('con')->count();
	    // 导入分页类
	    import('ORG.Util.Page');
	    //传入总页数和每页显示的数目
	    $page= new \Think\Page($count,10);
	    $limit = $page->firstRow.','.$page->listRows; 
	    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
	    $member=M('con')->order('id desc')->limit($limit)->select();
	    $this->db = $member;
		$this->page = $page->show();
	    $this->display();
    }
    public function acc(){
    	 $id = I('id');
	     $arr = array('active'=>1);
	     $db = M('con')->where(array('id'=>$id))->find();
	     if($db['active']==0){
	     $db = M('con')->where(array('id'=>$id))->save($arr);
	      if($db){
	        $this->success('发表成功！',U('Admin/Contact/listcc'));
	      }else{
	        $this->error('发表失败！');
	      }
	    }else{
	      $this->error('已经发表了！',U('Admin/Contact/listcc'));
	    }
    }
   public function recc(){
      $id = I('id');
      $db = M('con')->where(array('id'=>$id))->find();
      $this->db = $db;
   	  $this->display();
   }

   public function recchandle(){
   	   $id = $_GET['id'];
   	   $arr =array(
          'tel' =>I('tel'),
          'email'=>I('email'),
          'address'=>I('address'),
          'lanme' =>I('time'),
          'lname'=>I('lname')
   	   	);
   	   $db = M('con')->where(array('id'=>$id))->save($arr);
   	   if($db){
   	   	  $this->success('修改成功！',U('Admin/Contact/listcc'));
   	   }else{
          $this->error('修改失败');   
   	   }
   }

   public function delcc(){
   	$id = I('id');
   	$db = M('con')->where(array('id'=>$id))->delete();
   	if($db){
   		$this->success('删除成功！');
   	}else{
   		$this->error('删除失败！');
   	}
   }


}


?>