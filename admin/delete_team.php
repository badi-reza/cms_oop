<?php
include_once "TeamCms.php";
$id = $_POST['id'];
$path = $_POST['path'];
unlink($path);
TeamCms::DeleteTeam($id);
header("location:details_form.php");