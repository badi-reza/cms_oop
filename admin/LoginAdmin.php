<?php
include "DataBase.php";

class LoginAdmin
{
    private static $con;

    public static function DataBaseConnect()
    {
        self::$con = DataBase::Connect();
        mysqli_set_charset(self::$con, "utf8");
    }

    public static function SelectUser()
    {
        self::DataBaseConnect();
        $query = mysqli_query(self::$con, "SELECT * FROM `login`");
        return $query;
    }

    public static function InsertUser($username, $password)
    {
        self::DataBaseConnect();
        $query = mysqli_query(self::$con, "INSERT INTO `login`( `username`, `password`) VALUES ('$username','$password')");
    }

    public static function SelectUserId($id){
        self::DataBaseConnect();
        $query = mysqli_query(self::$con,"SELECT * FROM `login` WHERE `id` = '$id'");
        return $query;
    }

    public static function UpdateLogin($id,$username,$password){
        self::DataBaseConnect();
        mysqli_query(self::$con,"UPDATE `login` SET `username`='$username',`password`='$password' WHERE `id` = '$id'");
    }
}

