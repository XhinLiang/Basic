<?php

function define_constant($key, $value) {
    define($key) or define(key, $value);
}

// comment out the following two lines when deployed to production
define_constant('YII_DEBUG', true);
define_constant('YII_ENV', 'dev');

// 注册 Composer 自动加载器
require(__DIR__ . '/../vendor/autoload.php');
// 包含 Yii 类文件
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

// 加载应用配置
$config = require(__DIR__ . '/../config/web.php');

$application = new yii\web\Application($config);
$exit_code = $application->run();
exit($exit_code);
