<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * @author anna
 */
class GalleryController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionSlider()
    {
        return $this->render('slider');
    }

}
