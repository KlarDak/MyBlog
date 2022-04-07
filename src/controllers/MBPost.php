<?php
namespace KDS\MyBlog\Controllers;

use KDS\MyBlog\Models\MBMPost;
use KDS\MyBlog\Views\MBView;
use KDS\MyBlog\Views\MBVPost;

class MBPost
{
    public static function getController($id = null)
    {
        if ($id != null) {
            self::getPost($id);
        }
        else {
            MBView::sendError(404);
        }
    }

    public static function getPost(mixed $id)
    {
        if (gettype($id) == ("integer" || "string"))
        {
            if ($result = MBMPost::getPost($id))
                MBVPost::generatePage($result);
        }
    }
}