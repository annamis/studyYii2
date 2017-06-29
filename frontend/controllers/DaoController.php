<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

/**
 * Description of DaoController
 *
 * @author anna
 */
class DaoController extends Controller
{

    public function actionIndex()
    {
        //#1
        $sql1 = 'SELECT * FROM city';
        $result1 = Yii::$app->db->createCommand($sql1)->queryAll();
        echo '<pre>';
        print_r($result1);
        echo '</pre>';
        echo '<hr>';

        //#2
        $sql2 = 'SELECT * FROM test';
        $result2 = Yii::$app->db2->createCommand($sql2)->queryAll();
        echo '<pre>';
        print_r($result2);
        echo '</pre>';

        return $this->render('index');
    }

}
