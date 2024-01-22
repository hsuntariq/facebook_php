<?php
include './config.php';
include './boot_css.php';
$id = $_GET['id'];
$select = "SELECT posts.id AS post_id,user.id AS user_id,image,caption,f_name,l_name FROM posts JOIN user ON posts.user_id = user.id WHERE posts.id = $id";
// $select = "SELECT posts.id AS post_id,user.id AS user_id,image,f_name,l_name,caption FROM posts JOIN user ON posts.user_id = user_id WHERE posts.id = $id";
$result = mysqli_query($connection, $select);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        ?>
        <style>
            body {
                background: var(--bs-light);
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .img img {
                aspect-ratio: 1/1;
            }

            input:focus {
                box-shadow: 0 0 0 0 !important;
                border: 0;
            }
        </style>


        <div class="container shadow-lg bg-white p-0 m-0" style="height:80vh;overflow:hidden">
            <div class="row" style="height:100%;">
                <div class="col-lg-6 p-0 img">
                    <img width="100%" style="object-fit:cover" height="100%" src="./post_images/<?php echo $row['image'] ?>"
                        alt="">
                </div>
                <div class="col-lg-6 p-0 position-relative">
                    <div class="d-flex gap-3 px-3 pt-2">

                        <img width='50px' height="50" style="border-radius:50%;object-fit:cover"
                            src="http://localhost/facebook/post_images/ha.jpg" alt="">
                        <div class="d-flex flex-column ">

                            <h5 class='text-capitalize d-flex flex-column'>
                                <?php echo $row['f_name'] ?>
                                <?php echo " " ?>
                                <?php echo $row['l_name'] ?>

                            </h5>
                            <h6>5 min ago</h6>

                        </div>
                    </div>
                    <hr class='m-0'>
                    <div class="d-flex p-3 align-items-center gap-4 ">
                        <p class='fw-bolder text-capitalize p-0 m-0'>
                            <?php echo $row['f_name'] ?>
                            <?php echo " " ?>
                            <?php echo $row['l_name'] ?>
                        </p>
                        <p class='text-secondary p-0 m-0 '>
                            <?php echo $row['caption'] ?>
                        </p>
                    </div>
                    <?php
                    $select = "SELECT comments.id AS comment_id,user.id AS user_id,f_name,l_name,comment FROM comments JOIN user ON comments.user_id = user.id WHERE comments.post_id = $id";
                    $result2 = mysqli_query($connection, $select);
                    if (mysqli_num_rows($result2) > 0) {
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                            ?>
                            <div class="d-flex p-3 align-items-center gap-4 ">
                                <p class='fw-bolder text-capitalize p-0 m-0'>
                                    <?php echo $row2['f_name'] ?>
                                    <?php echo " " ?>
                                    <?php echo $row2['l_name'] ?>
                                </p>
                                <p class='text-secondary p-0 m-0 '>
                                    <?php echo $row2['comment'] ?>
                                </p>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <form action="./add-comment.php" method="POST"
                        class="d-flex position-absolute bottom-0 align-items-center ms-2 border rounded-5 mx-auto px-3"
                        style='width:95%'>
                        <input type="hidden" value="<?php echo $id ?>" name='id'>
                        <input type="text" style="border:1px 1px 0px 0px lightgray" class='border-0 form-control'
                            name='add-comment' placeholder='Share your thoughts...'>
                        <button class='btn btn-transparent border-0 bg-none'>

                            <i class="bi bi-send-fill"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    <?php }
} ?>