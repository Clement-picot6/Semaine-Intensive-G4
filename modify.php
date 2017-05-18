<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espace administrateur</title>
    <link rel="stylesheet" href="assets/stylesheets/screen.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700" rel="stylesheet">
</head>
<body id="bo" class="modify">

<header class="bo_header">
    <div class="links">
        <a href="#">< retour au site internet</a>
        <span>Espace administrateur</span>
    </div>
</header>
<main>
    <div class="breadcrumb">
        <a href="#">Accueil</a> <span>></span> <a href="#" class="active">Boutique</a>
    </div>

    <section class="modify-form">
        <div class="head-modify-form">
            <span class="revue-number">N°285</span>
            <h2>Bretagne-Normandie</h2>
        </div>

        <div class="modify-fields">

            <form action="php/crud/edit-data.php">
                <div class="left-side">
                    <div class="number">
                        <label for="number">Numéro de la revue</label>
                        <input type="text" name="number" value="">
                    </div>

                    <div class="title">
                        <label for="title">Titre de la revue</label>
                        <input type="text" name="title" value="">
                    </div>

                    <div class="synopsis">
                        <label for="synopsis">Synopsis de la revue</label>
                        <textarea name="synopsis" id="" cols="33" rows="10"></textarea>
                    </div>
                </div>
                <div class="right-side">
                    <img src="" alt="">
                    <label for="">Couverture de la revue</label>
                    <input type="text" name="img" value="" rows="8">
                </div>

                <input type="submit" value="Modifier">
            </form>
        </div>
    </section>

</main>

</body>
</html>

