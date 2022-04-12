<?php

namespace KDS\MyBlog\Views;

class MBVError extends MBView
{
    public static function sendNotFoundError() : void
    {
        MBView::setView("error.php", [
            "title" => "404 | Страница не найдена!",
            "description" => "Запрашиваемая вами страница не найдена!",
            "author" => "KDS",
        ]);
    }

    public static function setError(string $code)
    {
        header("Location: /$code");
    }

}