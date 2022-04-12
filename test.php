<?php
    require_once __DIR__ . "/vendor/autoload.php";

//    var_dump(KDS\MyBlog\Models\MBMPost::getPost(1));
//    KDS\MyBlog\Views\MBVPost::setInit(["title" => "Проверка", "description" => "Аааа", "author" => "KlarDak", "text" => "Проверка", "date_added" => "Сегодня в 16:27"]);
    KDS\MyBlog\Models\MBMPost::getPost(1);