<?php
include_once "Slider.php";
$id = $_POST['id'];
$path = $_POST['path'];

Slider::DeleteSlider($id);
unlink($path);
header("location:detailsslider.php");