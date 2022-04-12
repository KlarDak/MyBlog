<?php
namespace KDS\MyBlog\Models;

class MBModel
{
    public static string $dbhost = "localhost";
    public static string $dbuser = "klardakadmin";
    public static string $dbpass = "25Ehi5Aa";
    public static string $dbname = "myblog";

    public static function getConnection() : bool|\PDO
    {
        if ($db = new \PDO("mysql:host=".self::$dbhost.";dbname=".self::$dbname, self::$dbuser, self::$dbpass))
            return $db;
        else
            return false;
    }
}