<?php
session_start();
include './config.php';
$current_page = $_SERVER['HTTP_REFERER'];
$user_id = $_SESSION['user_id'];
$profile_image_name = $_FILES['profile']['name'];
$profile_image_tmp = $_FILES['profile']['tmp_name'];
$cover_image_name = $_FILES['cover']['name'];
$cover_image_tmp = $_FILES['cover']['tmp_name'];
move_uploaded_file($profile_image_tmp, './profile_images/' . $profile_image_name);
move_uploaded_file($cover_image_tmp, './profile_images/' . $cover_image_name);
$update = "UPDATE user SET profile_image = '{$profile_image_name}', cover_image = '{$cover_image_name}' WHERE id = $user_id";
mysqli_query($connection, $update);
header("Location: $current_page");
?>