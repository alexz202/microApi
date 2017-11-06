<?php

use Phalcon\Mvc\Micro\Collection as MicroCollection;
use ZejiHRProj\Modules\Backend\Controllers\IndexController;
use ZejiHRProj\Modules\Backend\Controllers\ApiController;

//创建接口声明绑定 类型

$index = new MicroCollection();
// Set the main handler. ie. a controller instance
$index->setHandler(new IndexController());

// Set a common prefix for all routes
$index->setPrefix('/index');
// Use the method 'index' in OrdersController
$index->get('/', 'indexAction');

$index->get('/get', 'getAction');
// Use the method 'show' in OrdersController
$app->mount($index);


//API 正式上线此模块请屏蔽
$api = new MicroCollection();
$api->setHandler(new ApiController());
$api->setPrefix('/api');
$api->get('/test','testAction');
$app->mount($api);