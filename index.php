<?php

//入口文件
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', true);

// 定义应用目录
define('APP_PATH', './Application/');

//定义运行缓存等目录
define('RUNTIME_PATH', './RunTime/');

//阻止自动生成安全文件
define('DIR_SECURE_FILENAME', false);

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';