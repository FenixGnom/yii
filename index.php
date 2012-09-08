<?php
date_default_timezone_set('Europe/Moscow');
// change the following paths if necessary
$yii=dirname(__FILE__).'/../../../Yii/framework/YiiBase.php';



require_once($yii);
class Yii extends YiiBase {
    /**
     * @static
     * @return CWebApplication
     */
    public static function app() 
    {
        return parent::app();
    }
}

$config=dirname(__FILE__).'/protected/config/main.php';
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);


Yii::createWebApplication($config)->run();
