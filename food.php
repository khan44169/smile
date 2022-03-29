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
  <link rel="stylesheet" href="./css/utility.css">
  <link rel="stylesheet" href="./css/food.css">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <?php include './nav.php'; ?>
  <div id="triangle"></div>
  <div id="food-section">
    <div id="form-section" class="wd50">
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="form">
        <div id="food-type" class="wd100">
          <input type="radio" name="foodtype" value="non_veg" id="non_veg">
          <input type="radio" name="foodtype" value="veg" id="veg">
          <label for="nonveg" class="option non_veg">
            <div class="dot"></div>
              <span>NON VEG</span>
          </label>
          <label for="veg" class="option veg">
            <div class="dot"></div>
            <span>VEG</span>
          </label>
        </div>
        <div class="food_information">
          <div id="food-name">
            <label for="food-name" class="block">Food Name:</label>
            <input class="textbox wd100 " type="text" name="foodname" id="" placeholder="Food Name">
          </div>
          <div id="food-waight">
            <label for="food-waight" class="block">Food Weight:</label>
            <input class="textbox wd100 " type="text" name="food_weight" id="" placeholder="Weight">
          </div>
          <div id="food-area">
            <label for="food-waight" class="block">Area:</label>
            <input class="textbox wd100 " type="text" name="area" id="" placeholder="area">
            <p id="note">Note:please specify area in which Ngo should be located </p>

          </div>
        </div>


        <div class="wd50" id="btn-section">
          <input type="submit" class="btn" value="I have Food" name="submit">
        </div>

      </form>

    </div>
    <!-- <div id="food-waight">
      <label for="food-waight" class="block">Food Name:</label>
      <input class="textbox wd100 " type="text" name="" id="" placeholder="Waight">
    </div>
    <div id="food-area">
      <label for="food-waight" class="block">Area:</label>

      <input class="textbox wd100 " type="text" name="" id="" placeholder="Waight">
      <p id="note">Note:please specify area in which Ngo should be located </p>
    </div>
    <div class="wd50" id="btn-section">
      <input type="button" class="btn" value="I have Food">
    </div> -->

    </form>
  </div>
  </div>
  <?php
  if (isset($_POST['submit'])) {
    echo "hey there";
    $foodtype = $_POST['foodtype'];
    $food_name = $_POST['foodname'];
    $food_weight = $_POST['food_weight'];
    $area = $_POST['area'];
    $org_type = $_SESSION['org_type'];
    $raiser_id = $_SESSION['login']['id'];

    $sql_query = "INSERT INTO `foodraised` (`food_type`, `food_name`, `food_weight`, `raiser_id`, `org-type`) VALUES ( '$foodtype', '$food_name', '$food_weight', '$raiser_id', '$org_type')";
    $query_result = mysqli_query($conn, $sql_query);
    if ($query_result) {
      echo "success ";
    } else {
      echo "bhai yeh kya kar raha hai tu";
      echo mysqli_error($conn);
    }
  }
  ?>

  </div>


</body>

</html>