<?php
session_start();
unset($_SESSION['u_name']);
header("location:adminlogin.php");
?>