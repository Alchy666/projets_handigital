<?php

class Animal
{

    private $id_ani;
    private $nom_ani;
    private $espece_ani;
    private $race_ani;
    private $age_ani;
    private $sexe_ani;
    private $img_ani;
    private $desc_ani;
    private $enfant_ani;
    private $dateaccueil_ani;
    private $dateado_ani;
    private $fk_ref;
    private $fk_cli;

    public function getId()
    {
        return $this->id_ani;
    }

    public function setId($valeur)
    {
        $this->id_ani = $valeur;
    }

    public function getNom()
    {
        return $this->nom_ani;
    }

    public function setNom($valeur)
    {
        $this->nom_ani = $valeur;
    }

    public function getEspece()
    {
        return $this->espece_ani;
    }

    public function setEspece($valeur)
    {
        $this->espece_ani = $valeur;
    }

    public function getRace()
    {
        return $this->race_ani;
    }

    public function setRace($valeur)
    {
        $this->race_ani = $valeur;
    }

    public function getAge()
    {
        return $this->age_ani;
    }

    public function setAge($valeur)
    {
        $this->age_ani = $valeur;
    }

    public function getSexe()
    {
        return $this->sexe_ani;
    }

    public function setSexe($valeur)
    {
        $this->sexe_ani = $valeur;
    }

    public function getImg()
    {
        return $this->img_ani;
    }

    public function setImg($valeur)
    {
        $this->img_ani = $valeur;
    }

    public function getDesc()
    {
        return $this->desc_ani;
    }

    public function setDesc($valeur)
    {
        $this->desc_ani = $valeur;
    }

    public function getEnfant()
    {
        return $this->enfant_ani;
    }

    public function setEnfant($valeur)
    {
        $this->enfant_ani = $valeur;
    }

    public function getDateaccueil()
    {
        return $this->dateaccueil_ani;
    }

    public function setDateaccueil($valeur)
    {
        $this->dateaccueil_ani = $valeur;
    }

    public function getDateado()
    {
        return $this->dateado_ani;
    }

    public function setDateado($valeur)
    {
        $this->dateado_ani = $valeur;
    }

    public function getFkref()
    {
        return $this->fk_ref;
    }

    public function setFkref($valeur)
    {
        $this->fk_ref = $valeur;
    }

    public function getFkcli()
    {
        return $this->fk_cli;
    }

    public function setFkcli($valeur)
    {
        $this->fk_cli = $valeur;
    }
    

}

?>