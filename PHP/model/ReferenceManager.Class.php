<?php
class ReferenceManager
{
public static function add(Reference $obj)
{
$db = DbConnect::getDb();
<<<<<<< HEAD
$q = $db->prepare("INSERT INTO reference (idReference, nomReference) VALUES (:idReference,:nomReference)");
$q->bindValue(":idReference", $obj->getIdReference());
=======
$q = $db->prepare("INSERT INTO reference (nomReference) VALUES (:nomReference)");
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
$q->bindValue(":nomReference", $obj->getNomReference());
 $q->execute();
}

public static function update(Reference $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE reference SET nomReference=:nomReference WHERE idReference=:idReference");
$q->bindValue(":nomReference", $obj->getNomReference());
<<<<<<< HEAD
$q->bindValue(":idReference", $obj->getIdReference());
=======
$q->bindValue(":id", $obj->getIdReference());
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
 $q->execute();
}

public static function delete(Reference $obj)
{
$db = DbConnect::getDb();
<<<<<<< HEAD
$q = $db->prepare("UPDATE reference SET actif=0 WHERE idReference=:idReference");
$q->bindValue(":idReference",$obj->getIdReference());
$q->execute();
=======
$db->exec("DELETE FROM reference WHERE idReference=" . $obj->getIdReference());
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
}

public static function findById($id)
{
$db = DbConnect::getDb();
<<<<<<< HEAD
$q = $db->prepare("SELECT * FROM reference WHERE idReference=:idReference");
$q->bindValue(":idReference",$id);
$q->execute();
=======
$id = (int) $id;
$q = $db->query("SELECT * FROM reference WHERE idReference=$id");
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Reference ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$reference = [];
<<<<<<< HEAD
$q = $db->query("SELECT * FROM reference WHERE actif=1");
=======
$q = $db->query("SELECT * FROM reference");
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$reference[] = new Reference($donnees);
}
}
return $reference;
 }

}