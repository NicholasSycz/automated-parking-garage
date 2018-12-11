<?php
/*
1. Grabs the id number of the customer to retrieve their time spent 
2. Calculates the payment needed to exit the garage.
3. Implements the GUI to let the customer know they are good to go. 
4. Checks successful connection to the database and sends customer to accessGranted.html
*/
include 'DataBaseConnection.php';

$slot = $_REQUEST['slot'];


$sql = "SELECT time FROM records where name = '$slot'";
print $sql;
$result = $connection->query($sql);
if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    date_default_timezone_set('America/New_York');
    $currentTime = date("H:i:s"); 
    print $currentTime;
    $customerTime = $row['time'];
    print $customerTime;
    $one = strtotime('$currentTime');
    $two = strtotime('$customerTime');
    print "\n";
    $hours = ($one - $two);
    if ($hours == 0) {
      $hours = $hours + 1;
      $monies = $hours * 6;
    } else {
      $monies = "monies: " . $hours * 6;
    }
    print $monies;
    print $hours;
  }
} else {
  echo "We can't find an asssociated name. Please enter another name";
  header("location:../GUI/pay.php?error=1");
}

// if($connection->query($sql) === TRUE) {

//   header("location:../GUI/userPay.php?error=0");
// } else {
//   header("location:../GUI/error.html?error=1");
// }
// print $sql;
//   date_default_timezone_set('America/New_York');
//   $currentTime = date("g:i a");  
// print $currentTime;
//   $timeSpent = $sql - $currentTime;
//   $total = $timeSpent / .50;
//   // return $total;

// print $total;
// exit;


// $connection->close(); 
?>
