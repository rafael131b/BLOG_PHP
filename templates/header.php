<?php
include_once ("helpers/url.php");
include_once ("data/categoria.php");
include_once ("data/posts.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <link rel="stylesheet" href="<?=$BASE_URL?>/css/style.css">

    <!-- GOOGLE FONTS -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
<a href="<?=$BASE_URL?>" id="logo">
<img src="<?=$BASE_URL?>/img/logo.svg" alt="blog codar">
</a>
<nav>
<ul id="navbar">
<li> <a href="<?=$BASE_URL?>" class="nav-link">Home</a></li>
<li> <a href="#" class="nav-link">Categorias</a></li>
<li> <a href="#" class="nav-link">Sobre</a></li>
<li> <a href="<?=$BASE_URL?>contato.php" class="nav-link">contato</a></li>
</ul>
</nav>
<header>