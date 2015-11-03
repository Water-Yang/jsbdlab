<?php
namespace Home\Controller;
use Think\Controller;
class BigDataController extends Controller {
   //单个大数据人物
   public function listBdpOne(){
   	  //技术文章
        $this->satc = M('satc')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //实验室新闻 
        $this->labnews = M('labnews')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //大数据事件
        $this->event = M('event')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //首页图片
        $fpic = M('fpic')->order('id desc')->where(array('active'=>1))->select();
        $this->fpic=$fpic[0];
        //图片新闻
        $this->pp = M('picnews')->order('id desc')->where(array('active'=>1))->limit(2)->select();
            
	    $id = I('id');
	    $db = M('bdpeople')->where(array('id'=>$id))->find();
	    $db['introduction'] = htmlspecialchars_decode($db['introduction']);
     if(strlen($db['home'])>40){
      $hh[0]=substr($db['home'],0,34);
      $hh[1]=substr( $db['home'],35,35);
       $hh[2]=substr( $db['home'],69,35);
      $this->hh = $hh;
     }
	    $this->listbdpone = $db; 
	    $this->display();
	   }

	   //大数据人物的上一个
	public function bdppre(){
		 //技术文章
        $this->satc = M('satc')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //实验室新闻 
        $this->labnews = M('labnews')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //大数据事件
        $this->event = M('event')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //首页图片
        $fpic = M('fpic')->order('id desc')->where(array('active'=>1))->select();
        $this->fpic=$fpic[0];
        //图片新闻
        $this->pp = M('picnews')->order('id desc')->where(array('active'=>1))->limit(2)->select();
            
		   $id = I('id');
       $arr['id']= array('gt',$id);;
       $arr['active'] = 1;
		  $db = M('bdpeople')->where($arr)->find();
		  if($db){
		        $db['introduction'] = htmlspecialchars_decode($db['introduction']);
		        $this->listbdpone = $db; 
		        $this->display();
		  }else{
		    $db = M('bdpeople')->where('id='.$id)->find();
		    $db['introduction'] = htmlspecialchars_decode($db['introduction']);
		        $this->listbdpone = $db; 
		        $this->display();
		  }
		} 
    //大数据人物的下一个
	public function bdpnext(){
		 //技术文章
        $this->satc = M('satc')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //实验室新闻 
        $this->labnews = M('labnews')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //大数据事件
        $this->event = M('event')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //首页图片
        $fpic = M('fpic')->order('id desc')->where(array('active'=>1))->select();
        $this->fpic=$fpic[0];
        //图片新闻
        $this->pp = M('picnews')->order('id desc')->where(array('active'=>1))->limit(2)->select();
            
       $id = I('id');
       $arr['id']=array('lt',$id);
       $arr['active']= 1;
       $db = M('bdpeople')->where($arr)->order('id desc')->find();
        if($db){
            $db['introduction'] = htmlspecialchars_decode($db['introduction']);
            $this->listbdpone = $db; 
            $this->display();
        }else{
           $db = M('bdpeople')->where('id='.$id)->find();
           $db['introduction'] = htmlspecialchars_decode($db['introduction']);
            $this->listbdpone = $db; 
            $this->display();
      }
   }
   //大数据人物列表
   Public function listbdp(){
   	   //技术文章
        $this->satc = M('satc')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //实验室新闻 
        $this->labnews = M('labnews')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //大数据事件
        $this->event = M('event')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //首页图片
        $fpic = M('fpic')->order('id desc')->where(array('active'=>1))->select();
        $this->fpic=$fpic[0];
        //图片新闻
        $this->pp = M('picnews')->order('id desc')->where(array('active'=>1))->limit(2)->select();

    $count = M('bdpeople')->where(array('active'=>1))->count();
    import('ORG.Util.Page');
     $page = new \Think\Page($count,20);
     $limit = $page->firstRow.','.$page->listRows;
     $list = M('bdpeople')->where(array('active'=>1))->order('bname')->limit($limit)->select();
     $cc = count($list);
     for($ii = 0;$ii < $cc;$ii++){
          if(strlen($list[$ii]['home'])>40){
             $hhh[0] = substr($list[$ii]['home'],0,34);
             $hhh[1] = substr($list[$ii]['home'],34,35);
             $hhh[2] = substr($list[$ii]['home'],69,35);
             $list[$ii]['hhh']=$hhh;
          }
        }
     $this->page = $page->show();
     $this->list = $list;
     $this->display();
   }  
/******************************大数据事件****************************************************/ 
             //单个大数据事件
   public function listevent(){      
        //技术文章
        $this->satc = M('satc')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //实验室新闻 
        $this->labnews = M('labnews')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //大数据事件
        $this->event = M('event')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //首页图片
        $fpic = M('fpic')->order('id desc')->where(array('active'=>1))->select();
        $this->fpic=$fpic[0];
        //图片新闻
        $this->pp = M('picnews')->order('id desc')->where(array('active'=>1))->limit(2)->select();

        $id = I('id');
        $db = M('event')->where(array('id'=>$id))->find();
        $db['content'] = htmlspecialchars_decode($db['content']);
        $this->lv = $db;
        $this->display();
       }

  //大数据事件前一个
    public function eventpre(){
      //技术文章
        $this->satc = M('satc')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //实验室新闻 
        $this->labnews = M('labnews')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //大数据事件
        $this->event = M('event')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //首页图片
        $fpic = M('fpic')->order('id desc')->where(array('active'=>1))->select();
        $this->fpic=$fpic[0];
        //图片新闻
        $this->pp = M('picnews')->order('id desc')->where(array('active'=>1))->limit(2)->select();
        $id = I('id');
        $arr['id']=array('gt',$id);
        $arr['active'] = 1;
        $db= M('event')->where($arr)->find();
        if($db){
            $db['content'] = htmlspecialchars_decode($db['content']);
            $this->lv = $db;
            $this->display();
        }else{
            $db= M('event')->where("id=".$id)->find();
            $db['content'] = htmlspecialchars_decode($db['content']);
            $this->lv = $db;
            $this->display();
        }
    }

   //大数据事件下一个
    public function eventnext(){
      //技术文章
        $this->satc = M('satc')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //实验室新闻 
        $this->labnews = M('labnews')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //大数据事件
        $this->event = M('event')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //首页图片
        $fpic = M('fpic')->order('id desc')->where(array('active'=>1))->select();
        $this->fpic=$fpic[0];
        //图片新闻
        $this->pp = M('picnews')->order('id desc')->where(array('active'=>1))->limit(2)->select();
        $id = I('id');
        $arr['id']=array('lt',$id);
        $arr['active']=1;
        $db = M('event')->where($arr)->order('id desc')->find();
        if($db){
            $db['content'] = htmlspecialchars_decode($db['content']);
            $this->lv = $db;
            $this->display();
        }else{
            $db = M('event')->where("id=".$id )->find();
            $db['content'] = htmlspecialchars_decode($db['content']);
            $this->lv = $db;
            $this->display();
        }
    }

     public function events(){
        //技术文章
        $this->satc = M('satc')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //实验室新闻 
        $this->labnews = M('labnews')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //大数据事件
        $this->event = M('event')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //首页图片
        $fpic = M('fpic')->order('id desc')->where(array('active'=>1))->select();
        $this->fpic=$fpic[0];
        //图片新闻
        $this->pp = M('picnews')->order('id desc')->where(array('active'=>1))->limit(2)->select();
       $count = M('event')->where(array('active'=>1))->count();
       import('ORG.Util.Page');
       $page = new \Think\Page($count,15);
       $limit = $page->firstRow.','.$page->listRows;
       $event = M('event')->where(array('active'=>1))->order('id desc')->limit($limit)->select();
       $count = count($event);
       for($i = 0;$i<$count;$i++){
           $content = explode('&lt;/p&gt;',$event[$i]['content']);
           $event[$i]['content'] = strip_tags(htmlspecialchars_decode($content[0]));
             $event[$i]['content'] =mb_substr( $event[$i]['content'],0,200,'utf-8');
       }
       $this->event = $event;
       $this->page=$page ->show();     
       $this->display();
   }

   //技术文章
     Public function listAtcOne(){
        //技术文章
        $this->satc = M('satc')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //实验室新闻 
        $this->labnews = M('labnews')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //大数据事件
        $this->event = M('event')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //首页图片
        $fpic = M('fpic')->order('id desc')->where(array('active'=>1))->select();
        $this->fpic=$fpic[0];
        //图片新闻
        $this->pp = M('picnews')->order('id desc')->where(array('active'=>1))->limit(2)->select();

        $id = I('id');
        $scienceAtc = M('satc')->where(array('id'=>$id))->find();
        $scienceAtc['content']=htmlspecialchars_decode( $scienceAtc['content']);
        $this->scienceAtc=$scienceAtc;
        $this->display();
     }
    //技术文章的上一篇
      public function atcpre(){

        //技术文章
        $this->satc = M('satc')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //实验室新闻 
        $this->labnews = M('labnews')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //大数据事件
        $this->event = M('event')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //首页图片
        $fpic = M('fpic')->order('id desc')->where(array('active'=>1))->select();
        $this->fpic=$fpic[0];
        //图片新闻
        $this->pp = M('picnews')->order('id desc')->where(array('active'=>1))->limit(2)->select();
        
          $id = I('id');
          $arr['id'] = array('gt',$id);
          $arr['active']=1;
          $db = M('satc')->where($arr)->find();
          if($db){
              $db['content']=htmlspecialchars_decode( $db['content']);
              $this->scienceAtc=$db;
              $this->display();
          }else{
              $db = M('satc')->where("id=".$id)->find();
              $db['content']=htmlspecialchars_decode( $db['content']);
              $this->scienceAtc=$db;
              $this->display();
          }
      }
      //技术文章的下一篇
      public function atcnext(){
          //技术文章
          $this->satc = M('satc')->order('id desc')->where(array('active'=>1))->limit(1)->select();
          //实验室新闻 
          $this->labnews = M('labnews')->order('id desc')->where(array('active'=>1))->limit(1)->select();
          //大数据事件
          $this->event = M('event')->order('id desc')->where(array('active'=>1))->limit(1)->select();
          //首页图片
          $fpic = M('fpic')->order('id desc')->where(array('active'=>1))->select();
          $this->fpic=$fpic[0];
          //图片新闻
          $this->pp = M('picnews')->order('id desc')->where(array('active'=>1))->limit(2)->select();
        
          $id = I("id");
          $arr['id']= array('lt',$id);
          $arr['active'] = 1;
          $db = M('satc')->where($arr)->order('id desc')->find();
          if($db){
              $db['content']=htmlspecialchars_decode( $db['content']);
              $this->scienceAtc=$db;
              $this->display();
          }else{
              $db = M('satc')->where("id=".$id)->find();
              $db['content']=htmlspecialchars_decode( $db['content']);
              $this->scienceAtc=$db;
              $this->display();
          }
      }
      //技术文章列表
     Public function listAtcTitle(){
       //技术文章
        $this->satc = M('satc')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //实验室新闻 
        $this->labnews = M('labnews')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //大数据事件
        $this->event = M('event')->order('id desc')->where(array('active'=>1))->limit(1)->select();
        //首页图片
        $fpic = M('fpic')->order('id desc')->where(array('active'=>1))->select();
        $this->fpic=$fpic[0];
        //图片新闻
        $this->pp = M('picnews')->order('id desc')->where(array('active'=>1))->limit(2)->select();
        
      $count = M('satc')->where(array('active'=>1))->count();
      import('ORG.Util.Page');
      //传入总页数和每页显示的数目
      $page= new \Think\Page($count,15);
        $limit = $page->firstRow.','.$page->listRows; 
       $title = M('satc')->where(array('active'=>1))->order('id desc')->limit($limit)->select();
        //统计每篇文章的个数
        $count1 = count($title);
       for($i=0;$i<$count1;$i++){
           $content=explode('&lt;/p&gt;', $title[$i]['content']);
           $title[$i]['content'] =  strip_tags(htmlspecialchars_decode($content[0]));
            $title[$i]['content'] =mb_substr(  $title[$i]['content'],0,200,'utf-8');
       }
       $this->tit = $title;
       $this->page = $page->show();
       $this->display();
     }




}
?>