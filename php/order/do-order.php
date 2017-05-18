<?php
/**
 * Created by PhpStorm.
 * User: alisonsayarath
 * Date: 17/05/2017
 * Time: 15:24
 */

include_once('../dbconfig.php');

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];
$mail = $_POST['mail'];


if($myOrder->create($firstname,$lastname,$address,$city,$country,$mail))
{
    header('Location: ../../order.php?successed=1');
}
else
{
    header('Location: ../../order.php?successed=1');
}
