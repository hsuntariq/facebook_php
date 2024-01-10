<?php
session_start();
session_unset();
session_destroy();
include './config.php';
header("Location: $base_url");
?>