<!doctype html>
<!--
 Prompts the user to supply the ticket and then sens them to pay their bill
-->
<html class="bg-dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Prompts customer to give ticket and pay">
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
            aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
        </div>
        </nav>
      </div>
    </header>

    <main role="main" class="inner cover">
      <h1 class="display-3 p-3">Insert your ticket below and select your parking number</h1>
      <p class="lead"></p>
      <div class="container">
        <div class="row">
          <div class="col align-self-center">
            <form action="../Database/retrieveTime.php" method="POST">
              <input class="form-control" type="number" name = "slot" value="000">
              <p></p>
              <input type="submit" class="btn btn-lg btn-primary m-4" value="Go to pay">
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