<?php
/*
1. Grabs the id number of the customer to retrieve their time spent 
2. Calculates the payment needed to exit the garage.
3. Checks successful connection to the database and sends customer to accessGranted.html
*/
include 'DataBaseConnection.php';

$slot = $_REQUEST['slot'];

$sql = "SELECT time FROM records where id = '$slot'";

function payment() {
  // Need if statement to check for time being over 24 hours
  // This is very wrong. Hahahaha
  date_default_timezone_set('America/New_York');
  $time = date("g:i a");  
  $timeSpent = $sql - $time;
  $total = $timeSpent / .50;
  return $total;
}

if($connection->query($sql) === TRUE) {
  header("location:../GUI/paid.html?error=0");
} else {
  header("location:../GUI/error.html?error=1");
}

$connection->close(); 
?>
