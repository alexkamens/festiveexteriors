<?php
// var_dump($_POST);
// die();

session_start();

$email = $_POST['inputEmail'];
$logpassword = sha1($_POST['inputPassword']);
$submit = $_POST['submit'];

include "db.php";
$conn = DB::connect();

$stmt = $conn->prepare("SELECT * FROM 475data.users WHERE email = ?");
if (!$stmt) {
  header('Location: ../errors/500.html');
}

if (!$stmt->bind_param("s", $email)) {
  header('Location: ../errors/500.html');
}

if (!$stmt->execute()) {
  header('Location: ../errors/500.html');
}

if (!$stmt->bind_result($userID, $name, $email, $password, $cart)) {
  header('Location: ../errors/500.html');
}

if (!$stmt->fetch()) {//404 error
  header('Location: ../errors/404.html');
}

if ($logpassword == $password) {
  $_SESSION['loggedIn'] = true;
  $_SESSION['currentUser'] = [
    "email" => $email,
    "name" => $name,
    "password" => $password,
    "cart" => $cart,
    "userID" => $userID
  ];
  header('Location: ../pages/profile.php');
} else {
  header('Location: ../pages/index.php');
}

?>
