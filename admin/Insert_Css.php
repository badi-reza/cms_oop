<?php
include_once "CssCms.php";

$image = $_FILES['image'];
$font = $_POST['font'];
$color = $_POST['color'];
$height = $_POST['height'];
CssCms::InsertCms($font,$image,$color,$height);
header("location:form_css.php");