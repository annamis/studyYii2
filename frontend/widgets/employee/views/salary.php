<?php foreach ($employees as $employee): ?>
    <h3>
        <?php echo $employee['last_name'];?>
        <?php echo $employee['first_name'];?>
        <?php echo $employee['middle_name'];?>
        (<?php echo $employee['position'];?>)
    </h3>
    <p><?php echo $employee['salary']; ?></p>
    <hr>
<?php endforeach;