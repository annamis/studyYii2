<?php

namespace console\models;

use Yii;

/**
 * @author anna
 */
class Subscriber
{
    public static function getSubscribers()
    {
        $sql = 'SELECT * FROM subscriber;';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
