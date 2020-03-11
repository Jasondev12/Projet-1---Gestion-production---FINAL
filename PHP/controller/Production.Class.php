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
private $_idReference;

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

public function getIdReference()
{
 return $this->_idReference;
}
public function setIdReference($_idReference)
{
 return $this->_idReference = $_idReference;
}

/*******************************Construct*******************************/
public function __construct(array $options = [])
    {
        if (!empty($options))
        {
            $this->hydrate($options);
        }
    }
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
/****************************Autres méthodes****************************/
public function toString() 
{ 
 return $this->getIdProduction . $this->getQuantite . $this->getOrdreFabrication . $this->getDateHeureDebutProd . $this->getDateHeureFinProd . $this->getIdUtilisateur ;
}
}