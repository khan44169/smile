<?php
include './includes/connectDb.php';

if (isset($_SESSION['ngo_login']) || isset($_SESSION['hotel_login']) || isset($_SESSION['single_login'])) {
} else {
  header("location:Login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FoodTracker</title>
  <link rel="stylesheet" href="./css/utility.css" />
  <link rel="stylesheet" href="./css/index.css" />
</head>

<body>

  <?php

  if (isset($_SESSION['single_login'])) {
    echo "My Name is " . $_SESSION['single_login']['name'];
    echo "<br>User";
  } else 
  if (isset($_SESSION['hotel_login'])) {
    echo "My Name is " . $_SESSION['hotel_login']['hotel_name'];
    echo "<br>Hotel Staff";
  } else 
  if (isset($_SESSION['ngo_login'])) {
    echo "My Name is " . $_SESSION['ngo_login']['ngo_name'];
    echo "<br>Ngo Staff";
  }
  ?>
  <a href="Logout.php"> Logout</a>
  <div id="ihavefood">
    <button class="btn btn-hover">I have Food</button>
  </div>

</body>

</html>