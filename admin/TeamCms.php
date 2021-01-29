<?php
include_once "DataBase.php";
include_once "ImageSlider.php";
class TeamCms extends ImageSlider
{
    private static $con;
    public static function ConnectDataBase(){
        self::$con = DataBase::connect();
        mysqli_set_charset(self::$con,"utf8");
    }

    public static function InsertTeam($image,$title,$summary,$content){
        self::ConnectDataBase();
        $path = "../images/team/";
        $image_new = self::ImageSliderWebsite($image,$path);
        mysqli_query(self::$con,"INSERT INTO `team`(`title`, `image`, `summary`, `content`) VALUES ('$title','$image_new','$summary','$content')");
    }

    public static function SelectTeam(){
        self::ConnectDataBase();
        $query = mysqli_query(self::$con,"SELECT * FROM `team`");
        return $query;
    }

    public static function SelectTeamId($id){
        self::ConnectDataBase();
        $query = mysqli_query(self::$con,"SELECT * FROM `team` WHERE `id` = '$id' ");
        return $query;
    }

    public static function DeleteTeam($id){
        self::ConnectDataBase();
        mysqli_query(self::$con,"DELETE FROM `team` WHERE `id` = '$id'  ");
    }

    public static function Update($title,$image,$summary,$content,$id){
        self::ConnectDataBase();
        $path = "../images/team/";
        if ($image!=null){
            $image_new = self::ImageSliderWebsite($image,$path);

        } else{
            $query = self::SelectTeamId($id);
            $item = [];
            $item = mysqli_fetch_assoc($query);
            $image_new = $item['image'];
        }
        mysqli_query(self::$con,"UPDATE `team` SET `title`='$title',`image`='$image_new',`summary`='$summary',`content`='$content' WHERE `id` = '$id'");
    }
}