<?php
include './config.php';
include './boot_css.php';
$id = $_GET['comment_id'];
$post_id = $_GET['post_id'];
$select = "SELECT comment from comments WHERE id = $id";
$result = mysqli_query($connection, $select);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="card col-lg-5 mx-auto">
            <div class="card-header">
                Edit Comment
            </div>
            <div class="card-body">
                <form action="./edit-comment.php" method="POST">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="">
                    <input type="hidden" value="<?php echo $post_id ?>" name="post_id" id="">
                    <input value="<?php echo $row['comment'] ?>" type="text" class='form-control' name='up_comment'>
                    <button class="btn w-100 my-2 btn-primary">
                        Update Comment
                    </button>
                </form>
            </div>
        </div>

        <?php
    }
}
?>