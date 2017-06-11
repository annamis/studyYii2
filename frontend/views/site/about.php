<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\widgets\newsList\NewsList;
use frontend\widgets\employee\EmployeeWidget;

$this->title = 'Сотрудники с наивысшим окладом';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="row">
        <div class="col-md-9">
            <h1><?= Html::encode($this->title) ?></h1>

            <?php echo EmployeeWidget::widget();?>
            
            <code><?= __FILE__ ?></code>
        </div>
        <div class="col-md-3">
            <?php echo NewsList::widget(['showLimit' => 3]); ?>
        </div>
    </div>

</div>
