<?php
include_once "DataBase.php";
include_once "ImageSlider.php";

class Slider extends ImageSlider
{
    private static $con;

    public static function Connect(){
        self::$con = DataBase::connect();
        mysqli_set_charset(self::$con,"utf8");
    }

    public static function UploadImage($image){
        $upload = 1;
        $image_new = $image['name'];
        $directory = "../images/slider/";
        $target_file = $directory.basename($image_new);
        $file_type = pathinfo($target_file,PATHINFO_EXTENSION);
        if ($file_type!=="jpg" && $file_type!=="png" && $file_type!=="gif"){
            $upload = 0;
            echo "this is not picture";
        }

        if ($upload==1){
            if (move_uploaded_file($image['tmp_name'],$target_file)){
                echo "done";
            }
        }
        return $image_new;
    }
    public static function InsertSlider($image,$caption,$link){
        self::Connect();
        $path = "../images/slider/";
        $image_new = self::ImageSliderWebsite($image,$path);
        mysqli_query(self::$con,"INSERT INTO `slider`(`image`, `caption`, `link`) VALUES ('$image_new','$caption','$link')");
    }

    public static function SelectSlider(){
        self::Connect();
        $query = mysqli_query(self::$con,"SELECT * FROM `slider` ");
        return $query;
    }

    public static function DeleteSlider($id){
        self::Connect();
        mysqli_query(self::$con,"DELETE FROM `slider` WHERE `id`= '$id' ");
    }

    public static function SelectSliderId($id){
        self::Connect();
        $query = mysqli_query(self::$con,"SELECT * FROM `slider` WHERE `id`='$id' ");
        return $query;
    }

    public static function UpdateSlider($image,$id,$caption,$link){
        self::Connect();
        $path = "../images/slider/";
        if ($image!=null){
            $image_new = self::ImageSliderWebsite($image,$path);

        } else{
            $query = self::SelectSliderId($id);
            $item = [];
            $item = mysqli_fetch_assoc($query);
            $image_new = $item['image'];
        }
        mysqli_query(self::$con,"UPDATE `slider` SET `image`='$image_new',`caption`='$caption',`link`='$link' WHERE `id` ='$id' ");
    }
}