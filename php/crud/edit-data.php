<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 16/05/2017
 * Time: 17:24
 */

include_once '../dbconfig.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location: ../../backoffice.php');
}

if(isset($_POST['btn-update']))
{
    $id = $_GET['id'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $img = $_POST['img'];
    $region = $_POST['region'];

    if($crud->update($id,$number,$date,$img,$region))
    {
        $msg = "<div class='alert alert-info'>
    <strong>WOW!</strong> Record was updated successfully <a href='index.php'>HOME</a>!
    </div>";
    }
    else
    {
        $msg = "<div class='alert alert-warning'>
    <strong>SORRY!</strong> ERROR while updating record !
    </div>";
    }
}

if(isset($_GET['id']))
{
    $query = "SELECT * FROM journals WHERE id = :id";

    $data = ['id' => $_GET['id']];
    $data = $crud->bind($query, $data);
    $data = $data->fetch(PDO::FETCH_ASSOC);
    var_dump($data);
} else {
    die('TA MEEERRRREEE !!!!!!!!');
}

?>



    <div class="clearfix"></div>

    <div class="container">
        <?php
        if(isset($msg))
        {
            echo $msg;
        }
        ?>
    </div>

    <div class="clearfix"></div><br/>

    <div class="container">

        <form method='post'>

            <table class='table table-bordered'>

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

