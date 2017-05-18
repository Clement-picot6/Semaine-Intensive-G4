<?php

include_once 'php/dbconfig.php';
include 'header-bo.php';

if(isset($_GET['id'])) {
    $query = "SELECT `number`,`date`,`img`, `region`, `synopsis` FROM journals WHERE id = :id";

    $data = ['id' => $_GET['id']];
    $data = $crud->bind($query, $data);
    $data = $data->fetch(PDO::FETCH_ASSOC);

} else {
    header('Location: ../../backoffice.php');
}

?>

<main>
    <div class="breadcrumb">
        <a href="#">Retour au backoffice</a> <span>></span> <a href="#" class="active"><?php echo $data['number'] . ' - ' . $data['region'];?></a>
    </div>

    <section class="modify-form">
        <div class="head-modify-form">
            <span class="revue-number">N°<?php echo $data['number']; ?></span>
            <h2><?php echo $data['region']; ?></h2>
        </div>

        <div class="modify-fields">

            <form action="php/crud/edit-data.php">
                <div class="left-side">
                    <div class="number">
                        <label for="number">Numéro de la revue</label>
                        <input type="text" name="number" value="<?php echo $data['number']; ?>">
                    </div>

                    <div class="title">
                        <label for="title">Region de la revue</label>
                        <input type="text" name="region" value="<?php echo $data['region']; ?>">
                    </div>

                    <div class="synopsis">
                        <label for="synopsis">Synopsis de la revue</label>
                        <textarea name="synopsis" id="" cols="33" rows="10"><?php echo $data['synopsis']; ?></textarea>
                    </div>
                </div>
                <div class="right-side">
                    <img src="<?php echo $data['img']; ?>" alt="">
                    <label for="">Couverture de la revue</label>
                    <input type="text" name="img" value="<?php echo $data['img']; ?>" rows="8">
                </div>

                <input type="submit" value="Modifier">
            </form>
        </div>
    </section>

</main>

</body>
</html>

