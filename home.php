<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>
    <title>Document</title>
</head>

<body>
    <?php
    include './config.php';
    if (!isset($_SESSION['check_logged'])) {
        header("Location: $base_url");
    }
    ?>

    <nav>
        <div class="row px-4">
            <div class="col-lg-8 d-flex gap-4 align-items-center">
                <div class="search d-flex gap-3 align-items-center">
                    <img width="50px" src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png"
                        alt="">
                    <div class="search-bar d-flex align-items-center border p-2 rounded-pill " style="width:400px">
                        <span><i class="bi bi-search"></i></span>
                        <input style="outline-width:0" type="search" placeholder="Search Facebook"
                            class=" border-0 w-100" name="search" id="">
                    </div>
                </div>
                <div class="icons d-flex justify-content-center mx-auto fs-1 gap-5">
                    <i style="cursor:pointer" class="bi bi-house-door-fill"></i>
                    <i style="cursor:pointer" class="bi bi-bell"></i>
                    <i style="cursor:pointer" class="bi bi-display"></i>
                    <i style="cursor:pointer" class="bi bi-person-circle"></i>
                    <i style="cursor:pointer" class="bi bi-house-door-fill"></i>
                    <i style="cursor:pointer" class="bi bi-bell"></i>
                    <i style="cursor:pointer" class="bi bi-display"></i>
                    <i style="cursor:pointer" class="bi bi-person-circle"></i>
                </div>
            </div>
            <div class="col-lg-4 fs-1 d-flex justify-content-end ">
                <i style="cursor:pointer" class="bi bi-gear "></i>
            </div>
        </div>
    </nav>


    <a href="./logout.php" class="btn btn-danger">
        Logout
    </a>

</body>

</html>