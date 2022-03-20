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
        <form action="<? echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
            <div class="user" id="user-type">
                <!-- <label></label></br> -->
                  <input type="radio" id="NGO" name="user" value="NGO" required>
                  <label for="NGO">NGO</label><br>
                  <input type="radio" id="HOTEL" name="user" value="HOTEL">
                  <label for="HOTEL">HOTEL</label><br>
                  <input type="radio" id="SINGLE" name="user" value="SINGLE">
                  <label for="SINGLE">SINGLE OWNER</label>
            </div>
            <div class="user-box">
                <input type="text" name="h_name" required>
                <label>Hotel Name</label>
            </div>
            <div class="user-box">
                <input type="text" name="l_num" required="">
                <label>License Number</label>
            </div>
            <div class="user-box">
                <input type="text" name="email" required="">
                <label>E-mail</label>
            </div>
            <div class="user-box">
                <input type="password" name="pass" required="">
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="password" name="cpass" required="">
                <label>Confirm Password</label>
            </div>
            <div class="user-box">
                <input type="text" name="address" required="">
                <label>Address</label>
            </div>
            <!-- < id="btn">
                <span></span>
                <span></span>
                <span></span>
                <span></span> Submit
            </a> -->
            <button type="submit" id="btn">submit</button>
        </form>
        <?
        include './includes/connectDb.php';
        if (isset($_POST['email'])) {
            
        }


        ?>
    </div>


</body>

</html>