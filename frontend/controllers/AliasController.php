<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * @author anna
 */
class AliasController extends Controller
{

    public function actionExample()
    {
        
        $result = mkdir(Yii::getAlias('@files').'/test3');
        var_dump($result);
    }
}
