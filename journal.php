<?php

include_once 'php/dbconfig.php';
include 'head.php';

if(isset($_GET['revue'])) {

    $query = "SELECT `number`,`date`,`img`, `region`, `synopsis`, `partner`, `alt` FROM journals WHERE `slug` = :slug";
    $data = ['slug' => $_GET['revue']];
    $data = $crud->bind($query, $data);
    $data = $data->fetch(PDO::FETCH_ASSOC);
}

?>

<body class="public"  id="journal">

<?php include 'header.php'; ?>

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

<?php include 'footer.php'; ?>

