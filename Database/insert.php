<?php
/*
1. Inserts the time and date the user entered the parking garage into the database table records.
2. Write to file ticket.txt and gives the customer important information. This will be the ticket printed.
3. TODO: Implement ticket printed to 
4. Checks for a successful connection and sends you to accessGranted.html if valid connection is made.
*/
include 'DataBaseConnection.php';

// Sets the default time zone
date_default_timezone_set('America/New_York');

// Grabs the current time and date
$time = date("g:i a");
$date = date("d-m-Y");

$sql = "Insert into records (time, date) values ('$time', '$date')";

//Opens ticket and writes to it.
$ticket = fopen("ticket.txt", "w") or die("Unable to open file!");
$txt = "Thank you for choosing Cornell Inc. Parking Garages\n";
fwrite($ticket, $txt);
$txt = "Please park at your designated spot\n";
fwrite($ticket, $txt);
$txt = "You will not have access to your spot once you leave\n";
fwrite($ticket, $txt);
$txt = "You arrived at " . $time . " on " . $date . "\n";
fwrite($ticket, $txt);
$txt = "If you have any concerns or questions let us know at: CornellInc@gmail.com\n";
fwrite($ticket, $txt);
$txt = "Enjoy your stay and we will see you later.";
fwrite($ticket, $txt);


// 3. TODO

//Checks for a successful connection to the database.
if($connection->query($sql) === TRUE) {
  header("location:../GUI/proceed.html?error=0");
} else {
  header("location:../GUI/accessGranted.html?error=1");
}

?>