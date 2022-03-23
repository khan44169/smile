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

  <nav class="navbar">
    <div class="navbar-container container">
      <img src="cover.png" alt="" class="logo">
      <input type="checkbox" name="" id="" />
      <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div>
      <ul class="menu-items">
        <!-- <li><a href="avaialbleFood.php">I want food</a></li> -->
        <li><a href="foodAvaialble.php">I want food</a></li>
        <li><a href="signup.php">logIn</a></li>
        <li><a href="signup.php">SignIn</a></li>
        <li><a href="Logout.php"> Logout</a></li>
      </ul>
    </div>
  </nav>

  <?php

  if (isset($_SESSION['single_login'])) {
    // echo "My Name is " . $_SESSION['single_login']['name'];
    // echo "<br>User";
  } else 
  if (isset($_SESSION['hotel_login'])) {
    // echo "My Name is " . $_SESSION['hotel_login']['hotel_name'];
    // echo "<br>Hotel Staff";
  } else 
  if (isset($_SESSION['ngo_login'])) {
    // echo "My Name is " . $_SESSION['ngo_login']['ngo_name'];
    // echo "<br>Ngo Staff";
  }
  ?>
  <div id="ihavefood">
    <ul>
      <!-- <li><a href="availableFood.php">I Want Food</a></li> -->
      <li><a href="food.php"> I Have Food</a></li>
    </ul>
  </div>

</body>

</html>