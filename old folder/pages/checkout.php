<?php include "../parts/header.php" ?>
<?php
$total = 0;

if (isset($_POST['lights'])){
  $total = $total + 30;
}
if (isset($_POST['largeFigure'])){
  $total = $total + 15;
}
if (isset($_POST['roofWork'])){
  $total = $total + 50;
}

 ?>

 <h2>Your total is <?php echo $total ?></h2>
<?php include "../parts/footer.php" ?>
