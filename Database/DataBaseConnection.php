<?php
/*
Connects to the specified server and is called in insert.php
*/

  $serverName = "localhost";
  $databaseName = "parkinggarage001";
  $username = "root";
  $password = "";

  // Create a connection to the database.
  $connection = new mysqli($serverName, $username, $password, $databaseName);

  // Check the connection to the database.
  if($connection->connect_error) {
    die("Connection failed: ". $connection->connect_error);
  } 
?>