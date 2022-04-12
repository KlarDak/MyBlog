<?php

namespace KDS\MyBlog\Models;

use KDS\MyBlog\Views\MBVError;
use KDS\MyBlog\Views\MBVPost;

class MBMPost extends MBModel
{
    public static function getPost(int $id)
    {
        $connect = MBModel::getConnection();

        $query = $connect->prepare("SELECT * FROM posts WHERE id = :id");
        $query->bindParam(":id", $id, \PDO::PARAM_INT);

        if ($query->execute()) {
            $result = $query->fetch(\PDO::FETCH_ASSOC);
            if ($result)
                MBVPost::setInit($result);
            else
                MBVError::sendNotFoundError();
        }
        else {
            MBVError::sendNotFoundError();
        }
    }
}