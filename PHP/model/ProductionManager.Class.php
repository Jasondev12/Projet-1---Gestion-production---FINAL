<?php
class ProductionManager
{
<<<<<<< HEAD
  public static function add(Production $obj)
  {
    $db = DbConnect::getDb();
    $q = $db->prepare("INSERT INTO productions (quantite,ordreFabrication,dateHeureDebutProd,dateHeureFinProd,idUtilisateur,idReference) VALUES (:quantite,:ordreFabrication,:dateHeureDebutProd,:dateHeureFinProd,:idUtilisateur,:idReference)");
    $q->bindValue(":quantite", $obj->getQuantite());
    $q->bindValue(":ordreFabrication", $obj->getOrdreFabrication());
    $q->bindValue(":dateHeureDebutProd", $obj->getDateHeureDebutProd());
    $q->bindValue(":dateHeureFinProd", $obj->getDateHeureFinProd());
    $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
    $q->bindValue(":idReference", $obj->getIdReference());
    $q->execute();
  }

  public static function update(Production $obj)
  {
    $db = DbConnect::getDb();
    $q = $db->prepare("UPDATE productions SET quantite=:quantite, ordreFabrication=:ordreFabrication, dateHeureDebutProd=:dateHeureDebutProd, dateHeureFinProd=:dateHeureFinProd, idUtilisateur=:idUtilisateur, idReference=:idReference WHERE idProduction=:idProduction");
    $q->bindValue(":quantite", $obj->getQuantite());
    $q->bindValue(":ordreFabrication", $obj->getOrdreFabrication());
    $q->bindValue(":dateHeureDebutProd", $obj->getDateHeureDebutProd());
    $q->bindValue(":dateHeureFinProd", $obj->getDateHeureFinProd());
    $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
    $q->bindValue(":idReference", $obj->getIdReference());
    $q->bindValue(":idProduction", $obj->getIdProduction());
    $q->execute();
  }

  public static function delete(Production $obj)
  {
    $db = DbConnect::getDb();
    $db->exec("DELETE FROM productions WHERE idProduction=" . $obj->getIdProduction());
  }

  public static function findById($id)
  {
    $db = DbConnect::getDb();
    $id = (int) $id;
    $q = $db->query("SELECT * FROM productions WHERE idProduction=".$id);
    $results = $q->fetch(PDO::FETCH_ASSOC);
    if ($results != false) {
      return new Production($results);
    } else {
      return false;
    }
  }

  public static function getList()
  {
    $db = DbConnect::getDb();
    $productions = [];
    $q = $db->query("SELECT * FROM productions");
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
      if ($donnees != false) {
        $productions[] = new Production($donnees);
      }
    }
    return $productions;
  }

  public static function getShortList()
  {
    $db = DbConnect::getDb();
    $productions = [];
    $q = $db->query("SELECT * FROM productions LIMIT 5");
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
      if ($donnees != false) {
        $productions[] = new Production($donnees);
      }
    }
    return $productions;
  }

  public static function getLastId()
  {
    $db = DbConnect::getDb();
    $q = $db->query("SELECT idProduction FROM productions ORDER BY idProduction DESC LIMIT 1");
    $donnees = $q->fetch(PDO::FETCH_ASSOC);
    if ($donnees != false) {
      return $donnees["idProduction"];
    }
  }
  
}
=======
public static function add(Production $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO productions (quantite,ordreFabrication,dateHeureDebutProd,dateHeureFinProd,idUtilisateur) VALUES (:quantite,:ordreFabrication,:dateHeureDebutProd,:dateHeureFinProd,:idUtilisateur)");
$q->bindValue(":quantite", $obj->getQuantite());
$q->bindValue(":ordreFabrication", $obj->getOrdreFabrication());
$q->bindValue(":dateHeureDebutProd", $obj->getDateHeureDebutProd());
$q->bindValue(":dateHeureFinProd", $obj->getDateHeureFinProd());
$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
 $q->execute();
}

public static function update(Production $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE productions SET quantite=:quantite, ordreFabrication=:ordreFabrication, dateHeureDebutProd=:dateHeureDebutProd, dateHeureFinProd=:dateHeureFinProd, idUtilisateur=:idUtilisateur WHERE idProduction=:idProduction");
$q->bindValue(":quantite", $obj->getQuantite());
$q->bindValue(":ordreFabrication", $obj->getOrdreFabrication());
$q->bindValue(":dateHeureDebutProd", $obj->getDateHeureDebutProd());
$q->bindValue(":dateHeureFinProd", $obj->getDateHeureFinProd());
$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
$q->bindValue(":id", $obj->getIdProduction());
 $q->execute();
}

public static function delete(Production $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM productions WHERE idProduction=" . $obj->getIdProduction());
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM productions WHERE idProduction=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Production ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$productions = [];
$q = $db->query("SELECT * FROM productions");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$productions[] = new Production($donnees);
}
}
return $productions;
 }

}
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
