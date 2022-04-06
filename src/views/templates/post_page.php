<?php
    use KDS\MyBlog\Views\MBVPost;
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= MBVPost::$title; ?></title>
    <meta name="description" content="<?= MBVPost::$description; ?>">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div id="content">
        <?php
            echo "<h1>".MBVPost::$title."</h1>";

            $text = json_decode(MBVPost::$text, true);

            foreach ($text[0] as $key => $value)
            {
                switch ($key)
                {
                    case "text":
                        echo "<p>".$value."</p>";
                    break;
                }
            }
        ?>
    </div>
</body>
</html>