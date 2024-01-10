<?php
session_start();
// make connection
include './config.php';
// get the values
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$m_mail = $_POST['m_mail'];
$password = $_POST['password'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$gender = $_POST['gender'];

// write query
$insert = "INSERT INTO user (f_name,l_name,m_mail,password,date,month,year,gender) VALUES ('{$f_name}','{$l_name}','{$m_mail}','{$password}',$date,'{$month}',$year,'{$gender}')";

// execute the query
$result = mysqli_query($connection, $insert);

if ($result) {
    $_SESSION['check_logged'] = $f_name;
    header("Location: $base_url/home.php");
} else {
    echo "Please try again!";
}



?>