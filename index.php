<?php
    require_once __DIR__ . "/vendor/autoload.php";

    if ($_GET["addr"] == "post"){
        \KDS\MyBlog\Controllers\MBPost::getPost($_GET["id"]);
    }
    elseif ($_GET["addr"] == "404")
    {
        \KDS\MyBlog\Views\MBView::sendError(404);
    }
    else
    {
        header("Location: /404");
    }
