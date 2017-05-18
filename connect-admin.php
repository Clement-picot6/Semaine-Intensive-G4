<?php

session_start();
require_once "php/connect-admin/Connexion.class.php";

if(isset($_POST) && count($_POST) > 0) {
    if(isset($_POST['bouton_connexion']) && isset($_POST['username']) && isset($_POST['password'])) {
        $connexion = new Connexion($_POST['username'], $_POST['password']);

        if($connexion->session()) {
            header("Location: backoffice.php");
        }

    } else {
        echo"Erreur";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" type="text/css" href="assets/stylesheets/screen.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>


<body class="public" id="connect-admin">

<header class="clearfix">
    <img src="assets/img-content/header-boutique.jpg" alt="" class="header-bg">
    <h1 class="logo">
        <a href="#">
            <img src="assets/img-layout/logo.png" alt="logo">
        </a></h1>
    <nav>
        <ul>
            <a href="#"><li>revues</li></a>
            <a href="#"><li>boutique</li></a>
            <a href="#"><li>contact</li></a>
            <a href="#"><li>connexion</li></a>
            <a href="#"><li><img src="assets/img-layout/login.svg" alt="login"></li></a>
            <a href="#"><li><img src="assets/img-layout/search.svg" alt="search"></li></a>
        </ul>
    </nav>
</header>

<main>
    <div class="breadcrumb">
        <a href="#">Accueil</a> <span>></span> <a href="#" class="active">Connexion à l'espace administrateur</a>
    </div>

    <section class="connect">
        <div class="img"><img src="img-content/img-connect.jpg" alt=""></div>
        <div class="connect-form">
            <h2>Connexion <span class="return">à l'espace administrateur</span></h2>

            <?php if (isset($_GET['error'])) : ?>
                <p class="error-msg">Mauvais mot de passe / pseudo !</p>
            <?php endif; ?>

            <form action="php/connect-admin/do-connect.php" method="post">

                <div class="username">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" name="username" placeholder="Nom d'utilisateur...">
                </div>
                <div class="password">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" placeholder="Mot de passe...">
                </div>

                <input type="submit">
            </form>
        </div>
    </section>
</main>

<div class="newsletter">
    <div class="inner-newsletter">
        <div class="blue"></div>
        <p class="slogan">Restez au courant <span class="return">de toutes nos actualités !</span></p>
        <div class="subscribe">
            <form action="#">
                <input type="email" name="email" placeholder="Votre e-mail..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                <input type="submit" name="inscrit_newsletter" value="S'inscrire">
            </form>
        </div>
    </div>
</div>

<footer>
    <div class="inner-footer">
        <div class="navigate">
            <h3>Naviguer sur le site</h3>
            <a href="#">Nos revues</a>
            <a href="#">Contactez-nous</a>
            <a href="#">Inscription</a>
            <a href="#">Mentions Légales</a>
        </div>
        <div class="boutique">
            <h3>Notre boutique</h3>
            <a href="#">Commander</a>
            <a href="#">Nos abonnements</a>
        </div>
    </div>
</footer>
</body>
</html>

