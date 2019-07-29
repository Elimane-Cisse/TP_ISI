<?php
class bd{
  private $servername;
  private $username;
  private $dbname;
  private $password;


  public function connexion(){
   // $this->servername = 'localhost';
    $this->username = 'root';
    $this->dbname = 'tp_php';
    $this->password = '';
    $dataError = array ( ) ;

  try{
//Création l'instance de PDO ( databasehandeler ) .
$dbh = new PDO( 'mysql:host=localhost;dbname='.$this->dbname,$this->username,$this->password) ;
} catch ( PDOException $e ) {
return $e->getMessage("Erreur de connexion à l a base de données ."."Vous n'avez pas besoin d'en savoir plus . . . ");

die () ;
}

  }



}


 ?>
