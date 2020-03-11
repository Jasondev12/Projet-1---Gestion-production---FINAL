<?php
class Reference
{
/*******************************Attributs*******************************/
private $_idReference;
private $_nomReference;

/******************************Accesseurs*******************************/
public function getIdReference()
{
 return $this->_idReference;
}
public function setIdReference($_idReference)
{
 return $this->_idReference = $_idReference;
}
public function getNomReference()
{
 return $this->_nomReference;
}
public function setNomReference($_nomReference)
{
 return $this->_nomReference = $_nomReference;
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
 return $this->getIdReference . $this->getNomReference ;
}

}