<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 16/05/2017
 * Time: 13:27
 */

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'si6';


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=si6', 'root', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

include_once 'test.php';

$myOrder = new Order($bdd);
