<?php

/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 16/05/2017
 * Time: 13:34
 */
class crud
{
    private $db;

    public function __construct(\PDO $db_con)
    {
        $this->db = $db_con;
    }

    public function create($number, $date, $img, $region)
    {
        try {
            $stmt = $this->db->prepare("INSERT INTO journals(`number`, `date`, `img`, `region`) VALUES (:number, :date, :img, :region)");
            $stmt->bindparam(":number", $number);
            $stmt->bindparam(":date", $date);
            $stmt->bindparam(":img", $img);
            $stmt->bindparam(":region", $region);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function getID($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM journals WHERE id=:id");
        $stmt->execute(array(":id" => $id));
        $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
    }

    public function update($id, $number, $date, $img, $region)
    {
        try {
            $query = "UPDATE journals SET `number`=:number, `date`=:date, img=:img, region=:region WHERE id=:id";

            $data = ['id' => $id,
                'number' => $number,
                'date' => $date,
                'img' => $img,
                'region' => $region];

            if ($this->bind($query, $data)->rowCount()) {
                var_dump('youhoooouuu');

                return true;
            }

            die('GROS BATAAAARD');

//            $stmt->bindvalue(":number",$number);
//            $stmt->bindvalue(":date",$date);
//            $stmt->bindvalue(":img",$img);
//            $stmt->bindvalue(":region",$region);
//            $stmt->bindvalue(":id",$id);
//            $stmt->execute();


        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM journals WHERE id=:id");
        $stmt->bindvalue(":id", $id);
        $stmt->execute();
//        return true;
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
            $stmt->bindValue(':' . $key, $value);
        }
        $stmt->execute();

        return $stmt;
    }

}