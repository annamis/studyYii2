<?php

namespace common\components;

use Yii;
use yii\base\Component;
use common\components\UserNotificationInterface;

/**
 * @author anna
 */
class EmailService extends Component
{

    /**
     * @param UserNotificationInterface $event
     * @return bool
     */
    public function notifyUser(UserNotificationInterface $event)
    {
        return Yii::$app->mailer->compose()
                        ->setFrom('service.email@yii2frontend.com')
                        ->setTo($event->getEmail())
                        ->setSubject($event->getSubject())
                        ->send();
    }

    /**
     * @param UserNotificationInterface $event
     * @return bool
     */
    public function notifyAdmins(UserNotificationInterface $event)
//$event - вся информация о событии, объект класса yii\base\Event (смысл - создать свой класс,
// который описывает наше событие и наполнить его атрибутами), далее создаем frontend\models\events\UserRegisteredEvent
    {
        return Yii::$app->mailer->compose()
                        ->setFrom('service.email@yii2frontend.com')
                        ->setTo('annamishchanchuk@gmail.com')
                        ->setSubject($event->getSubject())
                        ->send();
    }

}
