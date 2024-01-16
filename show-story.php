<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>
    <title>Document</title>
    <style>
        body {
            background: #000;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .story img {
            aspect-ratio: 4/8;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <?php
    $id = $_GET['id'];
    include './config.php';
    $select = "SELECT * FROM stories WHERE id = $id";
    $result = mysqli_query($connection, $select);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-lg-4 col-md-5 col-sm-8 mx-auto story" style='height:90vh;position-relative'>
                <img width="100%" class="rounded-5" height="100%" src="./images/<?php echo $row['image'] ?>" alt="">

            </div>

        <?php }
    } ?>
</body>

</html>