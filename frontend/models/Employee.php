<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Employee extends Model
{

    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;
    public $birthDate;
    public $hireDate;
    public $city;
    public $position;
    public $idCode;

    public function scenarios()
    {

        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'middleName', 'email', 'birthDate', 'hireDate', 'city', 'position', 'idCode'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }

    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['birthDate', 'hireDate'], 'date', 'format' => 'php:Y-m-d'],
            [['city'], 'integer'],
            [['position'], 'string'],
            [['idCode'], 'string', 'length' => 10],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
            [['hireDate', 'position', 'idCode'], 'required', 'on' => self::SCENARIO_EMPLOYEE_REGISTER],
        ];
    }

    public function attributeLabels()
    {
        return [
            'firstName' => 'Имя',
            'lastName' => 'Фамилия',
            'salary' => 'Оклад',
            'birthDate' => 'Дата рождения',
            'hireDate' => 'Дата приема на работу',
            'city' => 'Город',
            'position' => 'Должность',
            'idCode' => 'Идентификационный код',
        ];
    }

    public function save()
    {
        $sql = "INSERT INTO employee (id, first_name, last_name, middle_name, email, birth_date, hire_date, city, position, id_code) "
                . "VALUES (null, '{$this->firstName}', '{$this->lastName}', '{$this->middleName}', '{$this->email}', '{$this->birthDate}', '{$this->hireDate}', '{$this->city}', '{$this->position}', '{$this->idCode}')";
        return Yii::$app->db->createCommand($sql)->execute();
    }

    public static function getBiggestSalary($count)
    {
        $count = intval($count);
        $sql = 'SELECT * FROM employee ORDER BY salary DESC LIMIT ' . $count;
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    
    public static function find()
    {
        $sql = 'SELECT * FROM employee';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
