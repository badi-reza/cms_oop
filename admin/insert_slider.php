<?php
include_once "Slider.php";
$image = $_FILES['image'];
$caption = $_POST['caption'];
$link = $_POST['link'];

Slider::InsertSlider($image,$caption,$link);

header("location:formslider.php");