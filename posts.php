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
            <div class="d-flex gap-1 px-3 py-2">
                <h1>
                    <a href="">

                        <i style="cursor:pointer" class="bi bi-hand-thumbs-up"></i>
                </h1>
                </a>
                <h1>
                    <a class="text-decoration-none p-0 m-0" href="./post-comments.php?id=<?php echo $row['id'] ?>">

                        <i style="cursor:pointer" class="bi bi-chat"></i>
                </h1>
                </a>

                <h1>
                    <a href="">

                        <i style="cursor:pointer" class="bi bi-send"></i>
                </h1>
                </a>
            </div>
        </div>
    <?php }
} ?>