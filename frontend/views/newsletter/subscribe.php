<?php 
/* @var $model frontend\models\Subscribe */

/* example flash message 
  if (Yii::$app->session->hasFlash('subscribeStatus')) {
  echo Yii::$app->session->getFlash('subscribeStatus');
  }
 */

if ($model->hasErrors()) {
    print_r($model->getErrors());
}
?>

<form method="post">
    <label>
        <p>Email</p>
        <input type="text" name="email">
    </label>
    <br><br>
    <input class="btn btn-lg btn-info" type="submit">
</form>