<h1>Новый заказ!</h1>
<h1>Информация о заказе</h1>
<p> Имя покупателя: <?php echo $formData['name']; ?></p>
<p> Email покупателя: <?php echo $formData['email']; ?></p>
<hr>
<p> Ширина окна: <?php echo $formData['width']; ?></p>
<p> Высота окна: <?php echo $formData['height']; ?></p>
<p> Количество камер: <?php echo $formData['cameraCount']; ?></p>
<p> Общее количество створок: <?php echo $formData['doorsCount']; ?></p>
<p> Количество поворотных створок: <?php echo $formData['swingDoorsCount']; ?></p>
<p> Цвет: <?php echo $formData['color']; ?></p>
<p> Наличие подоконника: 
    <?php if ($formData['sill'] === 1): echo 'Да'; ?></p>
    <?php else: echo 'Нет'; ?>
    <?php endif;

