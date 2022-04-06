<?php

namespace KDS\MyBlog\Views;

class MBView
{
    public static function sendError(int $code)
    {
        switch ($code)
        {
            case 404:
                include_once 'templates/error_404.php';
                break;
        }
    }
}