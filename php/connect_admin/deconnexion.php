<?php
session_start();
session_unset();
session_destroy();
header("Location: connexion.php");
exit();
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 17/05/2017
 * Time: 12:16
 */