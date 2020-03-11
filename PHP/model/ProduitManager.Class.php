<?php
class ProduitManager
{
<<<<<<< HEAD
    public static function add(Produit $obj)
    {

        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO produits (idLot,dateHeure,millisecondes,idProduction,idReference) VALUES (:idLot,:dateHeure,:millisecondes,:idProduction,:idReference);");

        $q->bindValue(":idLot", $obj->getIdLot());
        $q->bindValue(":dateHeure", $obj->getDateHeure());
        $q->bindValue(":millisecondes", $obj->getMillisecondes());
        $q->bindValue(":idProduction", $obj->getIdProduction());
        $q->bindValue(":idReference", $obj->getIdReference());
        $q->execute();
    }

    public static function update(Produit $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE produits SET idLot=:idLot, dateHeure=:dateHeure,millisecondes=:millisecondes idProduction=:idProduction, idReference=:idReference WHERE idProduit=:idProduit");
        $q->bindValue(":idLot", $obj->getIdLot());
        $q->bindValue(":dateHeure", $obj->getDateHeure());
        $q->bindValue(":millisecondes", $obj->getMillisecondes());
        $q->bindValue(":idProduction", $obj->getIdProduction());
        $q->bindValue(":idReference", $obj->getIdReference());
        $q->bindValue(":idProduit", $obj->getIdProduit());
        $q->execute();
    }

    public static function delete(Produit $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM produits WHERE idProduit=" . $obj->getIdProduit());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM produits WHERE idProduit=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Produit($results);
        } else {
            return false;
        }
    }

    public static function findByDateTime($dt)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("SELECT * FROM produits WHERE CONCAT(CONCAT(dateHeure,'.'),millisecondes)=:dt");
        $q->bindValue(":dt", $dt);
        $q->execute();
        if ($q != false) {
            $results = $q->fetch(PDO::FETCH_ASSOC);
        } else {
            $results = false;
        }

        if ($results != false) {
            return new Produit($results);
        } else {
            return false;
        }
    }

    public static function countByIdProd($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT COUNT(*) as prodCount FROM produits WHERE idProduction=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return $results["prodCount"];
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $produits = [];
        $q = $db->query("SELECT * FROM produits");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $produits[] = new Produit($donnees);
            }
        }
        return $produits;
    }

    public static function getListByIdProd($id)
    {
        $db = DbConnect::getDb();
        $produits = [];
        $q = $db->query("SELECT * FROM produits WHERE idProduction=" . $id);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $produits[] = new Produit($donnees);
            }
        }
        return $produits;
    }
}
=======
public static function add(Produit $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO produits (nomProduit,type,idLot,dateHeure,reference,idProduction,idReference) VALUES (:nomProduit,:type,:idLot,:dateHeure,:reference,:idProduction,:idReference)");
$q->bindValue(":nomProduit", $obj->getNomProduit());
$q->bindValue(":type", $obj->getType());
$q->bindValue(":idLot", $obj->getIdLot());
$q->bindValue(":dateHeure", $obj->getDateHeure());
$q->bindValue(":reference", $obj->getReference());
$q->bindValue(":idProduction", $obj->getIdProduction());
$q->bindValue(":idReference", $obj->getIdReference());
 $q->execute();
}

public static function update(Produit $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE produits SET nomProduit=:nomProduit, type=:type, idLot=:idLot, dateHeure=:dateHeure, reference=:reference, idProduction=:idProduction, idReference=:idReference WHERE idProduit=:idProduit");
$q->bindValue(":nomProduit", $obj->getNomProduit());
$q->bindValue(":type", $obj->getType());
$q->bindValue(":idLot", $obj->getIdLot());
$q->bindValue(":dateHeure", $obj->getDateHeure());
$q->bindValue(":reference", $obj->getReference());
$q->bindValue(":idProduction", $obj->getIdProduction());
$q->bindValue(":idReference", $obj->getIdReference());
$q->bindValue(":id", $obj->getIdProduit());
 $q->execute();
}

public static function delete(Produit $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM produits WHERE idProduit=" . $obj->getIdProduit());
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM produits WHERE idProduit=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Produit ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$produits = [];
$q = $db->query("SELECT * FROM produits");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$produits[] = new Produit($donnees);
}
}
return $produits;
 }

}
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
