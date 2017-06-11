<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * @author anna
 */
class UrlController extends Controller
{

    public function actionAlias()
    {

        Yii::setAlias('@radio', 'https://listen-radio.org/');
        $radioUrl = Yii::getAlias('@radio');
        
        $phpUpUrl = Yii::getAlias('@phpUp');
        
        return $this->render('alias', [
            'radioUrl' => $radioUrl,
            'phpUpUrl' => $phpUpUrl,         
        ]);
    }

}
