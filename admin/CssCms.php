<?php
include_once "DataBase.php";
include_once "ImageSlider.php";

class CssCms extends ImageSlider
{
    private static $con;
    public static function ConnectDataBase(){
        self::$con = DataBase::connect();
        mysqli_set_charset(self::$con,"utf8");
    }

    public static function InsertCms($font,$image,$color,$height){
        self::ConnectDataBase();
        $path = "../images/interview/";
        $image_new = self::ImageSliderWebsite($image,$path);
        mysqli_query(self::$con,"INSERT INTO `css`(`font`, `image`, `color`, `height`) VALUES ('$font','$image_new','$color','$height')");
    }

    public static function SelectCms(){
        self::ConnectDataBase();
        $query = mysqli_query(self::$con,"SELECT * FROM `css` ORDER BY `id` DESC LIMIT 1 OFFSET 0");
        return $query;
    }
}