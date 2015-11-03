<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController{
	//进入后台管理的界面
  public function index(){
    $this->display();
  }
/*********注销退出************************/
  public function logout(){
      session_unset();
      session_destroy();
      $this->redirect('Admin/Login/login');
  }
  //添加成员
  public function addNum(){
  	  $this->display();
  }
  //添加成员处理
  Public function addNumHandle(){
        $info = photoUpload();
        $arr= array(
           'name'=>I('Name'),
           'ntitle'=>I('ntitle'),
           'interest'=>I('interest'),
           'message'=>I('message'),
           'pathname'=>$info[photo]['savepath'].$info[photo]['savename'], 
        	);
        $db = M('member')->add($arr);
        if(!empty($info)&&$db){
               $this->success('添加成功!',U('Admin/Index/listNum'));
        }else{
        	$this->error('添加失败！',U('Admin/Index/listNum'));
        }	
  }
 //成员列表
  Public function listNum(){
  	$count=M('member')->count();
    // 导入分页类
    import('ORG.Util.Page');
    //传入总页数和每页显示的数目
    $page= new \Think\Page($count,15);
    $limit = $page->firstRow.','.$page->listRows; 
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $member=M('member')->order('id desc')->limit($limit)->select();
    $this->dbk = $member;
	$this->page = $page->show();
    $this->count=$count;
    $this->display();
  }
 //修改成员信息
  Public function reviseNum(){
  	$id = I('id');
  	$this->db=M('member')->where(array('id'=>$id))->find();
    $this->display();
  }
 //修改成员信息的处理
  public function reviseNumHandle(){
  	$id=$_GET['id'];
    $info = photoUpload();
    if(!empty($info)){
       //修改照片的
	     $arr= array(
	       'name'=>I('name'),
	       'message'=>I('message'),
         'interset'=>I('interest'),
         'ntitle'=>I('ntitle'),
	       'pathname'=>$info[photo]['savepath'].$info[photo]['savename'], 
	    	);
	      $db=M('member')->where(array('id'=>$id))->save($arr);
	      if($db){
	      	$this->success('修改成功！',U('Admin/Index/listNum'));
	      }else{
	      	$this->error('修改失败！',U('Admin/Index/listNum'));
	      }
    }else{
    	$db=M('member')->where(array('id'=>$id))->find();
    	//没有修改照片
	      $arr= array(
	       'name'=>I('name'),
         'message'=>I('message'),
         'interest'=>I('interest'),
         'ntitle'=>I('ntitle'),
	       'pathname'=>$db['pathname'],
	    	);
	      $db=M('member')->where(array('id'=>$id))->save($arr);
	      if($db){
	      	$this->success('修改成功！',u('Admin/Index/listNum'));
	      }else{
	      	$this->error('修改失败！',U('Admin/Index/listNum'));
	      }
    }
  }
 //删除成员
  Public function delNum(){
  	 $id=I('id');
     $db=M('member')->where(array('id'=>$id))->delete();

     if(!empty($db)){
     	$this->success('删除成功!',U('Admin/Index/listNum'));
     }else{
     	$this->success('删除失败',U('Admin/Index/listNum'));
     }
  }
  //成员激活
  public function meactive(){
    $id = I('id');
    $arr = array('active'=>1);
   $db = M('member')->where(array('id'=>$id))->find();
    if($db['active']==0){
      $db = M('member')->where(array('id'=>$id))->save($arr);
      if($db){
        $this->success('发表成功！',U('Admin/Index/listNum'));
      }else{
        $this->error('发表失败！');
      }
    }else{
      $this->error('已经发表了！',U('Admin/Index/listNum'));
    }
  }
  //***********************技术文章*****************************
  Public function addActl(){
      $this->display();
  }
  //技术文章的提交处理
  Public function addActlHandle(){
  
    $arr=array(
       'title' => I('tit'),
       'content' => I('con'),
      );
    $artical = M('satc')->add($arr);
    if($artical){
      $this->success('添加成功！',U('Admin/Index/listAtc'));
    }else{
       $this->error('添加成功！');
    }
  }
 //技术文章列表
  Public function listAtc(){
    $db = M('satc')->select();
    //转换文章内容的html标签
    for($i=0;$i<$count;$i++){
      $db[$i]['content']= htmlspecialchars_decode($db[$i]['content']);
    }
    $count=M('satc')->count();
    // 导入分页类
    import('ORG.Util.Page');
    //传入总页数和每页显示的数目
    $page= new \Think\Page($count,15);
    $limit = $page->firstRow.','.$page->listRows; 
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $member=M('satc')->order('id desc')->limit($limit)->select();
    $this->dbk = $member;
    $this->page = $page->show();
    $this->display();
  }
 // 删除技术文章
  public function delAtc(){
    $id = I('id');
    $db = M('satc')->where(array('id'=>$id))->delete();

    if($db){
      $this->success('删除成功!',U('Admin/Index/listAtc'));
    }
  }
  //发表技术文章
  Public function atcActive(){
    $id = I('id');
    $arr = array('active'=>1);
    $db = M('satc')->where(array('id'=>$id))->find();
    if($db['active']==0){
      $db = M('satc')->where(array('id'=>$id))->save($arr);
      if($db){
        $this->success('发表成功！',U('Admin/Index/listAtc'));
      }else{
        $this->error('发表失败！');
      }
    }else{
      $this->error('已经发表了！',U('Admin/Index/listAtc'));
    }
  }

/****************************实验室新闻***********************/
 Public function addLabNew(){
    $this->display();
  }
 //实验室新闻的添加处理
  Public function addLnHandle(){
    $arr = array(
       'lntitle'=>I('lntitle'),
       'lncontent'=>I('lncontent')
      );
    $db=M('labnews')->add($arr);
    if($db){
      $this->success('添加成功！',U('Admin/Index/listLabNew'));  
    }else{
      $this->error('添加失败！',U('Admin/Index/listLabNew'));
    }
  }
  //实验室新闻列表
  public function listLabNew(){
    //统计数目
    $count = M('labnews')->count();
    import('ORG.Util.Page');
    //传入总页数和每页显示的数目
    $page= new \Think\Page($count,15);
    $limit = $page->firstRow.','.$page->listRows; 
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $labnews=M('labnews')->order('id desc')->limit($limit)->select();
    $this->labnews=$labnews;    
    $this->page = $page->show();
    $this->display();
  }
 //删除实验室的新闻
  public function delLabNews(){
     $id = I('id');
     $db = M('labnews')->where(array('id'=>$id))->delete();
    if($db){
      $this->success('删除成功！',U('Admin/Index/listLabNew'));
    }else{
      $this->error('删除失败！',U('Admin/Index/listLabNew'));
    }
  }
  //发表实验室新闻
  public function lnActive(){
      $id = I('id');
      $arr = array(
          'active' => 1,
        );
      $dd = M('labnews')->where(array('id'=>$id))->find();
      if($dd['active']==0){
          $db = M('labnews')->where(array('id'=>$id))->save($arr);
          if($db){
            $this->success('发表成功！',U('Admin/Index/listLabNew'));
          }else{
            $this->error('发表失败！',U('Amdin/Index/listLabNew'));
          }
      }else{
        $this->error('已经发表过！',U('Admin/Index/listLabNew'));
      }     
  }
/*******************大数据人物***************/ 
  //添加大数据人物
 Public function addBdp(){
    $this->display();
  }
  //添加大数据人物处理
  public function addBdpHandle(){
      $info = photoUpload();
      $pn = $info['photo']['savepath'].$info['photo']['savename'];
      $arr = array(
          'bname'=>I('bname'),
          'fpara'=>I('fpara'),
          'home'=>I('home'),
          'email'=>I('email'),
          'introduction'=>I('introduction'),
          'pathname'=>$pn
        );
      $db = M('bdpeople')->add($arr);
      if($db){
        $this->success('添加成功',U('Admin/Index/listBdp'));
      }else{
        $this->error('添加失败 ！',U('Admin/Index/addBdp'));
      }
  }
  //大数据人物列表
  Public function listBdp(){
    $count = M('bdpeople')->count();
   import('ORG.Util.Page');
    $page = new \Think\Page($count,10);
    $limit = $page->firstRow.','.$page->listRows;
    $list = M('bdpeople')->order('id desc')->limit($limit)->select();
    $this->page = $page->show();
    $this->list = $list;
    $this->display();
  }
  //大数据人物的删除
  public function delBpeople(){
    $id = I('id');
    $db = M('bdpeople')->where(array('id'=>$id))->delete();
    if($db){
      $this->success('删除成功！',U('Admin/Index/listBdp'));
    }
  }
   //大数据人物的审核通过发表
    Public function aHandle(){
      $id = I('id');
      $arr = array(
          'active' => 1,
        );
      $dd = M('bdpeople')->where(array('id'=>$id))->find();
      if($dd['active']==0){
          $db = M('bdpeople')->where(array('id'=>$id))->save($arr);
          if($db){
            $this->success('发表成功！',U('Admin/Index/listBdp'));
          }else{
            $this->error('发表失败！',U('Amdin/Index/listBdp'));
          }
      }else{
        $this->error('已经发表过！',U('Admin/Index/listBdp'));
      }     
    }
/*********************大数据事件****************************/
 public function addEvent(){
  $this ->display();
 }
 //事件的处理
 public function addEveHandle(){
     $arr = array(
        'title'=>I('tit'),
        'content'=>I('con'),
      );
     $db = M('event')->add($arr);
     if($db){
      $this->success('添加成功！',U('Admin/Index/listEvent'));
     }else{
      $this->error('添加失败！',U('Admin/Index/addEvent'));
     }
 }
 //事件的列表
 public function listEvent(){
    $count = M('event')->count();
     import('ORG.Util.Page');
     $page = new \Think\Page($count,15);
     $limit = $page->firstRow.','.$page->listRows;
     $db = M('event')->order('id desc')->limit($limit)->select();
     $this->event = $db;
     $this->page = $page->show();
     $this->display();
 }

 //事件的删除

 public function delEvent(){
  $id = I('id');
  $db = M('event')->where(array('id'=>$id))->delete();
  if($db){
    $this->success('删除成功！',U('Admin/Index/listEvent'));
  }else{
    $this->error('删除失败',U('Admin/Index/listEvevnt'));
  }
 }
 //激活事件
 public function aEvent(){
    $id = I('id');
    $db = M('event')->where(array('id'=>$id))->find();
    if($db['active']==1){
      $this->error('已经发表过！',U('Admin/Index/listEvent'));
    }else{
        $db = M('event')->where(array('id'=>$id))->save(array('active'=>1));
        if($db){
          $this->success('发表成功！',u('Admin/Index/listEvent'));
        }else{
          $this->error('发表失败！',U('Admin/Index/listEvent'));
        }
    }
  }

/*********************************添加实验室的图片新闻*************/
  public function addpicnews(){
     $this->display();
  }
  //处理图片新闻的上传
  public function phandle(){
    $info = photoUpload();
    $pathname = $info['photo']['savepath'].$info['photo']['savename'];
    $arr =array(
      'pathname'=>$pathname,
      'ptitle'=>I('ptitle'),
      'pcontent'=>I('pcontent'),
      );
    $db = M('picnews')->add($arr);
    if($db){
      $this->success('添加成功！',U('Admin/Index/listpicnews'));
    }else{
      $this->error('添加失败！',U('Admin/Index/listpicnews'));
    }  
  }
  //图片新闻列表
  public function listpicnews(){
        $count = M('picnews')->count();
        import('ORG.Util.Page');
        $page = new \Think\Page($count,6);
        $limit = $page ->firstRow.','.$page->listRows;
        $pic = M('picnews')->order('id desc')->limit($limit)->select();
        $this->pic = $pic;
        $this->page =  $page ->show();
        $this->display();
  }
  //图片新闻的删除
  public function delpic(){
    $id = I('id');
    $db = M('picnews')->where(array('id'=>$id))->delete();
    if($db){
      $this->success('添加成功！',U('Admin/Index/listpicnews'));
    }else{
      $this->error('删除失败！',U('Admin/Index/listpicnews'));
    }
  }
  //发表新闻
  public function apicnews(){
    $id = I('id');
    $db = M('picnews')->where(array('id'=>$id))->find();
    if($db['active']==1){
      $this->error('已经发表过！',U('Admin/Index/listpicnews'));
    }else{
        $db = M('picnews')->where(array('id'=>$id))->save(array('active'=>1));
        if($db){
          $this->success('发表成功！',u('Admin/Index/listpicnews'));
        }else{
          $this->error('发表失败！',U('Admin/Index/listpicnews'));
        }
    }
  }

/* 后期修改的*/
//修改图片新闻
public function repic(){
    $id = I('id');
     $kk = 'picnews';
    $db = M($kk)->where(array('id'=>$id))->find();
    $this->db = $db;        
    $this->display();
    
  }
  //修改图片新闻处理
  public function repichandle(){
       $id = $_GET['id'];
       $name = 'picnews';
       $hh = xiugai($name,$id);
       if($hh){
        $this->success('修改成功!',U('Admin/Index/listpicnews'),2);
       }else{
        $this->error('修改失败！',U('Admin/Index/listpicnews'),2);
       }
  }
  //修改技术文章
  public function reatc(){
      $id = I('id');
      $db = M('satc')->where(array('id'=>$id))->find();
      $this->db = $db;
      $this->display();
  }
//修改技术文章处理
  public  function reatchandle(){
    $id = $_GET['id'];
         $arr=array(
         'title' => I('tit'),
         'content' => I('con'),
        );
     $db = M('satc')->where(array('id'=>$id))->save($arr);
     if($db){
      $this->success('修改成功！',U('Admin/Index/listAtc'));
     }else{
      $this->error('修改失败！',U('Admin/Index/listAtc'));
     }       
  }
//修该大数据事件
  public function xiuevent(){
    $id = I('id');
    $db = M('event')->where(array('id'=>$id))->find();
    $this->db = $db;
    $this->display();
  }
//修改大数据事件的处理
public function xiueventhandle(){
      $id = $_GET['id'];
      $arr = array(
         'title'=>I('tit'),
         'content'=>I('con'),
        );
       $db = M('event')->where(array('id'=>$id))->save($arr);
       if($db){
        $this->success('修改成功！',U('Admin/Index/listEvent'));
       }else{
        $this->error('修改失败！',U('Admin/Index/listEvent'));
       }
    
    
}
// 修改实验室新闻
     public function relabnews(){
        $id = I('id');
        $this->db = M('labnews')->where(array('id'=>$id))->find();
        $this->display();
     }
//实验室新闻的修改处理
     public function relabnewshandle(){
      $id = $_GET['id'];  
      $arr  = array(
          'lntitle'=>I('lntitle'),
          'lncontent'=>I('lncontent')
        );
       $db = M('labnews')->where(array('id'=>$id))->save($arr);
       if($db){
        $this->success('修改成功！',U('Admin/Index/listLabNew'));
       }else{
        $this->error('修改！',U('Admin/Index/listLabNew'));
       }
     }
 //修改大数据人物
  public function reBdp(){
    $id = I('id');
    $this->db = M('bdpeople')->where(array('id'=>$id))->find();
    $this->display();
  }

 //修改大数据人物的处理
 public function reBdpHandle(){
      $info = photoUpload();
      $pn = $info[photo]['savepath'].$info[photo]['savename'];
       $id = $_GET['id'];
      if($info){
            $arr = array(
              'bname'=>I('bname'),
              'fpara'=>I('fpara'),
              'home'=>I('home'),
              'email'=>I('email'),
              'introduction'=>I('introduction'),
              'pathname'=>$pn
            );
        $db = M('bdpeople')->where(array('id'=>$id))->save($arr);
        if($db){
          $this->success('修改成功！',U('Admin/Index/listBdp'));
        }else{
          $this->error('修改失败！',U('Admin/Index/listBdp'));
        }
      }else{
            $arr = array(
              'bname'=>I('bname'),
              'fpara'=>I('fpara'),
              'home'=>I('home'),
              'email'=>I('email'),
              'introduction'=>I('introduction'),
            );
        $db = M('bdpeople')->where(array('id'=>$id))->save($arr);
        if($db){
          $this->success('修改成功！',U('Admin/Index/listBdp'));
        }else{
          $this->error('修改失败！',U('Admin/Index/listBdp'));
        }
      }
      
 }   

}


?>