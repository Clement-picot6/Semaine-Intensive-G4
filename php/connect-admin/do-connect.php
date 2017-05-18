<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 17/05/2017
 * Time: 13:25
 */

require_once "../dbconfig.php";

$request = $bdd->prepare("SELECT id, username, password FROM users WHERE username = :username");
$request->execute(array(
    'username'=> $_POST["username"]
));

$request = $request->fetch(PDO::FETCH_ASSOC);

if ($_POST["password"] == $request["password"]) {

    session_start();
    $_SESSION['id'] = $request['id'];
    $_SESSION['username'] = $request["username"];
    $_SESSION['is_connected'] = true; // User is now connected
    header("Location: ../../backoffice.php");
} else {
    header("Location: ../../connect-admin.php?error");
}
