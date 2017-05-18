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

include 'head.php';
?>

<body class="public" id="connect-admin">

<?php include 'header.php'; ?>

<main>
    <div class="breadcrumb">
        <a href="#">Accueil</a> <span>></span> <a href="#" class="active">Connexion à l'espace administrateur</a>
    </div>

    <section class="connect">
        <div class="img"><img src="assets/img-content/img-connect.jpg" alt=""></div>
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

<?php include 'footer.php'; ?>
