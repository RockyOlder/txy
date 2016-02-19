<?php

return array(
    //调试模式
    'APP_STATUS' => 'debug',
    'SHOW_PAGE_TRACE' => false,
    'LOAD_EXT_CONFIG' => 'database_config,base', //扩展配置
    'DEFAULT_GROUP' => 'Home',
    //URL模式
    'URL_MODEL' => 2,
    //配置URL对大小写不敏感
    'URL_CASE_INSENSITIVE' =>false,
    //类库
   // 'APP_AUTOLOAD_PATH' => '@.Common,@.Common.Apis,@.Common.Promotions,@.Common.Payments',
    //布局默认信息
    'LAYOUT_ON' => true,
    'LAYOUT_NAME' => 'layout',
    'TAGLIB_LOAD'   => true,    //自动加载自定义标签
    'VAR_LANGUAGE' => 'l', // 默认语言切换变量
    //自定义配置项
    'FX_TAOBAO_CENTER' => '', //淘宝授权中心化服务器
    'FX_TAOBAO_CENTER_API' => '', //淘宝授权中心化服务器
    'FX_TAOBAO_REDIRECT' => '', //淘宝API请求中转服务器
    'FX_TAOBAO_KEY' => '',
    'FX_TAOBAO_SECRET' => '',
	'TAOBAO_REQUEST_URL' => '',//淘宝无签名方式调用
	'FX_JD_CENTER' =>'', //京东授权中心化服务器
	'JD_REQUEST_URL'=>'',//京东接口请求地址
	'JD_GY_APPKEY'=>'',
	'JD_GY_SECRET'=>'',
    //文件缓存设置
    'DATA_CACHE_SUBDIR' => true,
    'DATA_PATH_LEVEL' => 2,
    //自定义模版常量
    'TMPL_PARSE_STRING' => array(
        '__TPL__'   => '/Public/Tpl/' . CI_SN . '/' . TPL .'/',         // 客户模版js路径替换规则
        '__JS__' => '/Public/Tpl/' . CI_SN . '/' . TPL . '/js/',         // 客户模版js路径替换规则
        '__IMAGES__' => '/Public/Tpl/' . CI_SN . '/' . TPL . '/images/', // 客户模版images路径替换规则
        '__CSS__' => '/Public/Tpl/' . CI_SN . '/' . TPL . '/css/',       // 客户模版css路径替换规则
        '__UPLOAD__' => '/Public/Uploads/' . CI_SN . '/',                   // 客户上传路径替换规则
        //'__FXCENTER__' => '',                               // 中心化管理地址
        '__FXCENTER__' => '',                               // 中心化管理地址
    ),
    //api的版本数组
    'API_VERSION'=>array(
        'Top'=>'标准版',
        'ZhiXun'=>'智讯版',
    ),
    //定义中心化SAAS API信息
    'SAAS_KEY'  =>  'test',
    'SAAS_SECRET'   => '85d6b7020a621e06b1dc55eadd226c62',
    //客户类型
    'CUSTOMER_TYPE' => '1',//1.B2B  2.B2C  3.B2B2C 默认B2B客户
    //开启自动升级
    'AUTO_SQL_UPDATE' => '0',//是否开启脚本自动升级
    'MEMCACHE_STAT' => 0,//是否开启Memcache缓存'
    'MEMCCACHE_HOST' => '127.0.0.1', //Memcache服务器IP地址
    'MEMCCACHE_PORT' => '11211', //Memcache服务器端口
    'MEMCCACHE_TIME' => '3600', //Memcache缓存有效时间

	//wap主题所在目录
	'WAP_TPL_DIR'         => 'wap',
    // 手机端app主题所在目录
    'APP_TPL_DIR'         => 'app',

    // 默认图片
    'DEFAULT_IMAGE_PATH' => '/Public/Uploads/goods_default.jpg',
    'DEFAULT_IMAGE_SIZE' => '300,300', // 默认宽高
	
	//'SESSION_TYPE'=>'Db',//数据库存储需要新增表fx_session
	
	'API_URL'=>'',
	'AUTO_SNYC_MEMBER' =>0,
	//开启积分抵扣限制
	'IS_POINT_USE' =>1,
	'POINT_USE_VALUE' =>100, //积分100分起抵扣
		
	//阿里云OCS配置
	'MEMCACHED_OCS' => false,
	'MEMCACHED_HOST'=>'',
	'MEMCACHED_USER' =>'',
	'MEMCACHED_PWD' => '',
	'DATA_CACHE_TIME'=>'3600',
	//上传到七牛服务器配置
	'UPLOAD_SITEIMG_QINIU' => array ( 
		'GY_QN_ON'=>'0',
		'driverConfig' => array (
		'secrectKey' => '', //<这里填七牛SK>
		'accessKey' => '',//<这里填七牛AK>
		'domain' => '',//<空间名称>.qiniudn.com
		'bucket' => '', //<空间名称>
		)	
	),
);
