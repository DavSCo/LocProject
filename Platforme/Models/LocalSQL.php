<?php


class LocalSQL
{
    public function addLocal($name, $address, $area, $price, $time, $description,$dossier,$id)
    {
        global $bdd;


        $addLocal = $bdd->prepare("INSERT INTO locaux (name, address, area, price, time, description,photo,vend_id) VALUES (:name,:address,:area,:price,:time,:description,:photo,:vend_id);");


        $addLocal->execute([
            ":name"=>$name,
            ":address"=>$address,
            ":area"=>$area,
            ":price"=>$price,
            "time"=>$time,
            ":description"=>$description,
            ":photo"=>$dossier,
            ":vend_id" => $id
        ]);
    }
    public function addCommande($local_id,$user_id)
    {
        global $bdd;
        $addCommande=$bdd->prepare("INSERT INTO commandeLocal (local_id,user_id) VALUES (:local_id,:user_id)");
        $addCommande->execute([
            ":local_id"=>$local_id,
            ":user_id"=>$user_id
        ]);
    }
    public function updateCommande($name,$address,$area,$price,$time,$description,$id)
    {
        global $bdd;
        $updateCommande=$bdd->prepare("UPDATE locaux SET name =:name , address=:address, area=:area,price=:price,time=:time,description=:description WHERE id=:id");
        $updateCommande->execute([
           ":name"=> $name,
            ":address"=>$address,
            ":area"=>$area,
            ":price"=>$price,
            ":time"=>$time,
            ":description"=>$description,
            ":id"=>$id
        ]);
    }

    public function selectLocal()
    {
        global $bdd;


        $selectLocal = $bdd->prepare("SELECT * FROM locaux  ");
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

    public function selectXLastLocal()
    {
        global $bdd;

        $selectXLastLocal = $bdd->prepare("SELECT * FROM `locaux` t1 WHERE (SELECT COUNT(*) FROM `locaux` t2 WHERE t1.id < t2.id) < 6 ORDER BY id ASC");
        $selectXLastLocal->execute();
        $selectXNumber = $selectXLastLocal->fetchAll();

        return $selectXNumber;
    }

}