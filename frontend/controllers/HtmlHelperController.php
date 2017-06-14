<?php

namespace frontend\controllers;

/**
 * @author anna
 */
class HtmlHelperController extends \yii\web\Controller
{

    public function actionDemo()
    {
        return $this->render('demo');
    }

    public function actionEscapeOutput()
    {
        $comments = [
            [
                'id' => 10,
                'author' => 'Mark',
                'text' => 'Hello!',
            ],
            [
                'id' => 11,
                'author' => 'fsociety',
                'text' => '<b>Hello!</b><script>alert("How are you?");</script>',
            ],
        ];
        return $this->render('escape-output', [
            'comments' => $comments,
        ]);
    }

}
