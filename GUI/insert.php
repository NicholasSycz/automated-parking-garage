<?php
include 'DataBaseConnection.php';

// Stores the date and time into two variables. The time will be accessed from the database at a later time.
// We will need the time to calculate the charges implemented on the customer.
$time = date("H:i:s");
$date = date("Y-m-d");

$sql = "Insert into records (time, date) values ('$time', '$date')";

//Checks for a successful connection to the database.
if($connection->query($sql) === TRUE) {
  header("location:proceed.html?error=0");
} else {
  header("location:accessGranted.html?error=1");
}

?>