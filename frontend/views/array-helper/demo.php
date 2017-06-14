<?php 
/* @var $employees array */
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$emails = ArrayHelper::getColumn($employees, 'email');
echo implode(', ', $emails);

//создание ассоциированного массива id => email
$listData = ArrayHelper::map($employees, 'id', 'email');

echo Html::dropDownList('emails', [], $listData);

