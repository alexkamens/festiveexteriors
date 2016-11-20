<?php
// We still need database information
class DB
{
  public static function connect($database="475data")
  {
    $server = "localhost";
    $username = "root";
    $password = "retepv16";
    $connection = new mysqli($server, $username, $password, $database);

    if ($connection->connect_error) {
     die('Failed to connect');
    }
    return $connection;
  }
}
 ?>
