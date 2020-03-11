<?php
class Production
{
/*******************************Attributs*******************************/
private $_idProduction;
private $_quantite;
private $_ordreFabrication;
private $_dateHeureDebutProd;
private $_dateHeureFinProd;
private $_idUtilisateur;
<<<<<<< HEAD
private $_idReference;
=======

>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
/******************************Accesseurs*******************************/
public function getIdProduction()
{
 return $this->_idProduction;
}
public function setIdProduction($_idProduction)
{
 return $this->_idProduction = $_idProduction;
}
public function getQuantite()
{
 return $this->_quantite;
}
public function setQuantite($_quantite)
{
 return $this->_quantite = $_quantite;
}
public function getOrdreFabrication()
{
 return $this->_ordreFabrication;
}
public function setOrdreFabrication($_ordreFabrication)
{
 return $this->_ordreFabrication = $_ordreFabrication;
}
public function getDateHeureDebutProd()
{
 return $this->_dateHeureDebutProd;
}
public function setDateHeureDebutProd($_dateHeureDebutProd)
{
 return $this->_dateHeureDebutProd = $_dateHeureDebutProd;
}
public function getDateHeureFinProd()
{
 return $this->_dateHeureFinProd;
}
public function setDateHeureFinProd($_dateHeureFinProd)
{
 return $this->_dateHeureFinProd = $_dateHeureFinProd;
}
public function getIdUtilisateur()
{
 return $this->_idUtilisateur;
}
public function setIdUtilisateur($_idUtilisateur)
{
 return $this->_idUtilisateur = $_idUtilisateur;
}
<<<<<<< HEAD
public function getIdReference()
{
 return $this->_idReference;
}
public function setIdReference($_idReference)
{
 return $this->_idReference = $_idReference;
}
=======

>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
/*******************************Construct*******************************/
public function __construct(array $options = [])
    {
        if (!empty($options))
        {
            $this->hydrate($options);
        }
    }
<<<<<<< HEAD
=======

>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode])))
            {
                $this->$methode($value);
            }
        }
    }
<<<<<<< HEAD
=======

>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
/****************************Autres méthodes****************************/
public function toString() 
{ 
 return $this->getIdProduction . $this->getQuantite . $this->getOrdreFabrication . $this->getDateHeureDebutProd . $this->getDateHeureFinProd . $this->getIdUtilisateur ;
}
<<<<<<< HEAD
=======

>>>>>>> 86f7ef324470baa8a9cfb2f459cec641e18d2d39
}