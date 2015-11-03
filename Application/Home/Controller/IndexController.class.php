<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //技术文章
        $satc = M('satc')->order('id desc')->where(array('active'=>1))->limit(6)->select();
         $cst = count($satc);
         for($i = 0;$i<$cst;$i++){
            if(strlen($satc[$i]['title'])>84){
              $satc[$i]['title'] = substr($satc[$i]['title'],0,76).'...';
            }
         }
         $this->satc = $satc;
        //实验室新闻 
        $labnews = M('labnews')->order('id desc')->where(array('active'=>1))->limit(6)->select();
        $clbw = count($labnews);
         for($i= 0;$i<$clbw;$i++){
          if(strlen($labnews[$i]['lntitle'])>84){
            $labnews[$i]['lntitle'] = substr( $labnews[$i]['lntitle'],0,76).'...';
          }
         }$this->labnews = $labnews;
        //大数据人物
        $bdp = M('bdpeople')->order('id desc')->where(array('active'=>1))->limit(6)->select();
        $cbdp = count($bdp);
        for($i = 0 ;$i < $cbdp;$i++){
          if(strlen($bdp[$i]['fpara'])>43){
              $bdp[$i]['fpara']= substr( $bdp[$i]['fpara'],0,40).'...';
          }
        }
        $this->bdp= $bdp;
        //大数据事件
        $event = M('event')->order('id desc')->where(array('active'=>1))->limit(6)->select();
        $cet = count($event);
         for($i = 0;$i<$cet;$i++){
          if(strlen($event[$i]['title'])>80){
             $event[$i]['title'] = substr($event[$i]['title'],0,76).'...';
          }
         }
         $this->event = $event;
      //图片新闻  
      $this->pic = M('picnews')->where(array('active'=>1))->order('id desc')->limit(2)->select();
      // 实验室介绍
       $labint = M('labint')->where(array('active'=>1))->order('id desc')->select();
       $labint = $labint[0];
       $labint = strip_tags(htmlspecialchars_decode($labint['content']));
       $this->labint = mb_substr($labint,0,950,'utf-8');
        // 实验室设备介绍
       $equinfo = M('equinfo')->where(array('active'=>1))->order('id desc')->select();
       $equinfo = $equinfo[0];
       $this->eid = $equinfo['id'];
       $equinfo = strip_tags(htmlspecialchars_decode($equinfo['content']));

       $this->eq = mb_substr($equinfo,0,540,'utf-8');
       //首页图片
        $fpic = M('fpic')->order('id desc')->where(array('active'=>1))->select();
        $this->fpic = $fpic[0];
       //实验室的图片
        /** @var TYPE_NAME $llpic */
        $llpic = M('lpic')->order('id desc')->where(array('active'=>1))->select();
        $this->lpic = $llpic[0];

        //用户设备的信息介绍
        $uinfo = M('uinfo')->order('id desc')->where(array('active'=>1))->select();
        $this->uid = $uinfo[0]['id'];
        $uinfo = strip_tags(htmlspecialchars_decode($uinfo[0]['content']));
        $this->uinfo = mb_substr($uinfo,0,350,'utf-8');
        $this->display();
    }
     //bigdata中的大数据人物
   public function bdt(){
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

   public function bdte(){
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

   Public function bdta(){
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











