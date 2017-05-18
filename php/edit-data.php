<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 16/05/2017
 * Time: 17:24
 */

include_once 'dbconfig.php';

    $id = $_POST['id'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $img = $_POST['img'];
    $region = $_POST['region'];
    $synopsis = $_POST['synopsis'];

    if($crud->update($id,$number,$date,$img,$region, $synopsis))
    {

        header('Location: ../backoffice.php?inserted');
    }
    else
    {
        header('Location: ../backoffice.php?failure');
    }


?>

<!---->
<!---->
<!--    <div class="clearfix"></div>-->
<!---->
<!--    <div class="container">-->
<!--        --><?php
//        if(isset($msg))
//        {
//            echo $msg;
//        }
//        ?>
<!--    </div>-->
<!---->
<!--    <div class="clearfix"></div><br/>-->
<!---->
<!--    <div class="container">-->
<!---->
<!--        <form method='post'>-->
<!---->
<!--            <table class='table table-bordered'>-->
<!---->
<!--                <tr>-->
<!--                    <td>Number</td>-->
<!--                    <td><input type='text' name='number' class='form-control' value="--><?//= $data['number'] ?><!--" required></td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                    <td>date</td>-->
<!--                    <td><input type='text' name='date' class='form-control' value="--><?//= $data['date'] ?><!--" required></td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                    <td>Image</td>-->
<!--                    <td><input type='text' name='img' class='form-control' value="--><?//= $data['img'] ?><!--" required></td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                    <td>Région</td>-->
<!--                    <td><input type='text' name='region' class='form-control' value="--><?//= $data['region'] ?><!--" required></td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                    <td colspan="2">-->
<!--                        <button type="submit" class="btn btn-primary" name="btn-update">-->
<!--                            <span class="glyphicon glyphicon-edit"></span>  Update this Record-->
<!--                        </button>-->
<!--                        <a href="index.php" class="btn btn-large btn-success"> &nbsp; CANCEL</a>-->
<!--                    </td>-->
<!--                </tr>-->
<!---->
<!--            </table>-->
<!--        </form>-->
<!---->
<!---->
<!--    </div>-->
<!---->
