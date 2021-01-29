<?php
include_once "SeoWebsite.php";

$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$keyword = $_POST['keyword'];

SeoWebsite::InsertSeo($title,$author,$description,$keyword);
header("location:admin.php");

?>