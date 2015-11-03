<?php
namespace Home\Controller;
use Think\Controller;
 class LabController extends Controller{

  /****************************实验室的图片新闻**************************************************************/ 
    //图片新闻的连接
      public function picnews(){
         $id = $_GET['id'];
         $db = M('picnews')->where(array('id'=>$id))->find();
         $db['pcontent'] = htmlspecialchars_decode($db['pcontent']);
         $this->pic = $db;
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
         $this->display();
       }

       //上一个图片新闻
       public function picnewspre(){
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
            
            $id = $_GET['id'];
            $arr['id']= array('gt',$id);
            $arr['active'] = 1;  
            $db = M('picnews')->where($arr)->find();
            if($db){
                      $db['pcontent'] = htmlspecialchars_decode($db['pcontent']);
                      $this->pic = $db;
                      $this->display();
                  }else{
                      $db = M('picnews')->where(array('id'=>$id))->find();
                      $db['pcontent'] = htmlspecialchars_decode($db['pcontent']);
                      $this->pic = $db;
                      $this->display();
                  }
         }
           //图片新闻的下一个
            public function picnewsnext(){
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
                   $id = $_GET['id'];
                   $arr['id']=array('lt',$id);
                   $arr['active']=1;
                   $db = M('picnews')->where($arr)->order('id desc')->find();
                   if($db){
                              $db['pcontent'] = htmlspecialchars_decode($db['pcontent']);
                              $this->pic = $db;
                              $this->display();
                          }else{
                              $db = M('picnews')->where("id=".$id )->find();
                              $db['pcontent'] = htmlspecialchars_decode($db['pcontent']);
                              $this->pic = $db;
                              $this->display();
                          }
                 }
           //列出新闻图片
           public function listpicnews(){
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
               $count = M('picnews')->where(array('active'=>1))->count();
               import('ORG.Util.Page');
               $page = new \Think\Page($count,10);
               $limit = $page->firstRow.','.$page->listRows;
               $event = M('picnews')->where(array('active'=>1))->order('id desc')->limit($limit)->select();
               $count = count($event);
               $len = 580;
               for($i = 0;$i<$count;$i++){
                   $content = explode('&lt;/p&gt;',$event[$i]['pcontent']);
                   $event[$i]['pcontent'] = strip_tags(htmlspecialchars_decode($content[0]));
                    $event[$i]['pcontent'] =mb_substr( $event[$i]['pcontent'],0,200,'utf-8');
               }
               $this->listpicnews = $event;
               $this->page=$page ->show();     
               $this->display();
           }

  /*****************************************实验室新闻*********************************************/
           //实验室新闻列表
           Public function oneLabNews(){
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
            $listone = M('labnews')->where(array('id'=>$id))->find();
            $listone['lncontent']= htmlspecialchars_decode( $listone['lncontent']);
            $this->listone=$listone;
            $this->display();   
           }  

             //上一个实验室新闻
          public function labnewspre(){
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
             $arr['active']=1;
             $listone = M('labnews')->where($arr)->order('id desc')->find();
                if($listone){
                $listone['lncontent']= htmlspecialchars_decode( $listone['lncontent']);
                $this->listone=$listone;
                $this->display();
            }else{
                $listone = M('labnews')->where("id =".$id)->find();
                $listone['lncontent']= htmlspecialchars_decode( $listone['lncontent']);
                $this->listone=$listone;
                $this->display();
            }
        }

          //下一个实验室新闻
         public function labnewsnext(){
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
           $arr['id']= array('lt',$id);
           $arr['active']=1;
           $listone = M('labnews')->where($arr)->find();
             if($listone){
                 $listone['lncontent']= htmlspecialchars_decode( $listone['lncontent']);
                 $this->listone=$listone;
                 $this->display();
             }else{
                 $listone = M('labnews')->where("id =".$id)->find();
                 $listone['lncontent']= htmlspecialchars_decode( $listone['lncontent']);
                 $this->listone=$listone;
                 $this->display();
             }

     }

      //实验室的新闻列表
   Public function listLabNews(){
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

      $count =M('labnews')->where(array('active'=>1))->count();
      $this->count=$count;
      import('ORG.Util.Page');
      $page = new \Think\Page($count,10);
      $limit = $page->firstRow.','.$page->listRows;
      $db = M('labnews')->order('id desc')->where(array('active'=>1))->limit($limit)->select();
      $count = count($db);
      for($i=0;$i<$count;$i++){
         $content = explode('&lt;/p&gt;',$db[$i]['lncontent']);
          $db[$i]['lncontent'] = strip_tags(htmlspecialchars_decode($content[0]));
          $db[$i]['lncontent'] =mb_substr( $db[$i]['lncontent'],0,200,'utf-8');
      }
      $this->page = $page->show();
      $this->labnews = $db;
      $this->display();
     }

/****************************实验室介绍***************************************************************/ 
      //实验室介绍
      public function labint(){
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

          $db = M('labint')->where(array('active'=>1))->order('id desc')->select();
          $this->db = htmlspecialchars_decode($db[0]['content']);
          $this->display(); 
      }

/*******************实验室的设备介绍******************************************************/ 

  // 实验室设备
  public function equ(){
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
            $db = M('equinfo')->order('id desc')->where(array('active'=>1,'id'=>$id))->find();
            $this->db = htmlspecialchars_decode($db['content']);
            $this->display();
  }

  /*************用户信息的介绍***********************/

      public function uinfo(){
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
            $db = M('uinfo')->order('id desc')->where(array('active'=>1,'id'=>$id))->find();
            $this->db = htmlspecialchars_decode($db['content']);
            $this->display();
      }

/**********************实验室的成员介绍*****************************************/ 
      public function people(){
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
            $this->pp= M('picnews')->order('id desc')->where(array('active'=>1))->limit(2)->select();

          $teacher=M('member')->where(array('active'=>1,'ntitle'=>'1'))->select();
          $tt = count($teacher);
          for($i = 0;$i<$tt;$i++){
               $teacher[$i]['message']=strip_tags(htmlspecialchars_decode($teacher[$i]['message']));
                $teacher[$i]['message'] = mb_substr($teacher[$i]['message'],0,200,'utf-8');
          }
          $this->teacher=$teacher;
          $student=M('member')->where(array('active'=>1,'ntitle'=>'2'))->select();
          $cc = count($student);
          for($i = 0;$i<$cc;$i++){
               $student[$i]['message']=strip_tags(htmlspecialchars_decode($student[$i]['message']));
               $student[$i]['message'] = mb_substr($student[$i]['message'],0,200,'utf-8');
            }
          $this->student=$student;
          $profess=M('member')->where(array('active'=>1,'ntitle'=>'3'))->select();
          $pcount = count($profess);
          for($i = 0;$i<$pcount;$i++){
               $profess[$i]['message']=strip_tags(htmlspecialchars_decode($profess[$i]['message']));
               $profess[$i]['message'] = mb_substr($profess[$i]['message'],0,200,'utf-8');
            }
          $this->profess=$profess;
          $this->display();
         }
    public function one_pp(){
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
       $op = M('member')->where(array('id'=>$id))->find();
       $op['message']= $op['message']=htmlspecialchars_decode($op['message']);
       $this->op=$op;
       $this->display(); 
    }

      //联系方式
      public function contact(){
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
        
           $db = M('employ')->order('id desc')->where(array('active'=>1))->select();
   
        $this->db =htmlspecialchars_decode($db[0]['content']);
        $this->cc = M('con')->where(array('active'=>1))->order('id desc')->find();
        $this->display();
     }


 }
?>