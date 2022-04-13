<?php
require("header.php");
?>
<?php
require("footer.php");
?>

<?php

class Admin
{

    private $id_adm;
    private $login_adm;
    private $mdp_adm;

    public function getId()
    {
        return $this->id_adm;
    }

    public function setId($valeur)
    {
        $this->id_adm = $valeur;
    }

    public function getLogin()
    {
        return $this->login_adm;
    }

    public function setLogin($valeur)
    {
        $this->login_adm = $valeur;
    }

    public function getMdp()
    {
        return $this->mdp_adm;
    }

    public function setMdp($valeur)
    {
        $this->mdp_adm = $valeur;
    }

}

?>