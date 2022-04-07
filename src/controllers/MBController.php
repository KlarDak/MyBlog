<?php

namespace KDS\MyBlog\Controllers;

use KDS\MyBlog\Views\MBView;

class MBController
{
    public static function setRoute(array $args)
    {
        if ($args == null)
            MBView::sendError(404);

        switch ($args["addr"])
        {
            case "post":
                MBPost::getPost($args["id"]);
                break;
            case "test":
                include_once 'src/views/templates/test_page.php';
                break;
            case 404:
                MBView::sendError(404);
                break;
            default:
                header("Location: /404");
                break;
        }
    }
}