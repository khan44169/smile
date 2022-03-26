<?php
include './includes/connectDb.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=4, initial-scale=1.0">
    <link rel="stylesheet" href="./css/foodrequest.css">
    <title>Food Request</title>
</head>

<body>
    <?php include './nav.php'; ?>
    <div id="triangle"></div>
    <div id="request-div" class="request-div">

        <div id="description" class="description">
            <div id="hotel">Hotel</div>
            <div id="contact">
                <div id="address">address</div>
                <div id="phone">99619122995</div>
            </div>
            <div id="food-detail">
                <div id="foodtype">nonveg</div>
                <div id="foodname">dinner</div>
                <div id="weight">18Kgs</div>
            </div>



        </div>
        <div id="acceptbtn-div" class="acceptbtn-div">
            <button type="submit" id="accept-btn">Accept Request</button>
        </div>
    </div>

</body>

</html>