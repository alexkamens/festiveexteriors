<?php
  class SessionClient
  {
    public static function checkIfLoggedIn()
    {
      if ($_SESSION["loggedIn"] == false) {
        header("Location: index.php");
      }
    }
    public static function setLoggedIn()
    {
      session_start();
      $_SESSION["loggedIn"] = true;
    }
  }

 ?>
