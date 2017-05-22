<?php

namespace frontend\models;

use Yii;

/**
 * @author anna
 */
class News
{

    public static function countNews()
    {
        $sql = 'SELECT COUNT(id) FROM news';
        return Yii::$app->db->createCommand($sql)->queryScalar();
    }

}
