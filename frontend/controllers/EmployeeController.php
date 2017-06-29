<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;
use frontend\models\example\Human;
use frontend\models\example\Animal;

/**
 * @author anna
 */
class EmployeeController extends Controller
{

    public function actionIndex()
    {
        $employee1 = new Employee();
        $employee1->firstName = 'Alex';
        $employee1->lastName = 'Smith';
        $employee1->middleName = 'John';
        $employee1->salary = 1000;

        //1 Интерфейс ArrayAccess обеспечивает доступ к объектам как к массиву
        echo $employee1['salary'];
        echo '<hr>';

        //2 Интерфейс Traversable определяет, является ли класс обходимым (traversable) с использованием foreach.
        foreach ($employee1 as $attribute => $value) {
            echo "$attribute:$value <br>";
        }
        echo '<hr>';

        //3 Интерфейс Arrayable предоставляет настраиваемое представление экземпляров
        // (например с помощью метода ToArray() , экземпляр класса может быть превращен в массив.
        $array = $employee1->toArray();
        echo '<pre>';
        print_r($array);
        echo '</pre>';

        echo '<pre>';
        print_r($employee1->getAttributes()); //4 метод реализован при помощи трейтов
        print_r($employee1->attributes); //5 метод реализован при помощи магических методов
        print_r($employee1->attributes()); // 6
        echo '</pre>';
    }

    public function actionTest()
    {
        $human1 = new Human();
        $animal1 = new Animal();

        $human1->walk();
        $animal1->walk();
    }

    public function actionRegister()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

        //Если данные загружены
        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Registered!');
            }
        }

        return $this->render('register', [
                    'model' => $model,
        ]);
    }

    public function actionUpdate()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {

            //Массовое присваивание заполняет атрибуты модели путем присвоения входных данных свойству yii\base\Model::$attributes
            $model->attributes = $formData;

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('info', 'Информация обновлена');
            }
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

}
