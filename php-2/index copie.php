<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 16/05/2017
 * Time: 14:02
 */

include_once 'dbconfig.php';
include_once 'header.php';

?>

    <div class="clearfix"></div>

    <div class="container">
        <a href="add-data.php" class="btn btn-large btn-info">&nbsp; AJOUTER</a>
    </div>

    <div class="clearfix"></div><br />

    <div class="container">
        <table class='table table-bordered table-responsive'>
            <tr>
                <th>#</th>
                <th>Number</th>
                <th>Date</th>
                <th>Image</th>
                <th>Region</th>
                <th colspan="2" align="center">Actions</th>
            </tr>
            <?php
            $query = "SELECT * FROM journals";
            $data = $crud->dataview($query);


            while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
            }
            ?>
        </table>


    </div>

<?php include_once 'footer.php'; ?>