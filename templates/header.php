<?php
    include_once("/helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="<?= $BASE_URL?>/css/styles.css">
</head>
<body>
    <header>
        <a href="<?=$BASE_URL?>/" class="logo">
            <img src="/img/logo.svg" alt="">
        </a>
        <nav>
            <ul class="navbar">
                <li><a class="nav-link" href="<?=$BASE_URL?>/">Home</a></li>
                <li><a class="nav-link" href="<?=$BASE_URL?>">Sobre</a></li>
                <li><a class="nav-link" href="#">Categorias</a></li>
                <li><a class="nav-link" href="#">Sobre</a></li>
            </ul>
        </nav>
    </header>
