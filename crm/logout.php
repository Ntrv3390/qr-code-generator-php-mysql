<?php
session_start();
unset($_SESSION['QR_USER_LOGIN']);
unset($_SESSION['QR_USER_ID']);
unset($_SESSION['QR_USER_NAME']);
unset($_SESSION['QR_USER_ROLE']);
header('location:login.php');
die();
?>