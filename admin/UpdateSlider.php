<?php
include_once "Slider.php";
$id = $_POST['id'];
$caption = $_POST['caption'];
$link = $_POST['link'];
$image = $_FILES['image'];

Slider::UpdateSlider($image,$id,$caption,$link);
header("location:detailsslider.php");