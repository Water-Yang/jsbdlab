<?php

return array(
    //'配置项'=>'配置值'

    //开启URL路由
    'URL_ROUTER_ON' => true,
//    'URL_ROUTE_RULES' => array(
//        '/^c_(\d+)$/' => 'Index/List/index?id=:1',//正则路由
//        ':id\d' => 'Index/Display/index'),


    /*配置模板文件相对位置*/
    'APP_DEBUG'=>true,
    'DB_FIELD_CACHE'=>false,
    'HTML_CACHE_ON'=>false,
    'SHOW_PAGE_TRACE' => true,

    'DB_TYPE'   =>'mysql',
    'DB_HOST'   =>'localhost',
    'DB_NAME'   => 'jsbdlab', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    =>'123456',
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'bd_', // 数据库表前缀
    'TMPL_PARSE_STRING' =>  array( // 添加输出替换
        //'__UPLOAD__'    =>  __ROOT__.'/Admin/Public/Uploads',//__ROOT__网站根目录，跟网站的入口文件位置相同
        '__JS__' =>  __ROOT__.'/Public/js',
        '__CSS__' => __ROOT__.'/Public/css',
        '__IMG__' => __ROOT__.'/Public/images',
        '__FONT__'=> __ROOT__.'/Public/font',
        '__PHOTO__'=> __ROOT__.'/Uploads',
        '__INDEX__'=>__ROOT__.'/Public/css/Index',
        '__ADMIN__'=>__ROOT__.'/Public/css/Admin'
    )
);
