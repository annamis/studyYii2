<?php
/* @var $model frontend\models\Order */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>
<h2>Страница заказа окна</h2>
<p>Заполните форму</p>

<form method="post">

    <p>Ширина окна *</p>
    <input type="text" name="width" placeholder="70-210">
    <br><br>

    <p>Высота окна *</p>
    <input type="text" name="height" placeholder="100-200">
    <br><br>

    <p>Количество камер *</p>
    <input type="radio" name="cameraCount" value="1">1<br>
    <input type="radio" name="cameraCount" value="2">2<br>
    <input type="radio" name="cameraCount" value="3">3<br>
    <br>

    <p>Общее количество створок *</p>
    <input type="text" name="doorsCount">
    <br><br>

    <p>Количество поворотных створок *</p>
    <input type="text" name="swingDoorsCount">
    <br><br>

    <p>Цвет *</p>
    <select name="color">
        <option value="1">Белый</option>
        <option value="2">Черный</option>
        <option value="3">Коричневый</option>
    </select>
    <br><br>

    <p>Наличие подоконника *</p>
    <!--<input type="checkbox" name="sill[]" value="1">Да<br>-->
    <input type="radio" name="sill" value="1">Да<br>
    <input type="radio" name="sill" value="2">Нет<br>
    <br>

    <p>Ваше имя *</p>
    <input type="text" name="name">
    <br><br>

    <p>Email *</p>
    <input type="text" name="email">
    <br><br>

    <input class="btn btn-lg btn-info" type="submit" value='Заказать'>
</form>