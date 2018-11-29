<?php
include 'DataBaseConnection.php';

// Store the day and the time the customer decided to choose our garage services. 
$date = date("Y-m-d");
$time = date("h:i:sa");

$sql = "Insert into ParkingGarage001 (date, time) values ('$date, $time')";

// Checks for a successful connection to the database.
if($connection->query($sql) === TRUE) {
  header("location:accessGranted.html?error=0");
} else {
  header("location:accessGranted.html?error=1");
}

?>