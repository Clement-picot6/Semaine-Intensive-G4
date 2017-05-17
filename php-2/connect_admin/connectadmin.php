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
    $_SESSION['id'] = $request['id'];
    $_SESSION['username'] = $request["username"];
    header("Location: ../index.php");
    // Start session
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['is_connected'] = true; // User is now connected
} else {

    die("Mauvais mot de passe");
}
