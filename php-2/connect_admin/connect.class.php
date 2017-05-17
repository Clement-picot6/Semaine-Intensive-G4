<?php

/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 17/05/2017
 * Time: 12:08
 */
class connect
{
    private static $pdo = null;

    /**
     * @return \PDO $pdo
     */
    public static function getPdo()
    {
        if(is_null(self::$pdo)){
            try{
                self::$pdo = new \PDO('mysql:host=localhost;dbname=architecte','root', 'root');
                self::$pdo->exec("SET NAMES UTF8;");
            } catch(Exception $exception) {
                die('Oops, I did it again.');
            }
        }
        return self::$pdo;
    }
}