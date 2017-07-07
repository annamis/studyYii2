<?php

namespace frontend\controllers;

use frontend\models\Book;
use Yii;

class BookshopController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $condition = ['publisher_id' => 1];
        //показать список всех книг из БД
        //создание объекта запроса к БД. find() вернет объет класса ActiveQuery
//        $bookList = Book::find()->where($condition)->orderBy('date_published')->limit(2)->all();
        $bookList = Book::find()->orderBy('date_published')->limit(20)->all();
        
        return $this->render('index', [
            'bookList' => $bookList,
        ]);
    }

    public function actionCreate()
    {
        $book = new Book;

        //если данные успешно загружены из модели и сохранены
        if ($book->load(Yii::$app->request->post()) && $book->save()) {
            Yii::$app->session->setFlash('success', 'Saved!');
            //1) перенаправление пользователя
//            return $this->redirect(['bookshop/index']);
            //2) обнуление данных (обновление страницы)
            return $this->refresh();
        }

        return $this->render('create', [
                    'book' => $book,
        ]);
    }

}
