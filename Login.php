<?php
include './includes/connectDb.php';

if (isset($_SESSION['ngo_login']) || isset($_SESSION['hotel_login']) || isset($_SESSION['single_login'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Login.css">
    <title>Login Page</title>
</head>

<body>
    <?php include './nav.php'; ?>
    <div id="triangle"></div>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post">
            <div class="user" id="user">
                <!-- <label>You Are!!!</label></br> -->
                  <input type="radio" id="NGO" name="user" value="NGO" onclick="show_NGO();" required>
                  <label for="NGO">NGO</label><br>
                  <input type="radio" id="HOTEL" name="user" value="HOTEL" onclick="show_hotel();">
                  <label for="HOTEL">HOTEL</label><br>
                  <input type="radio" id="SINGLE" name="user" value="SINGLE" onclick="show();">
                  <label for="SINGLE">SINGLE OWNER</label>
            </div>

            <div class="user-box">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <input type="submit" name="submit" value="Login" id="btn">
            <a href="signup.php" class="direction" style="font-size: .9rem;">New User -> Kindly Register</a>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $userName = $_POST['username'];
            $password = $_POST['password'];

            if ($_POST['user'] == 'NGO') {

                $ngoLogin = "Select * from ngo where ngo_name='$userName' && ngo_password='$password'";
                $queryResult = mysqli_query($conn, $ngoLogin);
                $ngoData = mysqli_fetch_assoc($queryResult);
                $result = mysqli_num_rows($queryResult);
                if ($result > 0) {
                    $_SESSION['ngo_login'] = $ngoData;
                    $_SESSION['org_type'] = "NGO";
                    $_SESSION['login'] = $ngoData;
                    header("location: index.php");
                }
            }

            if ($_POST['user'] == 'HOTEL') {

                $hotelLogin = "Select * from hotel where hotel_name='$userName' && hotel_password='$password'";
                $queryResult = mysqli_query($conn, $hotelLogin);
                $hotelData = mysqli_fetch_assoc($queryResult);
                $result = mysqli_num_rows($queryResult);
                if ($result > 0) {
                    $_SESSION['hotel_login'] = $hotelData;
                    $_SESSION['org_type'] = "hotel";
                    $_SESSION['login'] = $hotelData;
                    header("location: index.php");
                }
            }
            if ($_POST['user'] == 'SINGLE') {

                $singleLogin = "Select * from singleowner where name='$userName' && password='$password'";
                $queryResult = mysqli_query($conn, $singleLogin);
                $singleData = mysqli_fetch_assoc($queryResult);
                $result = mysqli_num_rows($queryResult);
                if ($result > 0) {
                    $_SESSION['single_login'] = $singleData;
                    $_SESSION['org_type'] = "single";
                    $_SESSION['login'] = $singleData;
                    header("location: index.php");
                }
            }
        }

        ?>
    </div>
</body>

</html>