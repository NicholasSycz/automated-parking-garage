 <?php
include 'DataBaseConnection.php';

$sql = "SELECT * FROM records";

date_default_timezone_set('America/New_York');
$time = date("g:i a");

function payment() {
  // This is very wrong. Hahahaha
  $timeSpent = $sql - $time;
  $total = $timeSpent / .50;
  return $total;
}

if($connection->query($sql) === TRUE) {
  header("location:index.html?error=0");
} else {
  header("location:accessGranted.html?error=1");
}

$connection->close(); 
?>
