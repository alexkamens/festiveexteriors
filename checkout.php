<?php
include "../parts/header.php";
include "../parts/session.php";
SessionClient::checkIfLoggedIn();
?>
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

include '../parts/DB.php';

 $conn = DB::connect();

 if(!$stmt = $conn->prepare(
   "UPDATE 475data.users SET cart = ? WHERE userID = ?"
 )){
   header('Location: ../errors/500.html');
 }
 if (!$stmt->bind_param('is',$total,$_SESSION["currentUser"]["userID"])){
   header('Location: ../errors/500.html');
 }
 if (!$stmt->execute()){
   header('Location: ../errors/500.html');
 }

 ?>

 <h2>Your total is <?php echo $total ?></h2>
<?php include "../parts/footer.php" ?>
