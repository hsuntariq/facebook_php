<?php
include './config.php';
$comment = $_POST['up_comment'];
$id = $_POST['id'];
$post_id = $_POST['post_id'];
$update = "UPDATE comments SET comment = '{$comment}' WHERE id = $id";
$result = mysqli_query($connection, $update);
header("Location: $base_url/post-comments.php?id=$post_id");
?>