<?php
namespace  Admin\Controller;
use Think\Controller;

class LabController extends CommonController{
      public function addlabint(){
      	$this->display();
      }
   //介绍及图片上传处理
      public function labinthandle(){
      	  // $info = photoUpload();
      	  // if($info){
      	  //    $pn = $info['photo']['savepath'].$info['photo']['savename'];
      	     $con = I('con');
      	     $arr = array(
                 'content' => $con
      	     	);
      	     $db = M('labint')->add($arr);
      	     if($db){
      	     	$this->success('编辑成功！',U('Admin/Lab/listlabint'));
      	     }else{
      	     	$this->error('编辑失败！',U('Admin/Lab/listlabint'));
      	     }
      }
     //介绍列表
      public  function listlabint(){
          $count = M('labint')->count();
          import('ORG.Util.Page');
		  //传入总页数和每页显示的数目
		  $page= new \Think\Page($count,10);
		  $limit = $page->firstRow.','.$page->listRows; 
		  // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		  $li=M('labint')->order('id desc')->limit($limit)->select();
		   $count = count($li);
		   for($i = 0;$i<$count;$i++){
		   	$li[$i]['content'] = strip_tags(htmlspecialchars_decode($li[$i]['content'] ));
		   	$li[$i]['content'] = mb_substr($li[$i]['content'],0,80,'utf-8');
		   }
    	  $this->page = $page->show();
          $this->li = $li;
          $this->display();
      }

      //激活介绍
      public function labactive(){
      	$id = I('id');
      	$db = M('labint')->where(array('id'=>$id))->find();     	
      	if($db['active']==0){
      		$arr = array(
                'active' =>1
      		  );
      		$db = M('labint')->where(array('id'=>$id))->save($arr);
      		if($db){
               $this->success('发表成功！',U('Admin/Lab/listlabint'));
      		}else{
              	$this->error('发表失败！',U('Admin/Lab/listlabint'));
      		}
      		
      	}else{
            $this->error('已经发表过！',U('Admin/Lab/listlabint'));
      	}
      }

      //删除介绍实验室的介绍
      public function dellabint(){
      	$id = I('id');
      	$db = M('labint')->where(array('id'=>$id))->delete();
      	if($db){
      		$this->success('删除成功！',U('Admin/Lab/listlabint'));
      	}else{
      		$this->error('删除失败！',U('Admin/Lab/listlabint'));
      	}
      }

      //修改实验室介绍
      public function relab(){
      	$id = I('id');
      	$this->db = M('labint')->where(array('id'=>$id))->find();
        $this->display();
      }
      //修改处理
      public function relabhandle(){
      	$id = $_GET['id'];
      	$arr=array(
      		'content'=>I('con')
      		);
      	$db = M('labint')->where(array('id'=>$id))->save($arr);
      	if($db){
      		$this->success('修改成功！',U('Admin/Lab/listlabint'));
      	}else{
      		$this->error('修改失败！',U('Admin/Lab/listlabint'));
      	}
      }
//添加招聘信息
      public  function addempinfo(){
        $this->display();      
      }
      public function addemphandle(){
        $arr = array(
            'content'=>I('con')
          );
        $db=M('employ')->add($arr);
        if($db){
          $this->success('添加成功！',U('Admin/Lab/listemploy'));
        }else{
          $this->error('添加失败！');
        }
      }

      public function listemploy(){
         $count = M('employ')->count();
          import('ORG.Util.Page');
          //传入总页数和每页显示的数目
          $page= new \Think\Page($count,10);
          $limit = $page->firstRow.','.$page->listRows; 
          // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
          $li=M('employ')->order('id desc')->limit($limit)->select();
           $count = count($li);
           for($i = 0;$i<$count;$i++){
            $li[$i]['content'] = strip_tags(htmlspecialchars_decode($li[$i]['content'] ));
            $li[$i]['content'] = mb_substr($li[$i]['content'],0,80,'utf-8');
           }
          $this->page = $page->show();
          $this->li = $li;
          $this->display();
      }
    //激活招聘信息
       public function employactive(){
        $id = I('id');
        $db = M('employ')->where(array('id'=>$id))->find();       
        if($db['active']==0){
          $arr = array(
                'active' =>1
            );
          $db = M('employ')->where(array('id'=>$id))->save($arr);
          if($db){
               $this->success('发表成功！',U('Admin/Lab/listemploy'));
          }else{
                $this->error('发表失败！',U('Admin/Lab/listemploy'));
          }
          
        }else{
            $this->error('已经发表过！',U('Admin/Lab/listemploy'));
        }
      }

       //删除招聘信息
      public function delemploy(){
        $id = I('id');
        $db = M('employ')->where(array('id'=>$id))->delete();
        if($db){
          $this->success('删除成功！',U('Admin/Lab/listemploy'));
        }else{
          $this->error('删除失败！',U('Admin/Lab/listemploy'));
        }
      }

      //修改招聘信息
      public function reemploy(){
        $id = I('id');
        $this->db = M('employ')->where(array('id'=>$id))->find();
        $this->display();
      }

      //修改招聘信息处理
      public function reemployhandle(){
        $id = $_GET['id'];
        $arr=array(
          'content'=>I('con')
          );
        $db = M('employ')->where(array('id'=>$id))->save($arr);
        if($db){
          $this->success('修改成功！',U('Admin/Lab/listemploy'));
        }else{
          $this->error('修改失败！',U('Admin/Lab/listemploy'));
        }
      }

      //编辑实验室设备信息
      public function addequ(){
        $this->display();
      }

      //实验室设备信息处理
      public function addequhandle(){
        $con = I('con');
        $arr = array(
             'content'=>$con
          );
        $db = M('equinfo')->add($arr);
        if($db){
          $this->success('添加成功！',U('Admin/Lab/listequ'));
        }else{
          $this->error('添加失败！',U('Admini/Lab/listequ'));
        }
      }

    //实验室设备信息列表
      public function listequ(){
        $count = M('equinfo')->count();
        import('ORG.Util.Page');
        $page = new \Think\Page($count,10);
        $limit = $page->firstRow.','.$page->listRows; 
        $list = M('equinfo')->order('id desc')->limit($limit)->select();
        $count = count($list);
        for($i = 0;$i<$count;$i++){
          $list[$i]['content']=strip_tags(htmlspecialchars_decode($list[$i]['content']));
          $list[$i]['content']=mb_substr($list[$i]['content'],0,80,'utf8');
        }
          $this->page = $page->show();
        $this->list= $list;
        $this->display();
      }

      //删除实验室信息
      public function delequ(){
        $id = I('id');
        $db = M('equinfo')->where(array('id'=>$id))->delete();
        if($db){
          $this->success('删除成功！',U('Admin/Lab/listequ'));
        }else{
          $this->error('删除失败！',U('Admin/Lab/listequ'));
        }
      }
      //修改实验室设备介绍
      public function reequ(){
        $id = I('id');
        $this->db = M('equinfo')->where(array('id'=>$id))->find();
        $this->display();
      }
      //修改实验室设备信息处理
      public function reequhandle(){
          $id = $_GET['id'];
          $con = I('con');
          $arr=array(
            'content'=>$con
            );
          $db = M('equinfo')->where(array('id'=>$id))->save($arr);

          if($db){
            $this->success('修改成功！',U('Admin/Lab/listequ'));
          }else{
            $this->error('修改失败！',U('Admin/Lab/listequ'));
          }
      }

       //激活设备信息
       public function equactive(){
        $id = I('id');
        $db = M('equinfo')->where(array('id'=>$id))->find();       
        if($db['active']==0){
          $arr = array(
                'active' =>1
            );
          $db = M('equinfo')->where(array('id'=>$id))->save($arr);
          if($db){
               $this->success('发表成功！',U('Admin/Lab/listequ'));
          }else{
                $this->error('发表失败！',U('Admin/Lab/listequ'));
          }
          
        }else{
            $this->error('已经发表过！',U('Admin/Lab/listequ'));
        }
      }

    //添加首页的图片新闻
    public function addfpic(){
         $this->display();
    }
    //添加首页图片的处理
     public function addfpichandle(){
         $title = I('tit');
         $info = photoUpload();
         $pn = $info['photo']['savepath'].$info['photo']['savename'];
         $arr = array(
             'title'=>$title,
             'pathname'=>$pn
         );
         $db = M('fpic')->add($arr);
         if($db){
             $this->success('添加成功！',U('Admin/Lab/listfpic'));
     }else{
         $this->error('添加失败！',U('Admin/Lab/listfpic'));
         }
     }
    //添加首页图片的列表
    public function listfpic(){
        $count = M('fpic')->count();
        import('ORG.Util.Page');
        $page = new \Think\Page($count,10);
        $limit = $page->firstRow.','.$page->listRows;
        $list = M('fpic')->order('id desc')->limit($limit)->select();
        $this->list= $list;
        $this->page = $page->show();
        $this->display();
    }
    //首页图片的删除
    public function delfpic(){
        $id = I('id');
        $db = M('fpic')->where(array('id'=>$id))->delete();
        if($db){
            $this->success('删除成功！',U('Admin/Lab/listfpic'));
        }else{
            $this->error('删除失败！',U('Admin/Lab/listfpic'));
        }
    }
    //发表首页图片
    public  function fpicactive(){
        $id = I('id');
        $db = M('fpic')->where(array('id'=>$id))->find();
        if($db['active']==0){
            $arr = array(
                'active' =>1
            );
            $db = M('fpic')->where(array('id'=>$id))->save($arr);
            if($db){
                $this->success('发表成功！',U('Admin/Lab/listfpic'));
            }else{
                $this->error('发表失败！',U('Admin/Lab/listfpic'));
            }

        }else{
            $this->error('已经发表过！',U('Admin/Lab/listfpic'));
        }

    }
    //取消首页图片的发表
    public function cclfpic(){
      $id = I('id');
      $db = M('fpic')->where(array('id'=>$id))->find();
      $arr= array('active'=>0);
      $db = M('fpic')->where(array('id'=>$id))->save($arr);
      if($db){
        $this->success('取消成功！');
      }else{
        $this->error('取消失败！');
      }
    }
  //实验室图片
    public function addlpic(){
        $this->display();
    }
    //添加图片的处理
    public function  addlpichandle(){
        $info = photoUpload();
        $pn = $info['photo']['savepath'].$info['photo']['savename'];
        $db = M('lpic')->add(array('pathname'=>$pn));
        if($db){
            $this->success('添加成功！',U('Admin/Lab/listlpic'));
        }else{
            $this->error('添加失败！',U('Admin/Lab/lsitlpic'));
        }
    }
    //图片列表
    public function listlpic(){
        $count = M('lpic')->count();
        import('ORG.Util.Page');
        $page = new \Think\Page($count,6);
        $limit = $page->firstRow.','.$page->listRows;
        $list = M('lpic')->order('id desc')->limit($limit)->select();
        $this->list= $list;
        $this->page = $page->show();
        $this->display();

    }

    //发表实验室图片
    public  function lpicactive(){
        $id = I('id');
        $db = M('lpic')->where(array('id'=>$id))->find();
        if($db['active']==0){
            $arr = array(
                'active' =>1
            );
            $db = M('lpic')->where(array('id'=>$id))->save($arr);
            if($db){
                $this->success('发表成功！',U('Admin/Lab/listlpic'));
            }else{
                $this->error('发表失败！',U('Admin/Lab/listlpic'));
            }

        }else{
            $this->error('已经发表过！',U('Admin/Lab/listlpic'));
        }

    }
    public function dellpic(){
        $id = I('id');
        $db = M('lpic')->where(array('id'=>$id))->delete();
        if($db){
            $this->success('删除成功！',U('Admin/Lab/listlpic'));
        }else{
            $this->error('删除失败！',U('Admin/lab/listlpic'));
        }
    }
     //用户设备信息介绍
    public function adduinfo(){
        $this->display();

    }
    //用户设备信息的处理
    public function adduinfohandle(){
        $con = I('con');
        $db  = M('uinfo')->add(array('content'=>$con));
        if($db){
              $this->success(' 添加成功！',U('Admin/Lab/listuinfo'));
            }else{
              $this->error('添加失败！',U('Admin/Lab/adduinfo'));
            }
    }

    //用户信息设备列表
    public function listuinfo(){
        $count = M('uinfo')->count();
        import('ORG.Util.Page');
        $page = new \Think\Page($count,10);
        $limit = $page->firstRow.','.$page->listRows;
        $list = M('uinfo')->order('id desc')->limit($limit)->select();
        $count = count($list);
        for($i = 0;$i<$count;$i++){
            $list[$i]['content']=strip_tags(htmlspecialchars_decode($list[$i]['content']));
            $list[$i]['content']=mb_substr($list[$i]['content'],0,80,'utf8');
        }
        $this->list= $list;
        $this->page = $page->show();
        $this->display();

    }

    //发表 实验室用户的介绍信息
    public  function uinfoactive(){
        $id = I('id');
        $db = M('uinfo')->where(array('id'=>$id))->find();
        if($db['active']==0){
            $arr = array(
                'active' =>1
            );
            $db = M('uinfo')->where(array('id'=>$id))->save($arr);
            if($db){
                $this->success('发表成功！',U('Admin/Lab/listuinfo'));
            }else{
                $this->error('发表失败！',U('Admin/Lab/listuinfo'));
            }
        }else{
            $this->error('已经发表过！',U('Admin/Lab/listuinfo'));
        }

    }
    //删除
    public function deluinfo(){
        $id = I('id');
        $db = M('uinfo')->where(array('id'=>$id))->delete();
        if($db){
            $this->success('删除成功！',U('Admin/Lab/listuinfo'));
        }else{
            $this->error('删除失败！',U('Admin/lab/listuinfo'));
        }
    }
   //修改用户设备信息
    public function reuinfo(){
      $id = I('id');
      $db = M('uinfo')->where(array('id'=>$id))->find();
      $this->uinfo = $db;
      $this->display();
    }

    public function reuinfohandle(){
      $id = $_GET['id'];
      $con = I('con');
      $arr = array('content'=>$con);
      $db = M('uinfo')->where(array('id'=>$id))->save($arr);
      if($db){
        $this->success('修改成功！',U('Admin/Lab/listuinfo'));
      }else{
        $this->error('修改失败！',U('Admin/Lab/listuinfo'));
      }
    }

    public function repwd(){
      $this->display();
    }

    public function repwdhandle(){
         $id = $_SESSION['user_id'];
         $user = $_SESSION['username'] ;
         $pwd = I('password1');
         $num1 = md5(rand(0, 100));
         $num2 = md5(rand(0, 100));
         $psd = md5($num1.md5($pwd).$num2.md5($user));
         $arr = array(
             'num1' =>$num1,
             'num2' =>$num2,
             'psd' =>$psd,
             'username'=>$user
          );
         $db = M('user')->where(array('id'=>$id))->save($arr);
          session_unset();
          session_destroy();
         // $db = M('user')->add($arr);
         if($db){
          $this->success('修改成功！,请重新登录！');
         }
    }
  
}

?>