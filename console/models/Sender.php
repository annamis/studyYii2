<?php

namespace console\models;

use Yii;

/**
 * @author anna
 */
class Sender
{

    /**
     * Send emails to subscribers with contents of news
     * @param array $subscribers
     * @param array $newsList
     */
    public static function run($subscribers, $newsList)
    {
        $viewData = ['newsList' => $newsList];
        
        $count = 0;

        foreach ($subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose('/mailer/newslist', $viewData)
                    ->setFrom('testannasmail@gmail.com')
                    ->setTo($subscriber['email'])
                    ->setSubject('Тема сообщения')
                    ->send();
            if ($result) {
                $count++;
            }
        }
        return $count;
    }
}
