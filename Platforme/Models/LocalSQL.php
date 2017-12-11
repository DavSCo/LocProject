<?php


class LocalSQL
{
    public function addLocal()
    {
        global $bdd;
        $name = $_POST['name'];
        $address = $_POST['address'];
        $area = $_POST['area'];
        $price = $_POST['price'];
        $time = $_POST['time'];
        $description = $_POST['description'];
        $addLocal = $bdd->prepare("INSERT INTO locaux (name, address, area, price, time, description) VALUES (:name,:address,:area,:price,:time,:description)");
        $addLocal->bindParam(":name", $name, PDO::PARAM_STR);
        $addLocal->bindParam(":address", $address, PDO::PARAM_STR);
        $addLocal->bindParam(":area", $area, PDO::PARAM_STR);
        $addLocal->bindParam(":price", $price, PDO::PARAM_STR);
        $addLocal->bindParam(":time", $time, PDO::PARAM_STR);
        $addLocal->bindParam(":description", $description, PDO::PARAM_STR);
        $addLocal->execute();
    }

    public function selectLocal()
    {
        global $bdd;

        $selectLocal = $bdd->prepare("SELECT * FROM locaux");
        $selectLocal->execute();
        $selectAllLocal = $selectLocal->fetchAll();

        return $selectAllLocal;
    }

    public function selectLocalWithId($id)
    {
        global $bdd;

        $selectLocalWithId = $bdd->prepare("SELECT * FROM locaux WHERE id=:id");
        $selectLocalWithId->bindParam(":id", $id, PDO::PARAM_STR);
        $selectLocalWithId->execute();
        $selectLocalId = $selectLocalWithId->fetch();

        return $selectLocalId;



    }

}