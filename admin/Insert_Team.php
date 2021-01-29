<?php
include_once "TeamCms.php";
$image = $_FILES['image'];
$title = $_POST['title'];
$summary = $_POST['summary'];
$content = $_POST['content'];

TeamCms::InsertTeam($image,$title,$summary,$content);
header("location:form_team.php");