<?php

namespace console\controllers;

use Yii;
use yii\helpers\Console;
use console\models\Log;
/**
 * @author anna
 */
class LogController extends \yii\console\Controller
{
//    private $log;
//
//    public function __construct() 
//    {
//        $this->log = Yii::$app->params['pathToLogFile'];
//    }
//    
    public function actionWrite()
    {
        $log = Yii::$app->params['pathToLogFile'];

        $date = Log::getDateUkraine();
        Log::writeDateInLog($date, $log);
        
        Console::output("\nThis date: {$date} is written in file {$log}");
    }
}
