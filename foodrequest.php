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
    <?php
    // include './includes/connectDb.php';
    $sql_query = "SELECT * FROM `foodraised`";
    $result = mysqli_query($conn, $sql_query);
    if ($result) {
        while ($food_row = mysqli_fetch_assoc($result)) {
            // echo $food_row['raiser_id'];
            // $sql_query_info = "SELECT * FROM `email_auth` WHERE id=$food_row[raiser_id]";  //getting data from email_auth
            // $result_info = mysqli_query($conn, $sql_query_info);
            if ($food_row['org_type'] == 'NGO') {
                $sql_query_info = "SELECT * FROM `ngo` WHERE id=$food_row[raiser_id]";
                $result_info = mysqli_query($conn, $sql_query_info);
                if ($result_info) {
                    $info_row = mysqli_fetch_assoc($result_info);
                    echo '<div id="request-div" class="request-div">

                    <div id="description" class="description">
                        <div id="hotel">' . $info_row['ngo_name'] . '</div>
                        <div id="contact">
                            <div id="address">' . $info_row['ngo_address'] . '</div>
                            <div id="phone">' . $info_row['ngo_number'] . '</div>
                        </div>
                        <div id="food-detail">
                            <div id="foodtype">' . $food_row['food_type'] . '</div>
                            <div id="foodname">' . $food_row['food_name'] . '</div>
                            <div id="weight">' . $food_row['food_weight'] . '</div>
                        </div>
            
            
            
                    </div>
                    <div id="acceptbtn-div" class="acceptbtn-div">
                        <button type="submit" id="accept-btn">Accept Request</button>
                    </div>
                </div>';
                }
            }
            if ($food_row['org_type'] == 'hotel') {
                $sql_query_info = "SELECT * FROM `hotel` WHERE id=$food_row[raiser_id]";
                $result_info = mysqli_query($conn, $sql_query_info);
                if ($result_info) {
                    $info_row = mysqli_fetch_assoc($result_info);
                    echo '<div id="request-div" class="request-div">

                    <div id="description" class="description">
                        <div id="hotel">' . $info_row['hotel_name'] . '</div>
                        <div id="contact">
                            <div id="address">' . $info_row['hotel_address'] . '</div>
                            <div id="phone">' . $info_row['hotel_number'] . '</div>
                        </div>
                        <div id="food-detail">
                            <div id="foodtype">' . $food_row['food_type'] . '</div>
                            <div id="foodname">' . $food_row['food_name'] . '</div>
                            <div id="weight">' . $food_row['food_weight'] . '</div>
                        </div>
            
            
            
                    </div>
                    <div id="acceptbtn-div" class="acceptbtn-div">
                        <button type="submit" id="accept-btn">Accept Request</button>
                    </div>
                </div>';
                }
            }

            if ($food_row['org_type'] == 'single') {
                $sql_query_info = "SELECT * FROM `singleowner` WHERE id=$food_row[raiser_id]";
                $result_info = mysqli_query($conn, $sql_query_info);
                if ($result_info) {
                    $info_row = mysqli_fetch_assoc($result_info);
                    echo '<div id="request-div" class="request-div">

                    <div id="description" class="description">
                        <div id="hotel">' . $info_row['name'] . '</div>
                        <div id="contact">
                            <div id="address">' . $info_row['address'] . '</div>
                            <div id="phone">' . $info_row['number'] . '</div>
                        </div>
                        <div id="food-detail">
                            <div id="foodtype">' . $food_row['food_type'] . '</div>
                            <div id="foodname">' . $food_row['food_name'] . '</div>
                            <div id="weight">' . $food_row['food_weight'] . '</div>
                        </div>
            
            
            
                    </div>
                    <div id="acceptbtn-div" class="acceptbtn-div">
                        <button type="submit" id="accept-btn">Accept Request</button>
                    </div>
                </div>';
                }
            }
        }
    }


    ?>
    <!-- <div id="request-div" class="request-div">

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
    </div> -->





</body>

</html>