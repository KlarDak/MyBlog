<?php
    use KDS\MyBlog\Views\MBVError;
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= MBVError::getTitle(); ?></title>
    <meta name="description" content="<?= MBVError::getDescription(); ?>">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div id="content">
        <h1><?= MBVError::getTitle(); ?></h1>
        <p id="error_desc"><?= MBVError::getDescription(); ?></p>
    </div>
</body>
</html>