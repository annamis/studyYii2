<?php

namespace console\models;

use Yii;

/**
 * @author anna
 */
class Employee
{

    public static function getEmployees()
    {
        $sql = 'SELECT id, first_name, last_name, salary, email FROM employee;';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

}
