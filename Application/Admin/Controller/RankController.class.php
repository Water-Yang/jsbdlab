<?php
namespace Admin\Controller;
use Think\Controller;
class rankController extends CommonController{ 
 /**************************实验室的图片新闻升序和降序和取消************************/
   public function up_picnews_order(){
   	$id = I('id');
   	$tablename = 'picnews';
   	$db = upOrder($tablename,$id);
   	if($db){
   		$this->success('升一位成功！');
   	}else{
   		$this->error('升一位失败！');
   	}
   }

   public function down_picnews_order(){
   	$id = I('id');
   	$tablename = 'picnews';
   	$db = downOrder($tablename,$id);
   	if($db){
      $this->success('降一位成功！');
   	}else{
   	  $this->error('降一位失败！');
   	}
   }

   public function cclpicnews(){
   	$id = I('id');
   	$db = M('picnews')->where(array('id'=>$id))->save(array('active'=>0));
   	if($db){
   		$this->success('取消成功！');
   	}else{
   		$this->error('取消失败！');
   	}
   }
 /****************************实验室新闻的升序和降序和取消************************/
   public function up_labnews_order(){
   	$id = I('id');
    $tablename = 'labnews';
   	$db = upOrder($tablename,$id); 
   	if($db){
   		$this->success('升一位成功！');
   	}else{
   		$this->error('升一位失败！');
   	}
   }
    public function down_labnews_order(){
   	$id = I('id');
   	$tablename = 'labnews';
   	$db = downOrder($tablename,$id);
   	if($db){
      $this->success('降一位成功！');
   	}else{
   	  $this->error('降一位失败！');
   	}
   }
   public function cclLabNews(){
      $id = I('id');
      $db = M('labnews')->where(array('id'=>$id))->save(array('active'=>0));
      if($db){
      	$this->success('取消成功！');
      }else{
      	$this->error('取消失败！');
      }
   }

 /**************************实验室图片的升和降以及取消******************************/
   // public function up_lpic_order(){
	  //  	$id = I('id');
	  //   $tablename = 'lpic';
	  //  	$db = upOrder($tablename,$id); 
	  //  	if($db){
	  //  		$this->success('升一位成功！');
	  //  	}else{
	  //  		$this->error('升一位失败！');
	  //  	}
   // }

   // public function down_lpic_order(){
   //    $id = I('id');
   //    $tablename='lpic';
   //    $db = downOrder($tablename,$id);
   //    if($db){
   //    $this->success('降一位成功！');
   //    }else{
   //      $this->error('降一位失败！');
   //    }
   // }

   public function ccllpic(){
      $id = I('id');
      $db = M('lpic')->where(array('id'=>$id))->save(array('active'=>0));
      if($db){
         $this->success('取消成功！');
      }else{
         $this->error('取消失败！');
      }
   }

/***************************实验室图片的介绍*******************************/ 

public function ccllabint(){
    $id = I('id');
      $db = M('labint')->where(array('id'=>$id))->save(array('active'=>0));
      if($db){
         $this->success('取消成功！');
      }else{
         $this->error('取消失败！');
      }
}
/**********************************大数据人物的介绍********************/
   public function up_bdp_order(){
      $id = I('id');
    $tablename = 'bdpeople';
      $db = upOrder($tablename,$id); 
      if($db){
         $this->success('升一位成功！');
      }else{
         $this->error('升一位失败！');
      }
   }
    public function down_bdp_order(){
      $id = I('id');
      $tablename = 'bdpeople';
      $db = downOrder($tablename,$id);
      if($db){
      $this->success('降一位成功！');
      }else{
        $this->error('降一位失败！');
      }
   }
   public function cclbdp(){
      $id = I('id');
      $db = M('bdpeople')->where(array('id'=>$id))->save(array('active'=>0));
      if($db){
         $this->success('取消成功！');
      }else{
         $this->error('取消失败！');
      }
   }

/************************大数据事件*************************/

 public function up_event_order(){
      $id = I('id');
    $tablename = 'event';
      $db = upOrder($tablename,$id); 
      if($db){
         $this->success('升一位成功！');
      }else{
         $this->error('升一位失败！');
      }
   }
    public function down_event_order(){
      $id = I('id');
      $tablename = 'event';
      $db = downOrder($tablename,$id);
      if($db){
      $this->success('降一位成功！');
      }else{
        $this->error('降一位失败！');
      }
   }
   public function ccl_event(){
      $id = I('id');
      $db = M('event')->where(array('id'=>$id))->save(array('active'=>0));
      if($db){
         $this->success('取消成功！');
      }else{
         $this->error('取消失败！');
      }
   }
/***************************大数据的技术文章＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊*/

  public function up_atc_order(){
      $id = I('id');
     $tablename = 'satc';
      $db = upOrder($tablename,$id); 
      if($db){
         $this->success('升一位成功！');
      }else{
         $this->error('升一位失败！');
      }
   }
    public function down_atc_order(){
      $id = I('id');
      $tablename = 'satc';
      $db = downOrder($tablename,$id);
      if($db){
      $this->success('降一位成功！');
      }else{
        $this->error('降一位失败！');
      }
   }
   public function ccl_atc(){
      $id = I('id');
      $db = M('satc')->where(array('id'=>$id))->save(array('active'=>0));
      if($db){
         $this->success('取消成功！');
      }else{
         $this->error('取消失败！');
      }
   }
/*****************实验室招聘信息取消＊＊＊＊＊＊＊*/

   public function ccl_employ(){
      $id = I('id');
      $db = M('employ')->where(array('id'=>$id))->save(array('active'=>0));
      if($db){
         $this->success('取消成功！');
      }else{
         $this->error('取消失败！');
      }
   }

/************************实验室成员的信息介绍＊＊＊＊＊＊＊＊＊＊＊****/
public function up_num_order(){
      $id = I('id');
     $tablename = 'member';
      $db = upOrder($tablename,$id); 
      if($db){
         $this->success('升一位成功！');
      }else{
         $this->error('升一位失败！');
      }
   }
    public function down_num_order(){
      $id = I('id');
      $tablename = 'member';
      $db = downOrder($tablename,$id);
      if($db){
      $this->success('降一位成功！');
      }else{
        $this->error('降一位失败！');
      }
   }
   public function ccl_num(){
      $id = I('id');
      $db = M('member')->where(array('id'=>$id))->save(array('active'=>0));
      if($db){
         $this->success('取消成功！');
      }else{
         $this->error('取消失败！');
      }
   } 
/****************实验室的设备信息编辑＊＊＊＊＊＊*******/
public function ccl_equ(){
      $id = I('id');
      $db = M('equinfo')->where(array('id'=>$id))->save(array('active'=>0));
      if($db){
         $this->success('取消成功！');
      }else{
         $this->error('取消失败！');
      }
} 
/***************用户使用的介绍＊＊＊＊＝*********/
public function ccl_uinfo(){
     $id = I('id');
      $db = M('uinfo')->where(array('id'=>$id))->save(array('active'=>0));
      if($db){
         $this->success('取消成功！');
      }else{
         $this->error('取消失败！');
      }
} 




}
?>