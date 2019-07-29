<?php require_once '../Class/personne.php'; ?>
<?php include_once '../fonctions/traitementinscription.php'; ?>
<?php include_once '../header.php'; ?>

<header id="hea">
  <p>BIEVENUE CHEZ AmonZ</p>
</header>
<div class="hea1">
  <ul>
    <li>
     <a href="#" id="acc">Accueil</a>
     <a href="connexion.php" id="con">Connexion</a>
  </li>
  </ul>
</div>
<div id="forms" align="center">
 <form method="POST" action="../fonctions/traitementinscription.php">
  <label>Nom:
    <input type="text" name="nom"><br><br>
  </label>
   <label>Prenom:
    <input type="text" name="prenom"><br><br>
  </label>
   <label>Email:
    <input type="text" name="email"><br><br>
  </label>
   <label>Login:
    <input type="text" name="login"><br><br>
  </label>
   <label>Password:
    <input type="password" name="password"><br><br>
  </label>
  <p>
    <input type="submit" name="forminscription" value="Inscrire">
    <input type="reset" name="reset" value="Annuler">
  </p>
 </form>
</div>
<?php include_once '../footer.php'; ?>
