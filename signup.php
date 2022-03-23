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
    <div id="triangle"></div>
    <div class="login-box" id="signup-div">
        <h2>Register yourself...</h2>
        <form>
            <div class="user">
                <label>You Are!!!</label></br>
                  <input type="radio" id="NGO" name="user" value="NGO" onclick="show1();" required>
                  <label for="NGO">NGO</label><br>
                  <input type="radio" id="HOTEL" name="user" value="HOTEL" onclick="show2();">
                  <label for="HOTEL">HOTEL</label><br>
                  <input type="radio" id="SINGLE" name="user" value="SINGLE" onclick="show3();">
                  <label for="SINGLE">SINGLE OWNER</label>
            </div>
            <div id="NGO-signup" class="hide">
                <div class="user-box">
                    <input type="text" id="" name="" required>
                    <label>NGO Name</label>
                </div>
                <div class="user-box">
                    <input type="text" id="" name="" required>
                    <label>Registeration Number</label>
                </div>
            </div>
            <div id="HOTEL-signup" class="hide">
                <div class="user-box" id="HOTEL-signup1">
                    <input type="text" id="" name="" required>
                    <label>Hotel Name</label>
                </div>
                <div class="user-box" id="HOTEL-signup2">
                    <input type="text" id="" name="" required>
                    <label>License Number</label>
                </div>
            </div>
            <div id="single-user">
                <div class="user-box">
                    <input type="text" id="" name="" required>
                    <label>E-mail</label>
                </div>
                <div class="user-box">
                    <input type="password" id="" name="" required>
                    <label>Password</label>
                </div>
                <div class="user-box">
                    <input type="password" id="" name="" required>
                    <label>Confirm Password</label>
                </div>
                <div class="user-box">
                    <input type="text" id="" name="" required>
                    <label>Address</label>
                </div>
            </div>
            <button type="submit" class="submit-button">
                Submit
            </button>
        </form>
    </div>


</body>

<script>
    function show1() {
        document.getElementById('NGO-signup').style.display = 'block';
        document.getElementById('HOTEL-signup').style.display = 'none';
    }

    function show2() {
        document.getElementById('NGO-signup').style.display = 'none';
        document.getElementById('HOTEL-signup').style.display = 'block';
    }

    function show3() {
        document.getElementById('NGO-signup').style.display = 'none';
        document.getElementById('HOTEL-signup').style.display = 'none';
    }
</script>

</html>