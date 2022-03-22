<?php
define('TEMPLATE_URI', get_stylesheet_directory_uri(  ).'/') ;
?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title><?= wp_title( '|',true,'Wedding'); ?></title>
    <meta name="description" content="Szeretnénk meghívni erre a csodálatos alkalomra. Ünnepeljünk együtt!">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:title" content="<?= wp_title( ) ?>">
    <meta property="og:description" content="Szeretnénk meghívni erre a csodálatos alkalomra. Ünnepeljünk együtt!">
    <meta property="og:image" content="<?= TEMPLATE_URI ?>screenshot.jpg">
    <meta property="og:type" content="website">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= TEMPLATE_URI ?>apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= TEMPLATE_URI ?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= TEMPLATE_URI ?>favicon-16x16.png">
    <link rel="manifest" href="<?= TEMPLATE_URI ?>manifest.json">
    <link rel="mask-icon" href="<?= TEMPLATE_URI ?>safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" href="<?= TEMPLATE_URI ?>css/normalize.min.css">
    <link rel="stylesheet" href="<?= TEMPLATE_URI ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= TEMPLATE_URI ?>css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?= TEMPLATE_URI ?>css/flexslider.css">
    <link rel="stylesheet" href="<?= TEMPLATE_URI ?>dist/css/styles.min.css">
    <link rel="stylesheet" href="<?= TEMPLATE_URI ?>css/queries.css">
    <link rel="stylesheet" href="<?= TEMPLATE_URI ?>dist/css/animate.min.css">
    <script src="<?= TEMPLATE_URI ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body id="top">