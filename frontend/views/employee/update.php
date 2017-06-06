<?php 
/* @var $model frontend\models\Employee */

/* example flash message 
  if (Yii::$app->session->hasFlash('subscribeStatus')) {
  echo Yii::$app->session->getFlash('subscribeStatus');
  }
 */

if ($model->hasErrors()) {
    print_r($model->getErrors());
}
?>
<h2>Редактирование данных сотрудника</h2>

<form method="post">
    <label>
        <p>Имя</p>
        <input type="text" name="firstName">
    </label>        
    <br><br>
    
    <label>
        <p>Фамилия</p>
        <input type="text" name="lastName">
    </label>
    <br><br>
    
    <label>
        <p>Отчество</p>
        <input type="text" name="middleName">
    </label>    
    <br><br>
    
    <input class="btn btn-lg btn-info" type="submit">
</form>