<?php
include_once "DataBase.php";

class SeoWebsite
{
    public static $con;

    public static function ConnectDatabase(){
        self::$con = DataBase::connect();
        mysqli_set_charset(self::$con , "utf8");
    }

    public static function InsertSeo($title, $author, $description, $keyword){
        self::ConnectDatabase();
        mysqli_query(self::$con,"INSERT INTO `seo`(`title`, `author`, `description`, `keyword`) VALUES ('$title','$author','$description','$keyword')");
    }

    public static function SelectSeoId(){
        self::ConnectDatabase();
        $query = mysqli_query(self::$con,"SELECT * FROM `seo` ORDER by `id` DESC limit 1 offset 0");
        return $query;
    }

    public static function SelectSeoData(){
        self::ConnectDatabase();
        $query = mysqli_query(self::$con,"SELECT * FROM `seo` ");
        return $query;
    }

    public static function DeletSeo($id){
        self::ConnectDatabase();
        $query = mysqli_query(self::$con,"DELETE FROM `seo` WHERE `id` = '$id' ");
        return $query;
    }
}