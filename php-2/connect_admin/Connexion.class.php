<?php

/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 17/05/2017
 * Time: 12:06
 */

require_once "connect.class.php";

class Connexion
{
    private $username;
    private $password;
    private $bdd;




    public function __construct($username, $password)
    {

        $this->username = $username;
        $this->password = $password;
        $this->bdd = Connect::getPdo();
    }

    public function session()
    {
        $request = $this->bdd->prepare("SELECT id FROM users WHERE username = :username");
        $request->execute(array(
            'username'=>$this->username
        ));
        $request = $request->fetch();
        $_SESSION['id'] = $request['id'];
        $_SESSION['username'] = $this->username;

        return 1;

    }


//=====================getter et setter===================
    public function getUsername()
    {
        return $this->username;
    }


    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }

}