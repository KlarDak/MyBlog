<?php
namespace KDS\MyBlog\Controllers;

use KDS\MyBlog\Models\MBMPost;
use KDS\MyBlog\Views\MBVPost;

class MBPost
{
    public static function getPost(mixed $id)
    {
        if (gettype($id) == ("integer" || "string"))
        {
            if ($result = MBMPost::getPost($id))
                MBVPost::generatePage($result);
        }
    }
}