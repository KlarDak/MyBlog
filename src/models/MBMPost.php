<?php

namespace KDS\MyBlog\Models;

class MBMPost
{
    private static string $db_host = "localhost";
    private static string $db_user = "klardakadmin";
    private static string $db_pass = "25Ehi5Aa";
    private static string $db_name = "myblog";

    public static function getPost(mixed $id)
    {
        if (!$connection = self::getConnection())
            return false;

        $query = $connection->prepare("SELECT * FROM posts WHERE id = :id");

        return ($query->execute([":id" => $id])) ? $query->fetch(\PDO::FETCH_ASSOC) : false;
    }

    public static function getConnection() : bool|\PDO
    {
        if ($db = new \PDO("mysql:host=".self::$db_host.";dbname=".self::$db_name, self::$db_user, self::$db_pass))
        {
            return $db;
        }
        else
        {
            return false;
        }
    }
}