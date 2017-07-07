<?php
/* @var $this yii\web\View */
/* @var $productList frontend\models\Product */
?>
<h1>Товары</h1>

<?php foreach ($productList as $product): ?>
    <div class="col-md-4">
        <hr>
        <h2 class="bg-success"><?php echo $product->name; ?></h2>
        <p>Цена: <?php echo $product->price; ?>$</p>
        <p>Производитель: <?php echo $product->getProducersList(); ?></p>
        <p>Из категории:
        <?php foreach ($product->getCategories() as $category) : ?>
        <?php echo $category->getCategoryName(); ?>
        <?php endforeach; ?>
        </p>
        <p>В наличие: <?php echo $product->isProductAvaliable(); ?></p>
        <hr>
    </div>
<?php endforeach; ?>

