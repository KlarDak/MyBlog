<?php
    require_once __DIR__ . "/vendor/autoload.php";

    use KDS\MyBlog\Models\MBMPost;
    use KDS\MyBlog\Controllers\MBController;

    MBController::startRouter();

    match (MBController::getAddress())
    {
        "test" => MBMPost::getPost(MBController::getArg("id")),
        default => \KDS\MyBlog\Views\MBVError::sendNotFoundError()
    };
