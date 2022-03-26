<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sign-up.css">

    <title>SignUp Page</title>
</head>

<body>
    <div class="login-box" id="signup-div">
        <h2>Register yourself...</h2>
        <form action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' name="signupform" method="post">
            <div class="user" id="user" name='user'>
                <!-- <label>You Are!!!</label></br> -->
                  <input type="radio" id="NGO" name="user" value="NGO" onclick="show_NGO();" required>
                  <label for="NGO">NGO</label><br>
                  <input type="radio" id="HOTEL" name="user" value="hotel" onclick="show_hotel();">
                  <label for="HOTEL">HOTEL</label><br>
                  <input type="radio" id="SINGLE" name="user" value="single" onclick="show();">
                  <label for="SINGLE">SINGLE OWNER</label>
            </div>
            <div id="NGO-signup" class="hide">
                <div class="user-box">
                    <input type="text" id="" name="ngo_name" required>
                    <label>NGO Name</label>
                </div>
                <div class="user-box">
                    <input type="text" id="" name="r_num" required>
                    <label>Registeration Number</label>
                </div>
            </div>
            <div id="HOTEL-signup" class="hide">
                <div class="user-box">
                    <input type="text" id="" name="hotel_name" required>
                    <label>Hotel Name</label>
                </div>
                <div class="user-box">
                    <input type="text" id="" name="hotel_l_num" required>
                    <label>License Number</label>
                </div>
            </div>
            <div id="single">
                <div class="user-box">
                    <input type="text" id="" name="single" required>
                    <label>Name</label>
                </div>

            </div>
            <div class="user-box">
                <input type="text" id="" name="email" required>
                <label>E-mail</label>
            </div>
            <div class="user-box">
                <input type="number" id="" name="phone" required>
                <label>Phone</label>
            </div>
            <div class="user-box">
                <input type="password" id="" name="pass" required>
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="password" id="" name="cpass" required>
                <label>Confirm Password</label>
            </div>
            <div class="user-box">
                <input type="text" id="" name="address" required>
                <label>Address</label>
            </div>
            <!-- <button type="submit" class="submit-button">
                Submit
            </button> -->
            <input id="btn" type="submit" value="Submit">
        </form>
        <?php
        include './includes/connectDb.php';
        if (isset($_POST['email'])) {
            $NGO_name = $_POST['ngo_name'];
            $r_num = $_POST['r_num'];
            $hotel_name = $_POST['hotel_name'];
            $hotel_l_num = $_POST['hotel_l_num'];
            $single = $_POST['single'];                       // single refers single owner throught the project
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $cpass = $_POST['cpass'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            //check wheather email already exist or not
            $email_exist = "SELECT * FROM auth_email WHERE email='$email'";
            $email_exist_result = mysqli_query($conn, $email_exist);
            // echo $email_exist_result;
            $email_exist_row = mysqli_num_rows($email_exist_result);

            //checking id password is match  or not
            if (!($pass == $cpass)) {

                echo '<div class="alert alert-danger my-2" role="alert">
            <strong>Password doesnt match</strong>
            </div>';
            } else {

                //to check if user exists or not
                if ($email_exist_row > 0) {
                    echo '<div class="alert alert-danger" role="alert">
                            <strong>Email already registered</strong>
                        </div>';
                } else {
                    //for NGO registration
                    if ($_POST['user'] == 'NGO') {
                        echo "NGO";
                        $NGO_reg = "INSERT INTO `ngo` (`ngo_name`, `ngo_registeration`, `ngo_address`, `ngo_email`, `ngo_password`, `ngo_number`) VALUES ( '$NGO_name', '$r_num', '$address', '$email', '$pass', '$phone')";
                        $result = mysqli_query($conn, $NGO_reg);


                        if ($result) {
                            echo " success";
                            $user = $_POST['user'];
                            $auth_email = "INSERT INTO `auth_email` ( `email`, `org_type`) VALUES ('$email', '$user');";
                            $auth_result = mysqli_query($conn, $auth_email);
                            if (!($auth_email)) {
                                "authentication push error NGO";
                            }
                        } else {
                            echo "bhai kya kar raha hai tu";
                        }
                    }

                    //for hotels registration
                    elseif ($_POST['user'] == 'hotel') {
                        $hotel_reg = "INSERT INTO `hotel` ( `hotel_name`, `hotel_license`, `hotel_address`, `hotel_email`, `hotel_password`, `hotel_number`) VALUES ('$hotel_name', '$hotel_l_num', '$address', '$email', '$pass', '$phone');";
                        $result = mysqli_query($conn, $hotel_reg);
                        if ($result) {
                            echo "success";
                            $user = $_POST['user'];
                            $auth_email = "INSERT INTO `auth_email` ( `email`, `org_type`) VALUES ('$email', '$user');";
                            $auth_result = mysqli_query($conn, $auth_email);
                            if (!($auth_email)) {
                                "authentication push error hotel";
                            }
                        } else {
                            echo "bhai kya kar raha hai tu";
                        }

                        echo "hotel";
                    }

                    //for singles
                    else {
                        $single_reg = "INSERT INTO `singleowner` (`name`, `adhar`, `address`, `email`, `password`, `number`) VALUES ( '$single', '', '$address', '$email', '$pass', '$phone')";
                        $result = mysqli_query($conn, $single_reg);
                        if ($result) {
                            $user = $_POST['user'];
                            $auth_email = "INSERT INTO `auth_email` ( `email`, `org_type`) VALUES ('$email', '$user');";
                            $auth_result = mysqli_query($conn, $auth_email);
                            if (!($auth_email)) {
                                "authentication push error single";
                            }
                            echo "success";
                        } else {
                            echo "bhai kya kar raha hai tu";
                        }

                        echo "single";
                    }
                }
            }
        }
        ?>

    </div>


</body>

<script>
    function show_NGO() {
        document.getElementById('NGO-signup').style.display = 'block';
        document.getElementById('HOTEL-signup').style.display = 'none';
        document.querySelector('#single').style.display = 'none';
    }

    function show_hotel() {
        document.getElementById('NGO-signup').style.display = 'none';
        document.getElementById('HOTEL-signup').style.display = 'block';
        document.querySelector('#single').style.display = 'none';
    }

    function show() {
        document.getElementById('NGO-signup').style.display = 'none';
        document.getElementById('HOTEL-signup').style.display = 'none';
        document.querySelector('#single').style.display = 'block';
    }
</script>

</html>