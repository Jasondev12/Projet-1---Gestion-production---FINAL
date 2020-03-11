<?php
class Utilisateur
{
/*******************************Attributs*******************************/
private $_idUtilisateur;
private $_nomUtilisateur;
private $_prenomUtilisateur;
private $_pseudoUtilisateur;
private $_mdp;
private $_role;

/******************************Accesseurs*******************************/
public function getIdUtilisateur()
{
 return $this->_idUtilisateur;
}
public function setIdUtilisateur($_idUtilisateur)
{
 return $this->_idUtilisateur = $_idUtilisateur;
}
public function getNomUtilisateur()
{
 return $this->_nomUtilisateur;
}
public function setNomUtilisateur($_nomUtilisateur)
{
 return $this->_nomUtilisateur = $_nomUtilisateur;
}
public function getPrenomUtilisateur()
{
 return $this->_prenomUtilisateur;
}
public function setPrenomUtilisateur($_prenomUtilisateur)
{
 return $this->_prenomUtilisateur = $_prenomUtilisateur;
}
public function getPseudoUtilisateur()
{
 return $this->_pseudoUtilisateur;
}
public function setPseudoUtilisateur($_pseudoUtilisateur)
{
 return $this->_pseudoUtilisateur = $_pseudoUtilisateur;
}
public function getMdp()
{
 return $this->_mdp;
}
public function setMdp($_mdp)
{
 return $this->_mdp = $_mdp;
}
public function getRole()
{
 return $this->_role;
}
public function setRole($_role)
{
 return $this->_role = $_role;
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
 return $this->getIdUtilisateur . $this->getNomUtilisateur . $this->getPrenomUtilisateur . $this->getPseudoUtilisateur . $this->getMdp . $this->getRole ;
}

}