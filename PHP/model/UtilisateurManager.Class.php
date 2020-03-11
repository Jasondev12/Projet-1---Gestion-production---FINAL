<?php
class UtilisateurManager
{
<<<<<<< HEAD
    public static function add(Utilisateur $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO utilisateurs (nomUtilisateur,prenomUtilisateur,pseudoUtilisateur,mdp,role) VALUES (:nomUtilisateur,:prenomUtilisateur,:pseudoUtilisateur,:mdp,:role)");
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":pseudoUtilisateur", $obj->getPseudoUtilisateur());
        $q->bindValue(":mdp", $obj->getMdp());
        $q->bindValue(":role", $obj->getRole());
        $q->execute();
    }

    public static function update(Utilisateur $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE utilisateurs SET nomUtilisateur=:nomUtilisateur, prenomUtilisateur=:prenomUtilisateur, pseudoUtilisateur=:pseudoUtilisateur, role=:role WHERE idUtilisateur=:idUtilisateur");
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":pseudoUtilisateur", $obj->getPseudoUtilisateur());
        $q->bindValue(":role", $obj->getRole());
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->execute();
    }

    public static function delete(Utilisateur $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE utilisateurs SET actif=0 WHERE idUtilisateur=" . $obj->getIdUtilisateur());
        $q->execute();
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM utilisateurs WHERE idUtilisateur=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Utilisateur($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $utilisateurs = [];
        $q = $db->prepare("SELECT * FROM utilisateurs WHERE actif=1");
        $q->execute();
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $utilisateurs[] = new Utilisateur($donnees);
            }
        }
        return $utilisateurs;
    }

    public static function get($pseudo)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("SELECT * FROM utilisateurs WHERE pseudoUtilisateur = :pseudoUtilisateur AND actif=1");
        $q->bindValue(":pseudoUtilisateur", $pseudo);
        $q->execute();

        if ($q != false) {
            $results = $q->fetch(PDO::FETCH_ASSOC);
        } else {
            return false;
        }

        if ($results != false) {
            return new Utilisateur($results);
        } else {
            return false;
        }
    }

}
=======
public static function add(Utilisateur $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO utilisateurs (nomUtilisateur,prenomUtilisateur,pseudoUtilisateur,mdp,role) VALUES (:nomUtilisateur,:prenomUtilisateur,:pseudoUtilisateur,:mdp,:role)");
$q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
$q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
$q->bindValue(":pseudoUtilisateur", $obj->getPseudoUtilisateur());
$q->bindValue(":mdp", $obj->getMdp());
$q->bindValue(":role", $obj->getRole());
 $q->execute();
}

public static function update(Utilisateur $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE utilisateurs SET nomUtilisateur=:nomUtilisateur, prenomUtilisateur=:prenomUtilisateur, pseudoUtilisateur=:pseudoUtilisateur, mdp=:mdp, role=:role WHERE idUtilisateur=:idUtilisateur");
$q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
$q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
$q->bindValue(":pseudoUtilisateur", $obj->getPseudoUtilisateur());
$q->bindValue(":mdp", $obj->getMdp());
$q->bindValue(":role", $obj->getRole());
$q->bindValue(":id", $obj->getIdUtilisateur());
 $q->execute();
}

public static function delete(Utilisateur $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM utilisateurs WHERE idUtilisateur=" . $obj->getIdUtilisateur());
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM utilisateurs WHERE idUtilisateur=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Utilisateur ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$utilisateurs = [];
$q = $db->query("SELECT * FROM utilisateurs");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$utilisateurs[] = new Utilisateur($donnees);
}
}
return $utilisateurs;
 }

}
>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
