<?php
require("header.php");
?>
<?php
require("footer.php");
?>

<?php

class Refuge
{
    private $id_ref;
    private $nom_ref;
    private $adresse_ref;
    private $ville_ref;
    private $cp_ref;
    private $place_ref;

    
    public function getId()
    {
        return $this->id_ref;
    }

    public function setId($valeur) // On ecrit valeur pour faire plus claire. La valeur est prise en compte uniquement dans la function dans c'est parfait
    {
        $this->id_ref = $valeur;
    }
    
    public function getNom()
    {
        return $this->nom_ref;
    }

    public function setNom($valeur)
    {
        $this->nom_ref = $valeur;
    }

    public function getAdresse()
    {
        return $this->adresse_ref;
    }

    public function setAdresse($valeur)
    {
        $this->adresse_ref = $valeur;
    }

    public function getVille()
    {
        return $this->ville_ref;
    }

    public function setVille($valeur)
    {
        $this->ville_ref = $valeur;
        
    }

    public function getCp()
    {
        return $this->cp_ref;
    }

    public function setCp($valeur)
    {
        $this->cp_ref = $valeur;
    }

    public function getPlace()
    {
        return $this->place_ref;
    }

    public function setPlace($valeur)
    {
        $this->place_ref = $valeur;
    }

}




?>