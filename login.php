<?php
session_start();
include './config.php';
$current_page = $_SERVER['HTTP_REFERER'];
$m_mail = $_POST['m_mail'];
$password = $_POST['password'];
$select = "SELECT * FROM user WHERE m_mail = '{$m_mail}' AND password = '{$password}'";

$result = mysqli_query($connection, $select);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['check_logged'] = $row['f_name'];
    header("Location: $base_url/home.php");
} else {
    $_SESSION['error'] = 'Invalid Credentials';
    header("Location: $current_page");
}

?>