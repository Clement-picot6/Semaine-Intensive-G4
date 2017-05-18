<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 16/05/2017
 * Time: 13:27
 */


include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
    $number = $_POST['number'];
    $date = $_POST['date'];
    $img = $_POST['img'];
    $region = $_POST['region'];

    if($crud->create($number,$date,$img,$region))
    {
        header("Location: add-data.php?inserted");
    }
    else
    {
        header("Location: add-data.php?failure");
    }
}
?>

<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
    ?>
    <div class="container">
        <div class="alert alert-info">
            <strong>WOW!</strong> Record was inserted successfully <a href="index.php">HOME</a>!
        </div>
    </div>
    <?php
}
else if(isset($_GET['failure']))
{
    ?>
    <div class="container">
        <div class="alert alert-warning">
            <strong>SORRY!</strong> ERROR while inserting record !
        </div>
    </div>
    <?php
}
?>

<div class="clearfix"></div><br/>

<div class="container">


    <form method='post'>

        <table class='table table-bordered'>

            <tr>
                <td>Number</td>
                <td><input type='text' name='number' class='form-control' required></td>
            </tr>

            <tr>
                <td>Date</td>
                <td><input type='text' name='date' class='form-control' required></td>
            </tr>

            <tr>
                <td>Images</td>
                <td><input type='file' name='img' class='form-control' required></td>
            </tr>

            <tr>
                <td>Région</td>
                <td><input type='text' name='region' class='form-control' required></td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary" name="btn-save">
                        <span class="glyphicon glyphicon-plus"></span> Create New Record
                    </button>
                    <a href="index.php" class="btn btn-large btn-success">Back to index</a>
                </td>
            </tr>

        </table>
    </form>


</div>

