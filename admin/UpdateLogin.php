<?php
include_once "LoginAdmin.php";
$username = $_POST['username'];
$password = $_POST['password'];
$hash = sha1($password);
$salt = $hash."6649893595";
$final = sha1($salt);
$id = $_POST['id'];

LoginAdmin::UpdateLogin($id,$username,$final);
header("location:Admin_Strator.php");