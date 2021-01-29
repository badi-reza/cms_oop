<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include_once "admin/SeoWebsite.php";
    $query = SeoWebsite::SelectSeoId();
    $item = [];
    $item = mysqli_fetch_assoc($query);
    ?>
    <meta charset="utf-8">
    <title><?php echo $item['title'];   ?></title>
    <meta name="description" content="<?php echo $item['description'];   ?>">
    <meta name="keyword" content="<?php echo $item['keyword'];   ?>">
    <meta name="author" content="<?php echo $item['author'];   ?>">
    <meta name="robots" content="index,follow">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">



    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.css">

    <link rel="stylesheet" href="bootstrap/css/templatemo-training-studio.css">

    <link rel="stylesheet" href="bootstrap/css/amazingslider-1.css">

</head>