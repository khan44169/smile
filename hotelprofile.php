<?php
include './includes/connectDb.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/hotelprofile.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>HOtel Profile</title>
</head>

<body>
    <?php include './nav.php'; ?>
    <div id="triangle"></div>
    <div id="page-container">
        <div id="profile-container">
            <div id="profile-picture-container">
                <div id="profile-picture">
                    <div id="image">
                        <img src="./pictures/profile.png" alt="">
                    </div>
                    <div id="hotel-name-and-address">
                        <h2>
                            <?php
                            if (isset($_SESSION['single_login'])) {

                                echo $_SESSION['single_login']['name'];
                            } else if (isset($_SESSION['hotel_login'])) {

                                echo $_SESSION['hotel_login']['hotel_name'];
                            } else if (isset($_SESSION['ngo_login'])) {

                                echo $_SESSION['ngo_login']['ngo_name'];
                            }
                            ?>
                            <!-- Hotel Name -->
                        </h2>

                        <h3>

                            <?php
                            if (isset($_SESSION['single_login'])) {

                                echo $_SESSION['single_login']['address'];
                            } else if (isset($_SESSION['hotel_login'])) {

                                echo $_SESSION['hotel_login']['hotel_address'];
                            } else if (isset($_SESSION['ngo_login'])) {

                                echo $_SESSION['ngo_login']['ngo_address'];
                            }

                            ?>
                        </h3>

                    </div>
                </div>
            </div>
            <div id="hotel-info-and-socialmedia">
                <div id="information">
                    <div id="information-label">
                        <h3> Information </h3>
                    </div>

                    <div id="email-div">
                        <p>
                        <h3>
                            Email
                        </h3>
                        <h6>
                            shaikhahad199@gmail.com
                        </h6>
                        </p>

                    </div>
                    <div id="phone-div">
                        <p>
                        <h3>
                            Phone
                        </h3>
                        <h6>
                            8828495484
                        </h6>
                        </p>


                        <?php
                        if (isset($_SESSION['single_login'])) {

                            echo $_SESSION['single_login']['email'];
                        } else if (isset($_SESSION['hotel_login'])) {

                            echo $_SESSION['hotel_login']['hotel_email'];
                        } else if (isset($_SESSION['ngo_login'])) {

                            echo $_SESSION['ngo_login']['ngo_email'];
                        }
                        ?>
                        </h6>
                    </div>
                    <div class="col">
                        <label for="phone">Phone</label>
                        <h6>
                            <?php
                            if (isset($_SESSION['single_login'])) {

                                echo $_SESSION['single_login']['number'];
                            } else if (isset($_SESSION['hotel_login'])) {

                                echo $_SESSION['hotel_login']['hotel_number'];
                            } else if (isset($_SESSION['ngo_login'])) {

                                echo $_SESSION['ngo_login']['ngo_number'];
                            }
                            ?>
                        </h6>
                    </div>

                    <div id="smile-served-div">
                        <p>
                        <h3>
                            Smile Served
                        </h3>
                        </p>

                    </div>
                    <div id="food-information">
                        <div id="happy-faces">
                            <p>
                            <h3>
                                Happy Faces
                            </h3>
                            <h6>
                                count of happy faces
                            </h6>
                            </p>

                        </div>
                        <div id="food-quantity">
                            <p>
                            <h3>
                                Food Donated
                            </h3>
                            <h6>
                                Food weight in KGs
                            </h6>
                            </p>

                        </div>
                    </div>
                </div>
                <div id="social-media">
                    <ul>
                        <a class="fab fa-facebook" href="#"></a>
                        <a class="fab fa-whatsapp" href="#"></a>
                        <a class="fab fa-instagram" href="#"></a>
                    </ul>
                    <div id="edit-profile">
                        <input type="submit" id="edit_btn" value="Edit Button">

                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>