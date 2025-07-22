<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/php_interface/init.php";
use lib\SiteHelper;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/template/images/origami-logo.svg" type="image/x-icon">
    <link href="/template/styles/site.css" rel="stylesheet">
    <script src="/template/scripts/jquery.js"></script>
    <script src="/template/scripts/jquery-anyform.min.js"></script>
    <script src="/template/scripts/site.js"></script>
    <script src="/template/scripts/form.js"></script>
    <title>Онлайн магазин смартфонов</title>
</head>
<body>
<header>
    <div id="headerInside">
        <a href="/">
            <div id="logo"></div>
            <div id="companyName">Brand</div>
        </a>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="/catalog/">
                Магазин
            </a>
            <a href="/contact-us/">
                Связаться с нами
            </a>
        </div>
    </div>
</header>
<div id="content">