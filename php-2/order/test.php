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

    function __construct($db_con)
    {
        $this->db = $db_con;
    }

    public function create ($firstname, $lastname, $address, $city, $country, $mail)
    {
        try
        {
            $stmt = $this->db->prepare("INSERT INTO orders(`firstname`, `lastname`, `address`, `city`, `country`, `mail`) VALUES (:firstname, :lastname, :address, :city, :country, :mail)");
            $stmt ->bindparam(":firstname", $firstname);
            $stmt ->bindparam(":lastname", $lastname);
            $stmt ->bindparam(":address", $address);
            $stmt ->bindparam(":city", $city);
            $stmt ->bindparam(":country", $country);
            $stmt ->bindparam(":mail", $mail);
            $stmt ->execute();

            return true;
        }

        catch(PDOException $e)
        {
            echo $e->getMessage();
            return false;
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