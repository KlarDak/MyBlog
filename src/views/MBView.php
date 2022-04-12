<?php

namespace KDS\MyBlog\Views;

class MBView
{
    protected static string $title;
    protected static string $description;
    protected static string $author;
    protected static string|array $content;

    protected static string $templates_dir = "templates/";

    public static function setView(string $template, array $page = null)
    {
        if ($page != null)
            self::setPageInfo($page);

        include_once self::$templates_dir . $template;
    }

    public static function setPageInfo(array $page) : void
    {
        self::$title = $page["title"] ?? "";
        self::$description = $page["description"] ?? "";
        self::$author = $page["author"] ?? "";
        self::$content = $page["content"] ?? "";
    }

    public static function getTitle() : string
    {
        return self::$title;
    }

    public static function getDescription() : string
    {
        return self::$description;
    }

    public static function getAuthor() : string
    {
        return self::$author;
    }

    public static function getContent(): string|array
    {
        return self::$content;
    }

    public static function sElem(array $options) : string|bool
    {
        if ($options["type"] == null)
            return false;

        $type = $options["type"]; // Упрощаем себе жизнь...
        $value = $options["value"];

        return match($type){
            "a" => "<$type href='{$options["link"]}'>$value</$type>",
            "img" => "<$type src='{$options["link"]}' alt='{$options["alt"]}'>",
            "text" => "<p>$value</p>",
            default => "<$type>$value</$type>"
        };
    }
}