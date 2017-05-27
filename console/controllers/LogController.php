<?php

namespace console\controllers;

use Yii;
use yii\helpers\Console;
use console\models\Log;
use console\models\Date;

/**
 * @author anna
 */
class LogController extends \yii\console\Controller
{

    public function actionWrite()
    {
        $log = Yii::$app->params['pathToLogFile'];
        $date = Date::getDateTime();
        $result = Log::writeDateInLog($date, $log);

        if ($result) {
            Console::output("\nThis date: {$date} is written in file {$log}");
        } else {
            Console::output("\nSometing went wrong");
        }
    }

}
