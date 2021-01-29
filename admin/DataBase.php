<?php


class DataBase
{
    private static $con;

    public static function connect(){
        self::$con=mysqli_connect("localhost","root","","cmsoop") or die(mysqli_connect_error());
        return self::$con;
    }
}
