<?php
/**
 * Created by PhpStorm.
 * User: alisonsayarath
 * Date: 18/05/2017
 * Time: 16:32
 */

include 'head.php';
include_once 'php/dbconfig.php';

?>

<body class="public" id="revues">

<?php include 'header.php'; ?>

<section class="last-journals clearfix">
    <h2>Nos dernières parutions</h2>

    <div class="all-journals">

        <?php

        $query = "SELECT `number`, `region`, `img`, `slug` FROM journals ORDER BY `number` DESC LIMIT 4";
        $data = $crud->dataview($query);

        while($row = $data->fetch(PDO::FETCH_ASSOC)):
        ?>

            <article class="revue">
                <a href="journal.php?revue=<?=$row['slug']; ?>">
                    <span> N°<?=$row['number']; ?></span>
                    <img src="<?=$row['img']; ?>">
                    <p><?=$row['region']; ?></p>
                </a>
            </article>

        <?php
        endwhile; ?>
    </div>
</section>

<section class="region">
    <div class="inner-region">
        <div class="head-region">
            <h2 class="blue">TOUTES NOS PARUTIONS</h2>
            <span class="visible" id="cartes">voir les cartes</span>
            <span class="hidden" id='regions'>voir les régions</span>
        </div>
        <div class="all-regions visible">
            <div class="metropole">
                <h3>Région France Métropole</h3>
                <br>
                <div class="liste">
                    <ul>
                        <li>Alsace</li>
                        <li>Aquitaine</li>
                        <li>Auvergne</li>
                        <li>Bourgone</li>
                        <li>Centre</li>
                        <li>Champagne-Ardenne</li>
                        <li>Corse</li>
                        <li>Franche-Comté</li>
                    </ul>
                </div>
                <div class="liste">
                    <ul>
                        <li>Ile de France</li>
                        <li>Languedoc-Roussillon</li>
                        <li>Limousin</li>
                        <li>Lorraine</li>
                        <li>Midi-Pyrénées</li>
                        <li>Nord Pas de Calais</li>
                        <li></li>
                    </ul>
                </div>
                <div class="liste">
                    <ul>
                        <li>Pays de la Loire</li>
                        <li>Picardie</li>
                        <li>Poitou Charentes</li>
                        <li>Provence Alpes Côte d'Azur</li>
                        <li>Rhône Alpes</li>
                    </ul>
                </div>
            </div>
            <div class="outre-mer">
                <div class="liste">
                    <h3>Collectivités d'Outre-mer</h3>
                    <ul>
                        <li>Guadeloupe</li>
                        <li>Guyane</li>
                        <li>Martinique</li>
                        <li>Réunion</li>
                        <li>Mayotte</li>
                        <li>Saint Barthélémy</li>
                        <li>Saint Martin</li>
                    </ul>
                </div>
            </div>

            <div class="etranger">
                <div class="liste">
                    <h3>Etranger</h3>
                    <ul>
                        <li>Belgique</li>
                        <li>Suisse</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class ="cartes hidden">
            <div class="container_h3">
                <h3>Collectivités d'Outre-mer</h3>
                <span>Martinique</span>
            </div>

            <div class="region-img">
                <div class="region-left">
                    <img src="../img-content/france.png">
                </div>

                <div class="region-right">
                    <figure>
                        <img id="martinique" src="../img-content/martinique.png">
                        <img id="guyane" src="../img-content/guyane.png">
                        <img id="stpierremiquelon" src="../img-content/stpierremiquelon.png">
                    </figure>
                    <figure>
                        <img id="mayotte" src="../img-content/mayotte.png">
                        <img id="guadeloupe" src="../img-content/guadeloupe.png">
                        <img id="reunion" src="../img-content/reunion.png">
                    </figure>
                    <figure>
                        <img id="belgique" src="../img-content/belgique.png">
                        <img id="suisse" src="../img-content/suisse.png">
                    </figure>
                </div>

            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    // JS CHANGER DIV
    var afficherCacherCartes = document.getElementById('cartes');
    var afficherCacherRegions = document.getElementById('regions');
    var regions = document.querySelector('.all-regions');
    var cartes = document.querySelector('.cartes');


    afficherCacherCartes.addEventListener('click', function(){

        afficherCacherCartes.classList.add('hidden');
        afficherCacherCartes.classList.remove('active');

        regions.classList.add('hidden');
        regions.classList.remove('active');

        afficherCacherRegions.classList.remove('hidden');
        afficherCacherRegions.classList.add('active');

        cartes.classList.add('active');
        cartes.classList.remove('hidden');
        console.log('yiyiiyyi');
    });

    afficherCacherRegions.addEventListener('click', function(){

        afficherCacherRegions.classList.remove('active');
        afficherCacherRegions.classList.add('hidden');

        cartes.classList.remove('active');
        cartes.classList.add('hidden');

        afficherCacherCartes.classList.add('active');
        afficherCacherCartes.classList.remove('hidden');

        regions.classList.add('active');
        regions.classList.remove('hidden');

        console.log('yiyiiyyi');

    });




    // JS HOVER
    var continent = document.querySelector('.container_h3 h3')
    var pays = document.querySelector('.container_h3 span')

    var franceImg = document.querySelector('.region-left img');
    var martiniqueImg= document.getElementById("martinique");
    var guyaneImg =document.getElementById("guyane");
    var stppierremiquelonImg = document.getElementById("stpierremiquelon");
    var mayotteImg= document.getElementById("mayotte");
    var guadeloupeImg= document.getElementById("guadeloupe");
    var reunionImg= document.getElementById("reunion");
    var belgiqueImg= document.getElementById("belgique");
    var suisseImg= document.getElementById("suisse");



    franceImg.onmouseover =function(){

        continent.innerHTML='France';
        pays.innerHTML='Régions';

    }
    martiniqueImg.onmouseover =function(){

        continent.innerHTML='Collectivités d\'Outre-mer';
        pays.innerHTML='Martinique';

    }

    guyaneImg.onmouseover =function(){

        continent.innerHTML='Collectivités d\'Outre-mer';
        pays.innerHTML='Guyane';

    }
    stppierremiquelonImg.onmouseover =function(){

        continent.innerHTML='Collectivités d\'Outre-mer';
        pays.innerHTML='Saint Pierre Miquelon';

    }
    mayotteImg.onmouseover =function(){

        continent.innerHTML='Collectivités d\'Outre-mer';
        pays.innerHTML='Mayotte';

    }
    guadeloupeImg.onmouseover =function(){

        continent.innerHTML='Collectivités d\'Outre-mer';
        pays.innerHTML='Guadeloupe';

    }
    reunionImg.onmouseover =function(){

        continent.innerHTML='Collectivités d\'Outre-mer';
        pays.innerHTML='Réunion';
    }
    belgiqueImg.onmouseover =function(){

        continent.innerHTML='Etranger';
        pays.innerHTML='Belgique';

    }
    suisseImg.onmouseover =function(){

        continent.innerHTML='Etranger';
        pays.innerHTML='Suisse';

    }










</script>
</body>
</html>

