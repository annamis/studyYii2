<?php

namespace frontend\controllers;

use frontend\models\Product;
use Yii;

class ProductShopController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $productList = Product::find()->orderBy('price')->all();
        return $this->render('index', [
                    'productList' => $productList,
        ]);
    }

    public function actionAddProduct()
    {
        $product = new Product;
        
        if ($product->load(Yii::$app->request->post()) && $product->save()) {
            Yii::$app->session->setFlash('success', 'Товар успешно добавлен!');
            return $this->redirect(['product-shop/index']);
        }
        
        return $this->render('add-product', [
            'product' => $product,
        ]);
    }

}
