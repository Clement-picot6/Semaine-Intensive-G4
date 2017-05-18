<?php include 'head.php'; ?>
<body class="public" id="order">
  <?php include 'header.php'; ?>


<main class="clearfix <?php if (isset($_GET['successed'])) {
        if ($_GET['successed'] == 1) {
            echo 'ending';
        }
    }?>" >
    <div class="breadcrumb">
        <a href="#">Accueil</a> <span>></span> <a href="#">Boutique</a> <span>></span> <a href="#" class="active">Commander</a>
    </div>

    <div class="container_btn_fields step-before" style="display: none;">
        <button class="step-before"><img src="assets/img-content/arrow_right.png" alt="fleche"> étape précédente</button>
    </div>

    <div class="container_signin clearfix">
        <div class="container_steps clearfix">
            <p class="my-step">1</p>
            <div></div>
            <p>4</p>
        </div>
        <!-- end of container steps -->

        <section class="container_fields clearfix">
            <form action="php/order/do-order.php" method="post">
                <div class="form-step-1 active">
                    <div class="left_fields">
                        <label>Nom <span class="req-field">*</span></label>
                        <input type="text" name="lastname" placeholder="Nom..." required>
                        <label>Prénom <span class="req-field">*</span></label>
                        <input type="text" name="firstname" placeholder="Prénom..." required>
                        <label>Fonction</label>
                        <input type="text" name="fonction" placeholder="Fonction...">
                    </div>
                    <div class="right_fields">
                        <label>Activité</label>
                        <input type="text" name="activite" placeholder="Activité...">
                        <label>Raison Sociale</label>
                        <input type="text" name="raison_sociale" placeholder="Raison Sociale...">
                    </div>
                </div>
                <!-- end of step 1 -->

                <div class="form-step-2">
                    <div class="left_fields">
                        <label>Adresse <span class="req-field">*</span></label>
                        <input type="text" name="address" placeholder="Adresse..." required>
                        <label>Ville <span class="req-field">*</span></label>
                        <input type="text" name="city" placeholder="Ville..." required>
                        <label>Pays <span class="req-field">*</span></label>
                        <input type="text" name="country" placeholder="Pays..." required>
                    </div>
                    <div class="right_fields">
                        <label>Activité</label>
                        <input type="text" name="code_postal" placeholder="Code Postal...">
                    </div>
                </div>
                <!-- end of step 2 -->

                <div class="form-step-3">
                    <div class="left_fields">
                        <label>Téléphone</label>
                        <input type="tel" name="telephone" placeholder="Numéro de téléphone...">
                        <label>Email <span class="req-field">*</span></label>
                        <input type="mail" name="mail" placeholder="Email..." required>
                        <label>Pays</label>
                        <input type="mail" name="confirm_mail" placeholder="Confirmez votre Email...">
                    </div>
                    <div class="right_fields">
                        <label>Fax</label>
                        <input type="tel" name="fax" placeholder="Fax...">


                    </div>
                </div>
                <!-- end of step 3 -->

                <div class="form-step-4">
                    <div class="inner-container">
                        <div class="head-final">
                            <h2>Et enfin... <span class="return">Choisissez vos revues !</span></h2>

                        </div>
                        <div class="list-final">
                            Pas de revues encore sélectionnées !
                        </div>
                        <input type="submit" value="valider" class="submit">
                    </div>


            </form>
    </div>
    <!-- end of step 4 -->

    <div class="form-step-5">
        <div class="inner-container">
            <h2 class="ending-msg">Merci ! <span class="return">Votre demande a bien été envoyée</span></h2>

            <a href="assets/accueil.html">< retour sur la page d'accueil</a>
        </div>
    </div>
    <!-- end of step 5 -->
    </div>
    </section>

    </div>
    <div class="container_btn_fields step-after">
        <button>étape suivante <img src="assets/img-content/arrow.png" alt="fleche"></button>
    </div>
</main>

<?php include 'footer.php'; ?>
