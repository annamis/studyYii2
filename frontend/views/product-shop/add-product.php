<?php
/* @var $this yii\web\View */
/* @var $product frontend\models\Product */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Добавить новый товар</h1>

<?php $form = ActiveForm::begin(); ?>
<?php echo $form->field($product, 'name'); ?>
<?php echo $form->field($product, 'price'); ?>
<?php echo $form->field($product, 'code'); ?>
<?php echo $form->field($product, 'status'); ?>
<?php echo $form->field($product, 'producer_id') ?>
<?php echo Html::submitButton('Добавить', [
    'class' => 'btn btn-primary',
]);
?>
<?php ActiveForm::end();


