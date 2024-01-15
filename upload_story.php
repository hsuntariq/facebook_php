<?php
session_start();
include './config.php';
// get the data from the user
$caption = $_POST['caption'];
$filename = $_FILES['image']['name'];
$tempName = $_FILES['image']['tmp_name'];
$user_id = $_SESSION['user_id'];
move_uploaded_file($tempName, './images/' . $filename);

$insert = "INSERT INTO stories (caption,image,user_id) VALUES ('{$caption}','{$filename}',$user_id)";

$result = mysqli_query($connection, $insert);
if ($result) {
    $_SESSION['story_uploaded'] = 'Story Uploaded Successfully';
    header("Location: $base_url/home.php");
} else {
    echo "An Error Occured";
}

?>