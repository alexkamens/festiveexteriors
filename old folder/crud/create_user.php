<?php
session_start();

$hash = sha1($_POST["inputPassword"]);
if ($_POST["inputPassword"] !== $_POST["inputCPassword"]) {
  $_SESSION['errMes'] = 'Set';
  die(header('Location: ../pages/sign_up.php'));
}

if (strlen($_POST["inputPassword"]) <= 6) {
  $_SESSION['passMes'] = 'Set';
  die(header('Location: ../pages/sign_up.php'));
}

if (strlen($_POST["inputEmail"]) <= 6) {
  $_SESSION['emailMes'] = 'Set';
  die(header('Location: ../pages/sign_up.php'));
}

include '../parts/DB.php';

 $conn = DB::connect();

 if(!$stmt = $conn->prepare(
   "INSERT INTO 475data.users
     (name, email, password, cart)
   VALUES
     (?,?,?,'')
 ")){
   header('Location: ../errors/500.html');
 }

 if(!$stmt->bind_param(
   "sss",
   $_POST["inputName"],
   $_POST["inputEmail"],
   $hash
 )){
   header('Location: ../errors/500.html');
 }

 if(!$stmt->execute()){
   header('Location: ../errors/500.html');
 }

 header('Location: ../pages/index.php');
 ?>
