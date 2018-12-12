<?php
/*
1. Grabs the id number of the customer to retrieve their time spent 
2. Calculates the payment needed to exit the garage.
3. Implements the GUI to let the customer know they are good to go. 
4. Checks successful connection to the database and sends customer to accessGranted.html
*/
include 'DataBaseConnection.php';

// Grab the name from the user
$slot = $_REQUEST['slot'];

// Obtains time from the database
$sql = "SELECT time FROM records where name = '$slot'";

// Checks if connection to database
$result = $connection->query($sql);

// Runs if something was returned to the customer
if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    // Set default time
    date_default_timezone_set('America/New_York');

    // Obtain the current time and the customers time
    $currentTime = date("H:i:s"); 
    $customerTime = $row['time'];

    // Gets the time stamp for the customers time and current.
    $current = strtotime('$currentTime');
    $customer = strtotime('$customerTime');

    $hours = $current - $customer;

    // They will have to pay $6.00 regardless even if they stay for less than the rate of $6.00 an hour.
    if ($hours == 0) {
      $hours = $hours + 1;
      $monies = $hours * 6;
    } else {
      $monies = $hours * 6; 
    }
  }
} else {
  echo "We can't find an asssociated name. Please enter another name";
  // Redirects them back to previous screen.
  header("location:../GUI/pay.php?error=1");
}
?>
<!doctype html>
<!--
 Retrieves the hours the user parked at the spot and will ask for their payment.
-->
<html class="bg-dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Prompts customer to pay for using the service">
  <meta name="author" content="APGOD">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <title>Welcome to Cornwell Parking</title>

</head>

<body class="text-center">

  <div class="d-flex h-100 p-3 mx-auto flex-column bg-dark text-white">
    <header class="masthead mb-auto">
      <div class="inner p-5">
        <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
            aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
        </div>
        </nav>
      </div>
    </header>

    <main role="main" class="inner cover">
      <h1 class="display-2 p-3">Charged for the following hours spent: </h1> 
      <h1 class="display-2 p-3"><?php print $hours?> hour</h1> 
      <p class="display-3 p-3 m-3">Please provide a form of payment below</p>
      <h1 class="display-3 p-3 m-3">You were charged: $<?php print $monies?> dollars</h1>
      <div class="container">
        <div class="row">
          <div class="col align-self-center">
            <form action="../GUI/paid.html" method="GET">
              <input type="submit" class="btn btn-lg btn-primary m-4" value="Won't exist next sprint">
            </form>
          </div>
        </div>
    </main>

    <footer class="fixed-bottom">
      <div class="inner">
        <p>Cornwell Inc.
          <script>document.write(new Date().getFullYear())</script>
        </p>
      </div>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>

