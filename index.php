<?php

include_once('php/dbconfig.php');
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/stylesheets/screen.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
</head>
<body class="public" id="index">
<main>
    <div class="actu_block clearfix">
        <div></div>
        <h1>Dernières actualités</h1>
        <section class="article_block">

            <?php

            $query = "SELECT `title`, `architect`, `main_img`, `resume`, `slug` FROM articles LIMIT 2";
            $data = $crud->dataview($query);
            while($row = $data->fetch(PDO::FETCH_ASSOC)):
            ?>

            <article>
                <figure>
                    <img src="<?=$row['main_img']; ?>" alt="photo1">
                    <figcaption>
                        <?=$row['architect']; ?>
                    </figcaption>
                </figure>
                <h2>
                    <?=$row['title']; ?>
                </h2>

                <p>
                   <?=$row['resume']; ?>
                </p>
                <a href="journal.php?article=<?php echo $row['slug']; ?>">Lire la suite ></a>
            </article>

            <?php endwhile; ?>
        </section>
    </div>
<!---->
    <div class="clearfix">
        <section class="old_articles">

            <?php

            $query = "SELECT `title`, `architect`, `main_img`, `resume`, `slug` FROM articles WHERE `id` >= 3 LIMIT 3";
            $data = $crud->dataview($query);
            while($row = $data->fetch(PDO::FETCH_ASSOC)):
            ?>

            <article>
                <figure>
                    <img src="<?=$row['main_img']; ?>" alt="photo3">
                    <figcaption>
                        <?=$row['architect']; ?>
                    </figcaption>
                </figure>
                <h2>
                    <?=$row['title']; ?>
                </h2>

                <p><?=$row['resume']; ?> <a href="journal.php?article=<?php echo $row['slug']; ?>">Lire la suite ></a>
                </p>
            </article>

            <?php endwhile; ?>
        </section>
    </div>
</main>


<div class="scrolling_bloc">
    <div class="container_caption">
        <div>
            <h1>02</h1>
            <p>qui sommes-nous ?</p>
        </div>

        <div class="container_scrolling">
            <div class="content_scrolling_left">
                <p>
                    Depuis 1990, la revue <b>« L’Architecture de votre région »</b> propose un panorama détaillé de l’architecture d’une région, d’un territoire ou d’un pays.
                </p>
                <p>
                    Les sondages réalisés attestent de sa durée de vie et par son aspect référentiel, de sa fréquente consultation.
                </p>
                <p>
                    Une part prépondérante est laissée à « l’image » - le soin apporté aux reproductions photographiques est la garantie d’une attention particulière des lecteurs.
                </p>
            </div>
            <div class="content_scrolling_right">
                <p>
                    La revue <b> « L’Architecture de votre région » </b> est le témoignage des hommes qui construisent aujourd’hui. Elle constitue ainsi la vitrine de leur création.
                </p>
                <p>
                    Par sa diffusion ciblée, c’est aussi un support d’une exceptionnelle efficacité et porteur d’image pour tous les partenaires rédacteurs, entreprises, institutionnels et sociétés qui y participent.
                </p>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
