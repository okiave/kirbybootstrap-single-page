<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $page->title()->html() ?> -
            <?php if ($page->titlesuffix() != ''): ?>
                <?php echo $page->titlesuffix()->html() ?>
                <?php else: ?>
                   <?php echo $site->titlesuffix()->html() ?>
            <?php endif ?>
            &#124;&nbsp;<?php echo $site->title()->html() ?>
        </title>
        <meta name="author" content="<?php echo $site->author()->html() ?>">
        <?php if ($page->description() != ''): ?>
            <meta name="description" content="<?php echo $page->description()->html() ?>">
            <?php else: ?>
                <meta name="description" content="<?php echo $site->description()->html() ?>">
        <?php endif ?>
        <meta name="robots" content="index, follow">
        <link rel="author" href="humans.txt">
        <?php echo css('assets/css/vendor/bootstrap.min.css') ?>
        <?php echo css('assets/css/style.css') ?>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php snippet('favicons') ?>
    </head>
    <body>
        <div class="container">
            <header class="row">
                <div class="col-md-12">

                </div>
            </header>
            <?php snippet('navbar') ?>
