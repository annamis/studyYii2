<?php

use yii\helpers\Html;

echo Html::tag('p', 'Text');

$array = [
    '1' => 'Beirut',
    '2' => 'Berlin',
    '3' => 'Budapest',
    '4' => 'Rome',
];

echo Html::dropDownList('city_id', [], $array);
echo Html::radioList('city_id', [], $array);
echo Html::checkboxList('city_id', [], $array);
echo Html::img('/files/photos/burger.jpg', ['alt' => 'Бургер']);
