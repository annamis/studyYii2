<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $productList[] frontend\models\Product */

$this->title = 'My Shop';
?>
<div class="site-index">

    <div class="jumbotron">

        <?php if (Yii::$app->user->identity): ?>
            <p>Hello, <?php echo Yii::$app->user->identity->username; ?>! Buy something!</p>
        <?php endif; ?>
    </div>

    <div class="body-content">
        <div class="row">
            <?php foreach ($productList as $product): ?>

                <div class="col-lg-4">
                    <div class="col-md-10">
                        <h2>Название товара: <?php echo $product->name; ?></h2>
                        <p>ID товара: <?php echo $product->id; ?></p>
                        <p>Цена: <?php echo $product->price; ?> $</p>

                        <?php $form = ActiveForm::begin(['id' => 'form-add-to-cart']); ?>
                        <div class="form-group">
                            <?= Html::submitButton('Купить', ['class' => 'btn btn-primary', 'name' => 'add-to-cart-button', 'value' => $product->id]) ?>
                        </div>
                        <?php ActiveForm::end(); ?>                        

                        <hr>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
