<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 16/05/2017
 * Time: 14:02
 */

include_once('dbconfig.php');


?>

    <div class="clearfix"></div>

        <div class="container">
            <a href="add-data.php" class="btn btn-large btn-info">Add Data</a>
        </div>


    <div class="clearfix"></div><br />

    <div class="container">
        <table class='table table-bordered table-responsive'>
            <tr>
                <th>Number</th>
                <th>Date</th>
                <th>Image</th>
                <th>Region</th>
                <th colspan="2" align="center">Actions</th>
            </tr>

            <?php
            $query = "SELECT * FROM journals";
            $data = $crud->dataview($query);

            while($row = $data->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?php echo $row['number'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <td><?php echo $row['img'] ?></td>
                <td><?php echo $row['region'] ?></td>

                <td class="container">
                    <a href="edit-data.php?id=<?php echo $row["id"]?>" class="btn btn-large btn-info">Edit</a>
                </td>
                <td class="container">
                    <a href="delete.php?id=<?php echo $row["id"]?>" class="btn btn-large btn-info">Delete</a>
                </td>
            <?php
            }
            ?>
            </tr>

        </table>


    </div>
