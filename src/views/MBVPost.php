<?php
namespace KDS\MyBlog\Views;

class MBVPost
{
    public static string $title;
    public static string $description;
    public static string $text;

    public static function generatePage(array $post)
    {
        self::setOptions($post);
        include_once 'templates/post_page.php';
    }

    public static function setOptions(array $options)
    {
        self::$title = $options["title"];
        self::$description = $options["description"];
        self::$text = $options["text"];
    }
}