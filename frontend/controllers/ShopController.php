<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Product;
use frontend\models\forms\AddToCartForm;
use Yii;

/**
 * @author anna
 */
class ShopController extends Controller
{

    public function actionIndex()
    {
        $productList = Product::find()->orderBy('price')->limit(5)->all();

        $model = new AddToCartForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Product is bought!');
            return $this->redirect(['site/index']);
        }

        return $this->render('index', [
                    'productList' => $productList,
        ]);
    }

}
