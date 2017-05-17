<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 16/05/2017
 * Time: 14:02
 */

include_once('connect.php');

//
//$query = "SELECT * FROM orders";
//$data = $myOrder->dataview($query);
//
//while($row = $data->fetch(PDO::FETCH_ASSOC)) {
//    echo $row['mail'];
//    echo $row['lastname'];
//
//}
//
//if(isset($_POST['btn-save']))
//{
//    $number = $_POST['number'];
//    $date = $_POST['date'];
//    $img = $_POST['img'];
//    $region = $_POST['region'];
//
//    if($crud->create($number,$date,$img,$region))
//    {
//        header("Location: add-data.php?inserted");
//    }
//    else
//    {
//        header("Location: add-data.php?failure");
//    }
//}
//


$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$mail = $_POST['mail'];

if($myOrder->create($lastname,$firstname,$address,$city,$country,$mail))
{
}
else
{
}

?>



