<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Order;

/**
 * @author anna
 */
class OrderController extends Controller
{

    public function actionCreate()
    {
        $model = new Order();


        if (Yii::$app->request->isPost) {

            $model->attributes = Yii::$app->request->post();

            if ($model->validate() && $model->save()) {
                Order::SendOrderToAdmin($model->attributes);
                Yii::$app->session->setFlash('info', 'Заказ оформлен успешно.');
            }
        }
        return $this->render('create', [
                    'model' => $model,
        ]);
    }

}
