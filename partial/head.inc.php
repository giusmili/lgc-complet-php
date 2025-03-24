<?php
  
?>
<!DOCTYPE html>
<html lang="<?= $newUser->lang[0] ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= User::$title ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="<?= $newUser->css ?>">
</head>
<body>
    <header>
        <h1>
            <span aria-hidden="true">💡</span><?= data["title"] ?>
        </h1>
    </header>