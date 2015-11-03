<?php
function p($arr){
   echo '<pre>'.print_r($arr,true).'</pre>';
}
// /**
//  * 邮件发送函数
//  */
//     function sendMail($to, $title, $content) {
     
//         // Vendor('PHPMailer.PHPMailerAutoload'); 
//         vendor('PHPMailer.class#phpmailer');    
//         $mail = new \PHPMailer(); //实例化
//         $mail->IsSMTP(); // 启用SMTP
//         $mail->Host=C('MAIL_HOST'); //smtp服务器的名称（这里以QQ邮箱为例）
//         $mail->SMTPAuth = C('MAIL_SMTPAUTH'); //启用smtp认证
//         $mail->Username = C('MAIL_USERNAME'); //你的邮箱名
//         $mail->Password = C('MAIL_PASSWORD') ; //邮箱密码
//         $mail->From = C('MAIL_FROM'); //发件人地址（也就是你的邮箱地址）
//         $mail->FromName = C('MAIL_FROMNAME'); //发件人姓名
//         $mail->AddAddress($to,"尊敬的客户");
//         $mail->WordWrap = 50; //设置每行字符长度
//         $mail->IsHTML(C('MAIL_ISHTML')); // 是否HTML格式邮件
//         $mail->CharSet=C('MAIL_CHARSET'); //设置邮件编码
//         $mail->Subject =$title; //邮件主题
//         $mail->Body = $content; //邮件内容
//         $mail->AltBody = "这是一个纯文本的身体在非营利的HTML电子邮件客户端"; //邮件正文不支持HTML的备用显示
//         return($mail->Send());
//     }
    
    //图片上传
    function photoUpload(){
        //照片上传
        $upload = new \Think\Upload();
        // 实例化上传类
        $upload->maxSize   =     3145728 ;
        //开启子目录
        $upload->autoSub = true;
        // 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
        // 设置附件上传类型
        $upload->rootPath  ='./Uploads';
        // 设置附件上传目录
         // 上传文件
        return( $upload->upload());
    }
    //列表升序
     function upOrder($tablename,$id){
      $db =M($tablename)->where(array('id>'.$id))->select();
       if($db){
         $aid = $db[0]['id'];
         $zdb = M($tablename)->where(array('id'=>$aid))->save(array('id'=>0));
         $adb = M($tablename)->where(array('id'=>$id))->save(array('id'=>$aid));
         $ddb = M($tablename)->where(array('id'=>0))->save(array('id'=>$id));
         if($db && $zdb && $adb && $ddb){
            return 1;
          }else{
            return 0;
          }
       }else{
        return 0;
       }
     
    }
    //列表降序
     function downOrder($tablename,$id){
      $db =M($tablename)->where(array('id<'.$id))->order('id desc')->select();

      if($db){
        $aid = $db[0]['id'];
        $zdb = M($tablename)->where(array('id'=>$aid))->save(array('id'=>0));
        $adb = M($tablename)->where(array('id'=>$id))->save(array('id'=>$aid));
        $ddb = M($tablename)->where(array('id'=>0))->save(array('id'=>$id));
        if($db && $zdb && $adb && $ddb){
          return 1;
        }else{
          return 0;
        }

      }else{
        return 0;
      }

    }



  //修改文章的函数
  //$tablename数据库的表名
  //$id 传过来的id 号
function xiugai($tablename,$id){
   $info = photoUpload();
    if($info){
       $pathname = $info['photo']['savepath'].$info['photo']['savename'];
         $arr =array(
            'pathname'=>$pathname,
            'ptitle'=>I('ptitle'),
            'pcontent'=>I('pcontent'),
          );
         $db = M($tablename)->where(array('id'=>$id))->save($arr);
         if($db){
            return 1;
         }else{
           return 0;
         }
    }else{
         $arr =array(
            'ptitle'=>I('ptitle'),
            'pcontent'=>I('pcontent'),
          );
        $db = M('picnews')->where(array('id'=>$id))->save($arr);
        if($db){
            return 1;
         }else{
           return 0;
         }
    }

}
?>
