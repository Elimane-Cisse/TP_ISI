<?php
require_once('../base_donnee/db_connect.php');
$dbh = new bd;
$dbh->connexion();
session_start();
class personne{
   private $nom;
   private $prenom;
   private $login;
   private $email;
   private $password;

  public function __construct($nom,$prenom,$login,$email,$password)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->login = $login;
    $this->email = $email;
    $this->password = $password;
  }
   function get_nom(){
     return ($this->nom);
   }
   function get_prenom(){
     return ($this->prenom);
   }
   function get_login(){
     return ($this->login);
   }
   function get_email(){
     return ($this->email);
   }
   function get_password(){
     return ($this->password);
   }
 public function insertUser(){
    $query= "INSERT INTO user (nom,prenom,login,email,password) VALUES (?, ?, ?, ?)";
    $values = array(
      $this->nom['nom'],
      $this->prenom['prenom'],
      $this->login['login'],
      $this->password['password']);

    $stmt = $dbh->prepare( $query );
    $stmt->execute( $values );
    header("Location: ../Views/connexion.php");
    echo "Inserted user: {$this->nom['nom']}";
 }
public function updateUser($id) {
$query = "UPDATE user SET nom = ?, prenom = ?,
login = ? , email = ?, password = ?
WHERE id = ?";
$values = array( $this->nom['nom'], $this->prenom['penom'],
$this->login['login'],$this->password['password'] );
$stmt = $dbh->prepare( $query );
$stmt->execute( $values );
echo "Updated user: {$this->nom['nom']}";
}

}

 ?>
