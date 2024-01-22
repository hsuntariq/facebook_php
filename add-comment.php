<?php
session_start();
include './config.php';
$current_page = $_SERVER['HTTP_REFERER'];
$comment = $_POST['add-comment'];
$user_id = $_SESSION['user_id'];
$post_id = $_POST['id'];

$comment = "INSERT INTO comments (comment,user_id,post_id) VALUES ('{$comment}',$user_id,$post_id)";
mysqli_query($connection, $comment);
header("Location: $current_page");

?>