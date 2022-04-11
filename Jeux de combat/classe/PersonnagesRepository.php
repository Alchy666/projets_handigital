<?php
class PersonnagesRepository
{
  private $_db; // Instance de PDO
  
  public function __construct($db)
  {
    $this->setDb($db);
  }
  
  public function add(Personnage $perso)
  {
    // $q = $this->_db->prepare('INSERT INTO personnages(nom) VALUES(:nom)');
    $q = $this->_db->prepare('INSERT INTO personnages SET nom = :nom, type = :type, vie = :vie, puissance = :puissance ');
    $q->bindValue(':nom', $perso->nom());
    $q->bindValue(':vie', $perso->vie());
    $q->bindValue(':type', $perso->type());
    $q->bindValue(':puissance', $perso->puissance());
    $q->execute();
    
    $perso->hydrate([
      'id' => $this->_db->lastInsertId(),
      // 'vie' => 100
    ]);
    $q->closeCursor();
  }
  
  public function count()
  {
    return $this->_db->query('SELECT COUNT(*) FROM personnages')->fetchColumn();
  }
  
  public function delete(Personnage $perso)
  {
    $this->_db->exec('DELETE FROM personnages WHERE id = '.$perso->id());
  }
  
  public function exists($info)
  {
    if (is_int($info)) // On veut voir si tel personnage ayant pour id $info existe.
    {
      return (bool) $this->_db->query('SELECT COUNT(*) FROM personnages WHERE id = '.$info)->fetchColumn();
    }
    
    // Sinon, c'est qu'on veut vérifier que le nom existe ou pas.
    
    $q = $this->_db->prepare('SELECT COUNT(*) FROM personnages WHERE nom = :nom');
    $q->execute([':nom' => $info]);
    
    return (bool) $q->fetchColumn();
  }
  
  public function get($info)
  {
    if (is_int($info))
    {
      $q = $this->_db->query('SELECT id, nom, vie, experience, puissance, niveau, `type` FROM personnages WHERE id = '.$info);
      $donnees = $q->fetch(PDO::FETCH_ASSOC);
      
      return new Personnage($donnees);
    }
    else
    {
      $q = $this->_db->prepare('SELECT id, nom, vie, experience, puissance, niveau, `type` FROM personnages WHERE nom = :nom');
      $q->execute([':nom' => $info]);
    
      return new Personnage($q->fetch(PDO::FETCH_ASSOC));
    }
  }
  
  public function getList($nom)// relatif a la session pour afficher TOI pas les autres personnages
  {
    $persos = [];
    
    $q = $this->_db->prepare('SELECT id, nom, vie, experience, puissance, niveau, `type` FROM personnages WHERE nom <> :nom ORDER BY nom');
    $q->execute([':nom' => $nom]);
    
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $persos[] = new Personnage($donnees);
    }
    
    return $persos;
  }
  
  public function listePersonnages()
  {
    $persos = [];
    
    $q = $this->_db->prepare('SELECT id, nom, vie, experience, puissance, niveau, `type` FROM personnages ORDER BY nom');
    $q->execute();
    
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
        $persos[] = new Personnage($donnees);
    }
    
    return $persos;
  }


  
  public function update(Personnage $perso)
  {
    $q = $this->_db->prepare('UPDATE personnages SET vie = :vie, puissance = :puissance, experience = :experience, niveau = :niveau, type = :type WHERE id = :id');
    
    $q->bindValue(':id', $perso->id(), PDO::PARAM_INT);
    $q->bindValue(':puissance', $perso->puissance(), PDO::PARAM_INT);
    $q->bindValue(':vie', $perso->vie(), PDO::PARAM_INT);
    $q->bindValue(':experience', $perso->experience(), PDO::PARAM_INT);
    $q->bindValue(':niveau', $perso->niveau(), PDO::PARAM_INT);
    $q->bindValue(':type', $perso->type());
    
    $q->execute();
  }
  
  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}