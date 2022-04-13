<?php
require("header.php");
?>
<?php
require("footer.php");
?>

<?php

class Client
{

    private $id_cli;
    private $nom_cli;
    private $prenom_cli;
    private $adresse_cli;
    private $ville_cli;
    private $mail_cli;
    private $enfant_cli;
    private $login_cli;
    private $mdp_cli;

    public function getId()
    {
        return $this->id_cli;
    }

    public function setId($valeur)
    {
        $this->id_cli = $valeur;
    }

    public function getNom()
    {
        return $this->nom_cli;
    }

    public function setNom($valeur)
    {
        $this->nom_cli = $valeur;
    }

    public function getPrenom()
    {
        return $this->prenom_cli;
    }

    public function setPrenom($valeur)
    {
        $this->prenom_cli = $valeur;
    }

    public function getAdresse()
    {
        return $this->adresse_cli;
    }

    public function setAdresse($valeur)
    {
        $this->adresse_cli = $valeur;
    }

    public function getVille()
    {
        return $this->ville_cli;
    }

    public function setVille($valeur)
    {
        $this->ville_cli = $valeur;
    }

    public function getMail()
    {
        return $this->mail_cli;
    }

    public function setMail($valeur)
    {
        $this->mail_cli = $valeur;
    }

    public function getEnfant()
    {
        return $this->enfant_cli;
    }

    public function setEnfant($valeur)
    {
        $this->enfant_cli = $valeur;
    }

    public function getLogin()
    {
        return $this->login_cli;
    }

    public function setLogin($valeur)
    {
        $this->login_cli = $valeur;
    }

    public function getMdp()
    {
        return $this->mdp_cli;
    }

    public function setMdp($valeur)
    {
        $this->mdp_cli = $valeur;
    }

}

?>