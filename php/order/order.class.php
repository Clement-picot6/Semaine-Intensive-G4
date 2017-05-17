<?php
/**
 * Created by PhpStorm.
 * User: alisonsayarath
 * Date: 17/05/2017
 * Time: 13:50
 */

class Order
{
    private $db;

    function __construct(\PDO $db_con)
    {
        $this->db = $db_con;
    }

    public function create($firstname, $lastname, $address, $city, $country, $mail)
    {

            $stmt = $this->db->prepare("INSERT INTO 
            orders
            (`firstname`, `lastname`, `address`, `city`, `country`, `mail`)
             VALUES 
             (:firstname, :lastname, :address, :city, :country, :mail)");
            $stmt ->bindValue(":firstname", $firstname);
            $stmt ->bindValue(":lastname", $lastname);
            $stmt ->bindValue(":address", $address);
            $stmt ->bindValue(":city", $city);
            $stmt ->bindValue(":country", $country);
            $stmt ->bindValue(":mail", $mail);
            $stmt ->execute();

        if ($stmt->errorCode() !== '00000') {
            die($stmt->errorInfo()[2]);
        }

    }

    public function dataview($query)
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function bind($query, $data)
    {
        $stmt = $this->db->prepare($query);
        foreach ($data as $key => $value) {
            $stmt->bindValue(':'.$key, $value);
        }
        $stmt->execute();

        return $stmt;
    }
}