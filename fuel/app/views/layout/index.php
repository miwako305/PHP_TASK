<h1><?php echo $title; ?></h1>
<?php for ($i = 0; $i < 3; $i++): ?>

<?php echo $user[$i]['date'];  ?>
<?php echo $user[$i]['body'];   ?><br>
<?php endfor; ?>
