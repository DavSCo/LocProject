<?php



class LocalSQL
{
    public function addLocal( $name , $address , $area, $price, $time,$description ,$id)
    {
        global $bdd;





        $addLocal = $bdd->prepare("INSERT INTO locaux (name, address, area, price, time, description,vend_id,user_id) VALUES (:name,:address,:area,:price,:time,:description,null,:user_id)");


        $addLocal->bindParam(":name", $name, PDO::PARAM_STR);
        $addLocal->bindParam(":address", $address, PDO::PARAM_STR);
        $addLocal->bindParam(":area", $area, PDO::PARAM_STR);
        $addLocal->bindParam(":price", $price, PDO::PARAM_STR);
        $addLocal->bindParam(":time", $time, PDO::PARAM_STR);
        $addLocal->bindParam(":description", $description, PDO::PARAM_STR);
        $addLocal->bindParam(":user_id",$id,PDO::PARAM_STR);
        $addLocal->execute();
    }

    public function selectLocal()
    {
        global $bdd;
<<<<<<< HEAD


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
=======
>>>>>>> 1f671497a2819d593653d6c897cc858ff98d5f02

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

