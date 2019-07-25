<?php
class formulaire{

  private $nom;
  private $prenom;
  private $password;
  private $email;
  const TYPE = "text";
  const TYPESUB = "submit";
  const TYPERES = "reset";
  const LAB = "label";

public function getnom($nom){
  return " <".self::LAB.">Nom :
 <input type=".self::TYPE." name=".$this->nom.">
    </".self::LAB."><br><br>
    ";
}
public function getprenom($prenom){
  return " <".self::LAB.">Prenom :
    <input type=".self::TYPE." name=".$this->prenom.">
    </".self::LAB."><br><br>
    ";
}
public function getpassword($password){
  return "<".self::LAB.">Password :
    <input type=".self::TYPE." name=".$this->password.">
    </".self::LAB."><br><br>";
    }
    public function getemail($email){
  return " <".self::LAB.">Email :
    <input type=".self::TYPE." name=".$this->email.">
    </".self::LAB."><br><br>
    ";}
    public function getsubmit($val,$val1){

      if ($val == "Valider" && $val1 == "Annuler") {
         return " <p>
      <input type=".self::TYPESUB." name=".self::TYPESUB." value=".$val.">

      <input type=".self::TYPERES." name=".self::TYPERES." value=".$val1.">
          </p>
    ";

      }

 }


}





 ?>
