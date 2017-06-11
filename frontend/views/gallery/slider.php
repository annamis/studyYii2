<?php
/* @var $this yii\web\View */

use frontend\assets\SliderAsset;

SliderAsset::register($this);
$this->registerJsFile('@web/js/gallery/scripts_nivo.js', ['depends' => [
        SliderAsset::className(),
]]);
?>
<h1>Слайдер д/з</h1>

<div id="slider" class="nivoSlider">     
    <img src="/files/slider/slide1.jpg" alt="" />    
    <a href="http://listen-radio.org"><img src="/files/slider/slide2.jpg" alt="" title="#htmlcaption" /></a>     
    <img src="/files/slider/slide3.jpg" alt="" title="This is an example of a caption" />     
    <img src="/files/slider/slide4.jpg" alt="" /> 
</div> 
<div id="htmlcaption" class="nivo-html-caption">     
    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
</div>
