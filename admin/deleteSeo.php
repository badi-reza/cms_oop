<?php
include_once "SeoWebsite.php";
$id = $_POST['id'];
SeoWebsite::DeletSeo($id);
header("location:detailSeo.php");