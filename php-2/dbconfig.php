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
$db_name = 'architecte';


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=architecte;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


    include_once 'CRUD/class.crud.php';


    $crud = new crud($bdd);

?>