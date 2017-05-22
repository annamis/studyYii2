<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\News;

/**
 * @author anna
 */
class NewsController extends Controller
{

    public function actionIndex()
    {
        $countNews = News::countNews();

        return $this->render('index', [
            'countNews' => $countNews,
        ]);
    }

}
