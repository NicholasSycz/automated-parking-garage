<?php
include 'DataBaseConnection.php';

// THIS IS ALL FUCKED BOYSSS
// Store the day and the time the customer decided to choose our garage services. 
$timestamp = date("Y-m-d H:i:s");

$sql = "Insert into 001 (date) values ('$timestamp')";

//Checks for a successful connection to the database.
if($connection->query($sql) === TRUE) {
  header("location:proceed.html?error=0");
} else {
  header("location:accessGranted.html?error=1");
}

?>