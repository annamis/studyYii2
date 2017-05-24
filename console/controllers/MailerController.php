<?php

namespace console\controllers;

use yii\helpers\Console;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
/**
 * @author anna
 */
class MailerController extends \yii\console\Controller
{
    public function actionSend()
    {
        $newsList = News::getList();
        $subscribers = Subscriber::getSubscribers();
        
        $count = Sender::run($subscribers, $newsList);
        if($count) {
            News::refreshStatus();
        }
        
        Console::output("\nEmails sent: {$count} \nNews status is changed");
    }
}
