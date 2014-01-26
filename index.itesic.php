<?php

// change the following paths if necessary
$yii = dirname(__FILE__).'/yii/framework/yii.php';
$mainConfig = include dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
ini_set('display_errors',1);
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

//error_reporting(0); // Turn off all error reporting

require_once($yii);

$envConfig = include dirname(__FILE__).'/protected/config/main.itesic.php';
$config = CMap::mergeArray($mainConfig, $envConfig);

Yii::createWebApplication($config)->run();