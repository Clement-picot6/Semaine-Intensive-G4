<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 16/05/2017
 * Time: 13:27
 */


include_once 'dbconfig.php';

    $number = $_POST['number'];
    $date = $_POST['date'];
    $img = $_POST['img'];
    $region = $_POST['region'];
    $synopsis = $_POST['synopsis'];

    if($crud->create($number,$date,$img,$region, $synopsis))
    {
       header("Location: ../backoffice.php?inserted");
    }
    else
    {
     header("Location: ../backoffice.php?failure");

    }
?>

