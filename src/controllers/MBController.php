<?php

namespace KDS\MyBlog\Controllers;
use KDS\MyBlog\Models\MBMPost;
use KDS\MyBlog\Views\MBVError;

class MBController
{
    public static string $address;
    public static array $get_args;

    public static function startRouter()
    {
        self::$get_args = $_GET ?? [];
        self::$address = (self::getArg("addr")) ?? "*";
    }

    public static function getArg(string $arg) : string|bool
    {
        return self::$get_args[$arg] ?? false;
    }

    public static function getAddress() : string
    {
        return self::$address ?? "";
    }

    public static function tryRoute(string $address, mixed $func)
    {
        return (self::getAddress() == $address) ? $func() : false;
    }

    public static function setDefault(mixed $func)
    {
        return (self::getAddress() == "*") ? $func : false;
    }

}