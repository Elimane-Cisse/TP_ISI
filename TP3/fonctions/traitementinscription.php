<?php
$bdd = new PDO('mysql:host=localhost;dbname=tp_php', 'root', '');

if(isset($_POST['forminscription'])) {
   $Nom = htmlspecialchars($_POST['nom']);
   $Prenom = htmlspecialchars($_POST['prenom']);
   $Prenom2 = htmlspecialchars($_POST['login']);
   $Email = htmlspecialchars($_POST['email']);
   $mdp = sha1($_POST['password']);

   if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['login']) AND !empty($_POST['email']) AND !empty($_POST['password'])) {
      $nomlength = strlen($Nom);
      if($nomlength <= 255) {
         if(!($Prenom == $Prenom2)) {
            if(filter_var($Prenom, FILTER_VALIDATE_Eprenom)) {
               $reqprenom = $bdd->prepare("SELECT * FROM user WHERE prenom = ?");
               $reqprenom->execute(array($Prenom));
               $prenomexist = $reqprenom->rowCount();
               if($prenomexist == 0) {
                  if($mdp == $Prenom2) {
                     $insertmbr = $bdd->prepare("INSERT INTO user (nom, prenom, login, email, password) VALUES(?, ?, ?,?,?)");
                     $insertmbr->execute(array($Nom, $Prenom, $Prenom2, $Email, $mdp));
                     $erreur = 'Votre compte a bien été créé ! <a href="../Views/connexion.php">Me connecter</a>';
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse prenom déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse prenom n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses prenom ne correspondent pas !";
         }
      } else {
         $erreur = "Votre nom ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
