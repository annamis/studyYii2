<?php

namespace frontend\widgets\employee;

use Yii;
use yii\base\Widget;
use frontend\models\Employee;

class EmployeeWidget extends Widget
{

    public $showLimit = null;

    public function run()
    {
        
        $count = Yii::$app->params['showEmployeesDefault'];
        $this->showLimit = Yii::$app->params['showEmployees'];
        
        if ($this->showLimit) {
            $count = $this->showLimit;
        }
        $employees = Employee::getBiggestSalary($count);

        return $this->render('salary', [
            'employees' => $employees,
        ]);
    }
}
