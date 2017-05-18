<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 17/05/2017
 * Time: 12:28
 */

session_start();


require_once "../dbconfig.php";
require_once "../CRUD/class.crud.php";
if(!isset($_SESSION['username']))
{
    header("Location: Connexion.php");
    exit();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Panel_admin</title>
</head>
<body>
<main>
    <h1>Bienvenue</h1>
    <h2>Magazines</h2>

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



    <div><a href="Deconnexion.php">Deconnexion</a></div>
</main>
</body>
</html>