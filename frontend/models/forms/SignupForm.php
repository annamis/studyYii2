<?php

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\User;
use Yii;
use frontend\models\events\UserRegisteredEvent;

/**
 * Description of SignupForm
 *
 * @author anna
 */
class SignupForm extends Model
{

    public $username;
    public $email;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            
            //поле, которое проверить; валидатор; с какой моделью связаться, чтобы проверить данные
            [['email'], 'unique', 'targetClass' => User::className()],         
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Save user
     * @return User|null
     */
    public function save()
    {

        if ($this->validate()) {
            //создание объекта User и заполнение атрибутов
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->created_at = $time = time();
            $user->updated_at = $time;
            $user->auth_key = Yii::$app->security->generateRandomString(); //генерация случайной строки, чтобы позже сохранять пароль в куки
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);
            
            if($user->save()) {
                
                $event = new UserRegisteredEvent();
                $event->user = $user;
                $event->subject = 'User registered';
                
                //3. Вызов события
                $user->trigger(User::USER_REGISTERED, $event); //имя события + объект события, в котором описываются параметры, передаваемые обработчикам событий
                return $user;
            }
        }
    }

}
