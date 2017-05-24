<?php

namespace console\models;

use Yii;

/**
 * @author anna
 */
class Log
{
    public static function getDateUkraine()
    {           
        Yii::$app->formatter->locale = 'ru-RU';
        Yii::$app->formatter->timeZone = 'Europe/Kiev';
        return Yii::$app->formatter->asDatetime('now', 'yyyy-MM-dd HH:mm:ss');  
    }
    
    public static function writeDateInLog($date, $log)
    {           
        $current = file_get_contents($log);
        $current .= "$date\n";
        file_put_contents($log, $current);
    }
}
