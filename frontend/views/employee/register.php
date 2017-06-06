<?php
/* @var $model frontend\models\Employee */

/* example flash message 
  if (Yii::$app->session->hasFlash('subscribeStatus')) {
  echo Yii::$app->session->getFlash('subscribeStatus');
  }
 */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>
<h2>Регистрация нового сотрудника</h2>

<form method="post">
    <p>Имя *</p>
    <input type="text" name="firstName">
    <br><br>

    <p>Фамилия *</p>
    <input type="text" name="lastName">
    <br><br>

    <p>Отчество</p>
    <input type="text" name="middleName">
    <br><br>

    <p>Email *</p>
    <input type="text" name="email">
    <br><br>

    <p>Дата рождения</p>
    <input type="text" name="birthDate">
    <br><br>

    <p>Дата начала работы *</p>
    <input type="text" name="hireDate">
    <br><br>

    <p>Город </p>
    <select name="city">
        <!--<option disabled="disabled" selected="selected" value="0">Выберите город</option>-->
        <option value="1">Киев</option>
        <option value="2">Житомир</option>
        <option value="3">Одесса</option>
    </select>
    <br><br>

    <p>Должность *</p>
    <input type="text" name="position">
    <br><br>

    <p>Идентификационный код *</p>
    <input type="text" name="idCode">
    <br><br>

    <input class="btn btn-lg btn-info" type="submit">
</form>