<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 17/05/2017
 * Time: 17:23
 */
include_once 'php/dbconfig.php';


if(isset($_GET['id']))
{
    $query = "SELECT `number`, `date`, `img`, `region`, `synopsis` FROM journals WHERE id = :id";

    $data = ['id' => $_GET['id']];
    $data = $crud->bind($query, $data);
    $data = $data->fetch(PDO::FETCH_ASSOC);
    echo $data['number'];
} else {
    die('TA MEEERRRREEE !!!!!!!!');
}
?>

<div class="clearfix"></div><br/>

    <div class="container">

        <form action="php/edit-data.php" method='post'>

            <table class='table table-bordered'>

                <input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">

                <tr>
                    <td>Number</td>
                    <td><input type='text' name='number' class='form-control' value="<?= $data['number'] ?>" required></td>
                </tr>

                <tr>
                    <td>date</td>
                    <td><input type='text' name='date' class='form-control' value="<?= $data['date'] ?>" required></td>
                </tr>

                <tr>
                    <td>Image</td>
                    <td><input type='text' name='img' class='form-control' value="<?= $data['img'] ?>" required></td>
                </tr>

                <tr>
                    <td>Région</td>
                    <td><input type='text' name='region' class='form-control' value="<?= $data['region'] ?>" required></td>
                </tr>

                <tr>
                    <td>Synopsis</td>
                    <td><input type='text' name='synopsis' class='form-control' value="<?= $data['synopsis'] ?>" required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary" name="btn-update">
                            <span class="glyphicon glyphicon-edit"></span>  Update this Record
</button>
                        <a href="index.php" class="btn btn-large btn-success"> &nbsp; CANCEL</a>
                    </td>
                </tr>

            </table>
        </form>


    </div>
