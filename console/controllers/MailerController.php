<?php

namespace console\controllers;

use Yii;
use yii\helpers\Console;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
use console\models\Employee;
use console\models\Date;
use console\models\Log;
/**
 * @author anna
 */
class MailerController extends \yii\console\Controller
{
    public function actionSendToSubscriber()
    {
        $newsList = News::getList();

        $subscribers = Subscriber::getSubscribers();

        $count = Sender::run($subscribers, $newsList);
        if($count) {
            News::refreshStatus();
        }
        
        Console::output("\nEmails sent: {$count} \nNews status is changed");
    }
    
        public function actionSendToEmployee()
    {
        $employees = Employee::getEmployees();
        $date = Date::getDate();
        
        $count = Sender::send($employees, $date);
        if($count) {
            Console::output("Emails sent: {$count}\n");

            $log = Yii::$app->params['pathToLogSalaryLetter'];
            $result = Log::writeLetterInfoInLog($count, $date, $log);            
        }
        if($result) {
            Console::output("Info in log {$log}\n");
        }
        
    }
}
