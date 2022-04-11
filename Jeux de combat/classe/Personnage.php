<?php 
// abstract
class Personnage // CLasse mere
{
  protected $_vie,
          $_id,
          $_nom,
          $_puissance,
          $_experience,
          $_niveau,
          $_type;
  
  const CEST_MOI = 1; // Constante renvoyée par la méthode `frapper` si on se frappe soi-même.
  const PERSONNAGE_MORT = 2; // Constante renvoyée par la méthode `frapper` si on a tué le personnage en le frappant.
  const PERSONNAGE_FRAPPE = 3; // Constante renvoyée par la méthode `frapper` si on a bien frappé le personnage.
  
  public function __construct(array $donnees)
  {
    $this->_niveau = 1;
    $this->_puissance = 3;
    $this->_vie = 100;
    $this->hydrate($donnees);
  }

  protected function levelup()
  {
    if ($this->_experience >= 100){
      $this->_niveau++;
      $this->_puissance+=3;
      $this->_vie += 10;
      $this->_experience -=100;
    }
  }

  
  public function frapper(Personnage $perso)
  {
    $this->_experience +=5;
    $this->levelup();

    if ($perso->id() == $this->_id)
    {
      return self::CEST_MOI;
    }
    
    // On indique au personnage qu'il doit recevoir des dégâts.
    // Puis on retourne la valeur renvoyée par la méthode : self::PERSONNAGE_TUE ou self::PERSONNAGE_FRAPPE
    return $perso->recevoirDegats($this->_puissance);
  }
  
  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method))
      {
        $this->$method($value);
      }
    }
  }
  
  // STATS !! ETC >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



  public function recevoirDegats($puissance)
  {
    $this->_vie -= $puissance;
    
    // Si on a 0 de vie ou moin, on dit que le personnage a été tué.
    if ($this->_vie <= 0)
    {
      return self::PERSONNAGE_MORT;
    }
    
    // Sinon, on se contente de dire que le personnage a bien été frappé.
    return self::PERSONNAGE_FRAPPE;
    
  }


  public function nomValide()
  {
    return !empty($this->_nom); 
  }
  
  
  // GETTERS //
  
  public function vie()
  {
    return $this->_vie;
  }
  
  public function id()
  {
    return $this->_id;
  }
  
  public function nom()
  {
    return $this->_nom;
  }

  public function puissance()
  {
    return $this->_puissance;
  }

  public function experience()
  {
     return $this->_experience;
  }

  public function niveau()
  {
     return $this->_niveau;
  }

  public function type()
  {
     return $this->_type;
  }
  
  public function setVie($vie)
  {
    $vie = (int) $vie;
    
    if ($vie >= 0 && $vie <= 500)
    {
      $this->_vie = $vie;
    }
  }

  public function setExperience($experience)
  {
    $experience = (int) $experience;
    
    if ($experience >= 0 && $experience <= 100)
    {
      $this->_experience = $experience;
    }
  }
  
  public function setId($id)
  {
    $id = (int) $id;
    
    if ($id > 0)
    {
      $this->_id = $id;
    }
  }

  public function setNiveau($niveau)
  {
    $niveau = (int) $niveau;
    
    if ($niveau > 0)
    {
      $this->_niveau = $niveau;
    }
  }
  
  public function setNom($nom)
  {
    if (is_string($nom))
    {
      $this->_nom = $nom;
    }
  }

  public function setType($type)
  {
    if (is_string($type))
    {
      $this->_type = $type;
    }
  }

          // On vérifie que la force passée est comprise entre 0 et 100.
  public function setPuissance($puissance)
    {
        $puissance = (int) $puissance;

        if ($puissance >= 0 && $puissance <= 100) {
            $this->_puissance = $puissance;
        }
    }

    public function tapper(Personnage $persoATapper)
    {
        $persoATapper->_vie -= $this->_puissance;
        if ($persoATapper->vie() <= 0)
        {
          return self::PERSONNAGE_MORT;
        }else{
        
        // Sinon, on se contente de dire que le personnage a bien été frappé.
        return self::PERSONNAGE_FRAPPE;
      }

    }
  }