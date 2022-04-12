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
    <title><?= MBVPost::getTitle(); ?></title>
    <meta name="description" content="<?= MBVPost::getDescription(); ?>">
    <link rel="shortcut icon" href="/assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div id="content">
        <?= "<h1>".MBVPost::getTitle()."</h1>" ?>
        <?= MBVPost::generatePost(MBVPost::getContent()); ?>
    </div>
</body>
</html>