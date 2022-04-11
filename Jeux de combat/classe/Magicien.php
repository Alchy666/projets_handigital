<?php

class Magicien extends Personnage { // Classe fille


    public function __construct(array $donnees)
    {
      parent::__construct($donnees);
      $this->_type = "magicien";
      $this->_vie = 120;
      $this->_puissance = 5;
    }

    public function frapper(Personnage $perso)
    {
      $this->_experience +=5;
      $this->levelup();
  
      if ($perso->id() == $this->_id)
      {
        return self::CEST_MOI;
      }
      return $perso->recevoirDegats($this->_puissance);
    }
    public function setVie($vie)
  {
    $vie = (int) $vie;
    
    if ($vie >= 0 && $vie <= 500)
    {
      $this->_vie = $vie;
    }
  }
}
?>