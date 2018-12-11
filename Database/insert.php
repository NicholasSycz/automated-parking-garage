<?php
/*
1. Inserts the time and date the user entered the parking garage into the database table records.
2. Write to file ticket.txt and gives the customer important information. This will be the ticket printed.
3. TODO: Implement ticket printed to printer
4. Checks for a successful connection and sends you to accessGranted.html if valid connection is made.
*/
include 'DataBaseConnection.php';

// Sets the default time zone
date_default_timezone_set('America/New_York');

// // Select these from database and put them in
// $openSpot = array(1,2,3,4,5);
// $closedSpot = array();

//   $remove = array_shift($openSpot);
//   array_push($closedSpot);
//   sort($closedSpot);
//   // return $remove;


$name = $_REQUEST['name'];

// Grabs the current time and date
$time = date("H:i:s");
$date = date("d-m-Y");

$sql = "Insert into records (name, time, date) values ('$name', '$time', '$date')";

//Opens ticket and writes to it.
$ticket = fopen("ticket.txt", "w") or die("Unable to open file!");
$txt = "Thank you for choosing Cornell Inc. Parking Garages " . $name . "\n";
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
  header("location:../GUI/error.html?error=1");
}

?>