<?php
session_start();
include './config.php';
if (isset($_SESSION['check_logged'])) {
    header("Location: $base_url/home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>
    <title>Facebook</title>
    <style>
        body {
            background: #F0F2F5;
        }

        .reg-form {
            height: 100vh;
            width: 100vw;
            position: fixed;
            top: 0;
            background: rgba(255, 255, 255, 0.6);
            z-index: 222;
            display: flex;
            justify-content: center;
            align-items: center;
            display: none;

        }

        .cont {
            height: 80vh;

        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center cont col-lg-9 col-md-10 mx-auto">
        <div class="row">
            <div class="col-lg-6">
                <img width="200px" src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-Logo-2019.png" alt="">
                <div class="text">

                    <small class='fs-3 fw-light'>Facebook helps you connect and share with the people in your
                        life.</small>
                </div>
            </div>
            <div class="col-lg-6">
                <?php include './log_form.php' ?>
            </div>
        </div>
    </div>

    <div class="reg-form">
        <?php include './reg_form.php' ?>
    </div>


    <?php include './boot_js.php' ?>

</body>

</html>