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
  <?php include './nav.php'; ?>
  <div id="triangle"></div>

  <div id="ihavefood">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
      <button class=" btn-hover" name="ihavefoodbtn">RaiseSmile</button>

    </form>
    <?php
    // include './includes/connectDb.php';
    if (isset($_POST['ihavefoodbtn'])) {
      if (isset($_SESSION['ngo_login']) || isset($_SESSION['hotel_login']) || isset($_SESSION['single_login'])) {
        header("location:food.php");
      } else {
        header("location:Login.php");
      }
    }
    ?>

  </div>

</body>

</html>