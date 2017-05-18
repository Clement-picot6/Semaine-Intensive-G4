<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 17/05/2017
 * Time: 16:48
 */
include_once('php/dbconfig.php');
include 'header-bo.php';

?>


<main>
  <section class="view-journals">
    <div class="head-view-journals">
      <h2>Toutes les revues</h2>
      <div class="filters">
        <span class="active"><a href="backoffice.php?order=number">par n°</a></span>
        <span><a href="backoffice.php?order=region">par région</a></span>
      </div>
    </div>

    <table border="0" cellspacing="0" cellpadding="0">
      <thead>
        <tr>
          <td>n°</td>
          <td>région</td>
          <td>visible</td>
          <td>modifier</td>
          <td>supprimer</td>
        </tr>
      </thead>
      <tbody>

      <?php

      if (isset($_GET['order'])) {
        if ($_GET['order'] === 'number'){
          $query = "SELECT `id`, `number`, `region` FROM journals ORDER BY `number` DESC";
          }
      }else {
        $query = "SELECT `id`, `number`, `region` FROM journals ORDER BY `region` ASC";
      }

      $data = $crud->dataview($query);
      while($row = $data->fetch(PDO::FETCH_ASSOC)):
      ?>
        <tr>
          <td><?=$row['number']?></td>
          <td><?=$row['region']?></td>
          <td>yes</td>
          <td><a href="modify.php?id=<?php echo $row["id"]?>" class="btn btn-large btn-info">Edit</a></td>
          <td>Delete</td>
        </tr>
      <?php endwhile;?>
      </tbody>
    </table>
  </section>

  <section class="add-journal">
    <div class="inner-add-journal">
      <div class="head-add-journal">
        <span><i></i></span>
        <span>Ajouter une nouvelle revue ?</span>
      </div>

      <h2>Ajouter une nouvelle revue</h2>

      <form action="php/add-data.php" method="post">
        <div class="left-side">
          <div class="date">
            <label for="#">Date</label>
            <input type="text" name="date" placeholder="Date de la revue...">
          </div>
          <div class="synopsis">
            <label for="#">Synopsis</label>
            <textarea name="synopsis" placeholder="Synopsis de la revue..." rows="10"></textarea>
          </div>
      </div>

        <div class="right-side">
          <div class="number">
            <label for="#">Numéro de la revue</label>
            <input type="text" name="number" placeholder="Numéro de la revue...">
          </div>
          <div class="img">
            <label for="#">Couverture de la revue</label>
            <input type="text" name="img" placeholder="Chemin de la couverture...">
          </div>
          <div class="region">
            <label for="#">Region de la revue</label>
            <input type="text" name="region" placeholder="Region de la revue...">
          </div>
          <div class="actions">
            <a class="view">Aperçu</a>
            <input type="submit" value="Publier">
          </div>
      </div>
      </form>
  </div>
  </section>
</main>

</body>
</html>
