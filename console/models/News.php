<?php

namespace console\models;

use Yii;

/**
 * @author anna
 */
class News
{

    const STATUS_NOT_SEND = 1;
    const STATUS_SEND = 2;

    public static function getList()
    {
        $sql = 'SELECT * FROM news WHERE status = ' . self::STATUS_NOT_SEND;
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return self::prepareList($result);
    }

    private static function prepareList($result)
    {
        if (!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->cutStringBySymbols($item['content']);
            }
        }
        return $result;
    }

    public static function refreshStatus()
    {
        $sql = 'UPDATE news SET status = ' . self::STATUS_SEND .
                ' WHERE status = ' . self::STATUS_NOT_SEND;
        return Yii::$app->db->createCommand($sql)->execute();
    }

}
