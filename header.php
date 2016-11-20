<?php
  if (isset($page)==false) {
    $page="";
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Festive Exteriors</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script type="text/javascript" src="../java/script.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <!-- <a class="navbar-brand" href="index.php">Festive Exteriors</a> -->
            <a href="index.php"><img src="../images/Logo.jpg" alt=""  height="50" width="50" /></a>
          </div>
          <ul class="nav navbar-nav">
            <?php
              session_start();
              if((isset($_SESSION["loggedIn"]))) {
                 echo "<li><a href='profile.php'>Profile</a></li>";
                 echo "<li><a href='catalog.php'>Get some help</a></li>";
                 echo "<li><a href='checkout.php'>Cart</a></li>";
                 echo "<li><a href='../parts/loggout.php'>Sign Out</a></li>";
               } else {
                 echo "<li><a href='sign_up.php'>Sign Up</a></li>";
                 echo "<li><a href='log_in.php'>Log In</a></li>";
               }
             ?>
          </ul>
        </div>
      </nav>
    </header>
