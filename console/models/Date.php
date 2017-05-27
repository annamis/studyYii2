<?php

namespace console\models;

use Yii;

/**
 * @author anna
 */
class Date
{

    public static function getDateTime()
    {
        return Yii::$app->formatter->asDatetime('now', 'yyyy-MM-dd HH:mm:ss');
    }

    public static function getDate()
    {
        return Yii::$app->formatter->asDate('now', 'yyyy-MM-dd');
    }
}
