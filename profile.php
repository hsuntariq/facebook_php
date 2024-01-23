<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include './boot_css.php';
    if (isset($_SESSION['check_logged'])) {
        echo "<title>Welcome {$_SESSION['check_logged']}</title>";
    }
    ?>

    <style>
        body {
            background: #E9EAEE;
        }

        .img img {
            aspect-ratio: 1/1;
        }

        .text:focus {
            box-shadow: 0 0 0 0 !important;
            border: 0 !important;
        }
    </style>
</head>

<body>
    <div class="container bg-white p-0">
        <?php

        $id = $_SESSION['user_id'];
        include './config.php';
        $select = "SELECT * FROM user WHERE id = $id";
        $result = mysqli_query($connection, $select);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <div class="container p-0 m-0" style="background-image:url(./profile_images/<?php
                echo "{$row['cover_image']}"
                    ?>);height:300px;background-size:cover;background-position:center">

                    <div class="profile d-flex px-4" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style='height:100%;cursor:pointer'>
                        <!-- Button trigger modal -->

                        <div class="image text-white d-flex align-items-end">
                            <div class="img p-2 bg-white border">
                                <img width="150px" src="./profile_images/<?php echo $row['profile_image'] ?>" alt="">
                            </div>
                            <div class="user-name align-self-center mt-5">
                                <h1>Harry Potter</h1>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="./update-profile.php" method="POST" enctype="multipart/form-data">
                                            <label for="">Profile Image</label>
                                            <input type="file" name='profile' class='form-control'>
                                            <label for="">Cover Image</label>
                                            <input type="file" name="cover" class='form-control my-2' id="">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="friends"></div>
                    </div>
                    <footer class='bg-white p-3' style="margin-top:-1.7rem">
                        <div class="d-flex gap-4 justify-content-end">
                            <h5>Timeline</h5>
                            <h5>Timeline</h5>
                            <h5>Timeline</h5>
                            <h5>Timeline</h5>
                            <h5>Timeline</h5>
                        </div>
                    </footer>
                </div>
                <?php

            }
        } ?>
    </div>
    <div class="container mt-5 p-0">
        <div class="row p-0 m-0">
            <div class="col-md-5 m-0 p-0"></div>
            <div class="col-md-7 m-0 p-0">
                <div class="container p-0 m-0">
                    <div class="card rounded-0">
                        <div class="card-header" style='background:#F6F7F9'>
                            <div class="d-flex">
                                <h5>POST</h5>
                                <h5>Photo/Video</h5>
                            </div>
                        </div>
                        <div class="card-body p-0 m-0">
                            <form action="./add-something.php" method='POST'>
                                <textarea type="text" class="text form-control" placeholder='Write Something...' col=20
                                    row='10'></textarea>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include './boot_js.php';
?>

</html>