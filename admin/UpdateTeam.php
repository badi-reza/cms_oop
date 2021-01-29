<?php
include_once "TeamCms.php";
$title = $_POST['title'];
$image = $_FILES['image'];
$summary = $_POST['summary'];
$content = $_POST['content'];
$id = $_POST['id'];

TeamCms::Update($title,$image,$summary,$content,$id);
header("location:details_form.php");


?>