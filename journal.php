<?php

include_once 'php/dbconfig.php';
include 'header.php';

if(isset($_GET['revue'])) {

    $query = "SELECT `number`,`date`,`img`, `region`, `synopsis`, `partner`, `alt` FROM journals WHERE `slug` = :slug";
    $data = ['slug' => $_GET['revue']];
    $data = $crud->bind($query, $data);
    $data = $data->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/screen.css">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
</head>


<body class="public" style="overflow-x: hidden;" id="journal">
<header class="clearfix">
    <img src="assets/img-layout/header-journal.jpg" alt="" class="header-bg">
    <h1 class="logo">
        <a href="#">
            <img src="assets/img-layout/logo.png" alt="logo">
        </a></h1>
    <nav class="nav_barre">
        <ul>
            <li><a href="#">revues</a></li>
            <li><a href="#">boutique</a></li>
            <li><a href="#">contact</a></li>
            <li><a href="#">connexion</a></li>
            <li><a href="#"><img src="assets/img-layout/login.svg" alt="login"></a></li>
            <li><a href="#"><img src="assets/img-layout/search.svg" alt="search"></a></li>
        </ul>
    </nav>

    <input type="checkbox" id="check1" name=""/>
    <nav class="navPhone">
        <div class="mainNav">
            <label for="check1">
                <div class="choice">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </label>
        </div>
        <div class="contentMenuPhone">
            <ul>
                <li><a href="">revues</a></li>
                <li><a href="">boutique</a></li>
                <li><a href="">contact</a></li>
                <li><a href="">connexion</a></li>
                <li><a href="">appel d'offre</a></li>
            </ul>
        </div>
        <form class="form-wrapper">
            <input type="text" id="search" placeholder="Search for..." required>
            <input type="submit" value="go" id="submit">
        </form>
    </nav>
</header>

<main>
    <div class="breadcrumb">
        <a href="#">Accueil</a> <span>></span> <a href="#">Toutes les revues</a> <span>></span> <a href="" class="active"><?=$data['number'] . ' '. $data['region']; ?></a>
    </div>

    <section>
        <div class="visual">
            <img src="<?=$data['img']; ?>" alt="<?=$data['alt']; ?>">
        </div>
        <div class="caption">
            <span class="revue-number">N°<?=$data['number']; ?></span>
            <h2><?=$data['region']; ?></h2>

            <p><?=$data['synopsis']; ?></p>
        </div>
        </div>

        <div class="partners">
            <h3>Partenaires :</h3>
            <p><?=$data['partner']; ?></p>
    </section>
</main>

</body>
</html>

