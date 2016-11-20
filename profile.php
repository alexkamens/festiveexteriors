<?php
  include "../parts/header.php";
  include "../parts/session.php";
  SessionClient::checkIfLoggedIn();
  include "../parts/DB.php";
  $conn = DB::connect("475data");
?>
Welcome <?php echo $_SESSION["currentUser"]["name"]; ?>
<a href="../parts/loggout.php" class="btn-lg btn-danger" role="button">Log Out</a>
<?php include "../parts/footer.php"; ?>
