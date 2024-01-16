<div class="d-flex gap-2" style='overflow-x:scroll'>
    <?php
    include './config.php';
    $select = "SELECT stories.id AS story_id,user.id AS user_id,f_name,l_name,image FROM stories JOIN user ON stories.user_id = user.id";
    $result = mysqli_query($connection, $select);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-2">
                <a style="width:100%" class='text-decoration-none' href="./show-story.php?id=<?php echo $row['story_id'] ?>">

                    <div style="height:200px;position:relative" class="card w-100 rounded-3">
                        <img width="100%" height="100%" class="rounded-3" style="object-fit:cover"
                            src="./images/<?php echo $row['image'] ?>" alt="">
                        <div class="name position-absolute" style='bottom:5px;z-index:33;left:5px'>
                            <p class="text-white text-capitalize fw-bold" style="text-shadow:3px 3px 3px black">
                                <?php echo $row['f_name'];
                                echo " ";
                                echo $row['l_name'] ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        <?php }
    } ?>
</div>