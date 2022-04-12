<?php

namespace KDS\MyBlog\Views;

class MBVPost extends MBView
{
    protected static string $date_added;

    public static function setInit(array $content)
    {
        self::$date_added = $content["date_added"];
        $init = ["title" => $content["title"], "description" => $content["description"], "author" => $content["author"], "content" => $content["text"]];
        self::setView("1.php", $init);
    }

    public static function generatePost(string $textpost)
    {
        $post = json_decode($textpost, true);

        foreach ($post as $item) {
            $type = key($item);
            echo self::sElem(["type" => $type, "value" => $item[$type]]);
        }
    }

    public static function getDateAdded() : string
    {
        return self::$date_added;
    }


}