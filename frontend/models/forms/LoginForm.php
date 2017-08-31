<?php

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\User;
use Yii;

/**
 * Description of SignupForm
 *
 * @author anna
 */
class LoginForm extends Model
{

    public $username;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['password', 'required'],
            ['password', 'validatePassword'],
        ];
    }

    public function login()
    {
        if ($this->validate()) {
            $user = User::findByUsername($this->username);
            return Yii::$app->user->login($user);
        }
        return false;
    }

    //собственный валидатор validatePassword(строка, которая соответствует названию поля, которое валидируется ('password', массив с параметрами)
    public function validatePassword($attribute, $params)
    {
        //используя имя пользователя найти запись в БД
        $user = User::findByUsername($this->username);
        //Сверить пароль в БД и в форме
        if (!$user || !$user->validatePassword($this->password)) {
            $this->addError($attribute, 'Incorrect password');
        }
    }

}
