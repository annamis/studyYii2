<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Subscribe;

/**
 * @author anna
 */
class NewsletterController extends Controller
{

    public function actionSubscribe()
    {
        //Получение данных из формы. post() загружает данные из $_POST
        $formData = Yii::$app->request->post();

        //Создание экземпляра модели 
        $model = new Subscribe();

        //Проверяем отправилась ли форма. isPost становится true, если запрос POST 
        if (Yii::$app->request->isPost) {

            //Загрузка данных в модель
            $model->email = $formData['email'];

            //В случае успешной валидации модели и сохранения данных в базу. validate() returns true/false
            if ($model->validate() && $model->save()) {
                
                //Добавление Flash-сообщения
                Yii::$app->session->setFlash('info', 'Подписка оформлена');
            }
        }

        return $this->render('subscribe', [
                    'model' => $model,
        ]);
    }

}
