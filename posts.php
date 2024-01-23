<style>
    .post-image img {
        width: 100%;
        height: 600px;
        object-fit: cover;
        aspect-ratio: 8/4 !important;
    }
</style>

<?php
include './config.php';
$select = "SELECT * FROM posts";
$result = mysqli_query($connection, $select);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // print_r($row['image']);
        ?>

        <div class="d-flex flex-column bg-white col-lg-8 mx-auto my-3">
            <div class="card">
                <div class="d-flex justify-content-between px-4 py-2 align-items-center">
                    <div class="post-user d-flex gap-3  align-items-center">
                        <div class="u-image">
                            <img width="50px" height="50px" class="rounded-circle"
                                src="./post-images/<?php echo $row['image'] ?>" alt="">
                        </div>
                        <div class="u-info">
                            <h6>
                                Tom Russo
                            </h6>
                            <p class="text-secondary">
                                5 mins
                            </p>
                        </div>
                    </div>
                    <div class="dots">
                        <i class="bi bi-three-dots"></i>
                    </div>
                </div>
                <div class="post-image">
                    <img src="./post_images/<?php echo $row['image'] ?>" alt="">
                </div>
            </div>
            <div class="d-flex gap-1 justify-content-between align-items-center px-3 py-2">
                <div class="left d-flex gap-1">

                    <h4>
                        <a href="">

                            <i style="cursor:pointer" class="bi bi-hand-thumbs-up"></i>
                            </h1>
                        </a>
                        <h4>
                            <a class="text-decoration-none p-0 m-0" href="./post-comments.php?id=<?php echo $row['id'] ?>">

                                <i style="cursor:pointer" class="bi bi-chat"></i>
                                </h1>
                            </a>

                            <h4>
                                <a href="">

                                    <i style="cursor:pointer" class="bi bi-send"></i>
                                    </h1>
                                </a>
                </div>
                <div class="right">
                    <?php
                    $count = "SELECT COUNT(id) AS comments FROM comments WHERE post_id = {$row['id']}";
                    $result3 = mysqli_query($connection, $count);
                    if (mysqli_num_rows($result3) > 0) {
                        while ($row3 = mysqli_fetch_assoc($result3)) {
                            if ($row3['comments'] == 0) {
                                echo "<a href='./post-comments.php?id={$row['id']}' class='text-decoration-none text-secondary' style='font-size:0.8rem'>No comments</a>";
                            } else {
                                echo "<a href='./post-comments.php?id={$row['id']}' class='text-decoration-none text-secondary' style='font-size:0.8rem'>{$row3['comments']} comments</a>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php }
} ?>