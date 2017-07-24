<?php

namespace frontend\controllers;

use frontend\models\Author;
use Yii;

class AuthorController extends \yii\web\Controller
{

    public function actionCreate()
    {
        $model = new Author();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Author added');
            return $this->redirect(['author/index']);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = Author::findOne($id);

        if ($model->delete()) {
            Yii::$app->session->setFlash('success', 'Author has been deleted');
        }

        return $this->redirect(['author/index']);
    }

    public function actionIndex()
    {
        $authorsList = Author::find()->all();
        return $this->render('index', [
                    'authorsList' => $authorsList,
        ]);
    }

    //в author/index передаем id
    public function actionUpdate($id)
    {
        // найти автора по id
        $model = Author::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Author edited');
            return $this->redirect(['author/index']);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

}
