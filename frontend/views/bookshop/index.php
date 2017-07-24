<?php
/* @var $this yii\web\View */
/* @var $bookList[] frontend\models\Book */

use yii\helpers\Url;
?>
<h1>Books!</h1>
<a href="<?php echo Url::to(['create']);?>" class="btn btn-primary">Create a book</a>
<br><br>
<?php foreach ($bookList as $book): ?>
    <div class="col-md-10">
        <h2><?php echo $book->name; ?></h2>
        <p><?php echo $book->getDatePublished(); ?></p>
        <p><?php echo $book->getPublisherName(); ?></p>
        
        <?php foreach ($book->getAuthors() as $author) : ?>
        <p><?php echo $author->getFullName(); ?></p>
        <?php endforeach; ?>
        <hr>
    </div>
<?php endforeach; 