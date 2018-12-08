<?php
include 'DataBaseConnection.php';

// Stores the date and time into two variables. The time will be accessed from the database at a later time.
// We will need the time to calculate the charges implemented on the customer.
// Sets the default time zone
date_default_timezone_set('America/New_York');
$time = date("g:i a");
$date = date("d-m-Y");

$sql = "Insert into records (time, date) values ('$time', '$date')";

$ticket = fopen("ticket.txt", "w") or die("Unable to open file!");
$txt = "  Thank you for choosing Cornell Inc. Parking Garages\n";
fwrite($ticket, $txt);
$txt = "        Please park at your designated spot\n";
fwrite($ticket, $txt);
$txt = "       You arrived at " . $time . " on " . $date . "\n";
fwrite($ticket, $txt);
$txt = "     Enjoy your stay and we will see you later.";
fwrite($ticket, $txt);
fclose($ticket);

//Checks for a successful connection to the database.
if($connection->query($sql) === TRUE) {
  header("location:proceed.html?error=0");
} else {
  header("location:accessGranted.html?error=1");
}

?>