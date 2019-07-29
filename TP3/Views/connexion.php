<?php require_once '../Class/personne.php'; ?>
<?php include_once '../fonctions/traitementconnexion.php'; ?>
<?php include_once '../header.php'; ?>
<header id="hea">
  <p>BIEVENUE CHEZ AmonZ</p>
</header>
<div class="hea1">
  <h2 align="center">Connexion</h2>
  <ul>
    <li>
     <a href="#" id="acc">Accueil</a>
     <a href="inscription.php" id="ins">Inscription</a>
  </li>
  </ul>
</div>
<div id="forms" align="center">
 <form method="POST" action="">
  <label>Email:
    <input type="text" name="email"><br><br>
  </label>
   <label>Password:
    <input type="password" name="password"><br><br>
  </label>
  <p>
    <input type="submit" name="formconnexion" value="Inscrire">
    <input type="reset" name="reset" value="Annuler">
  </p>
 </form>
 <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>

<?php include_once '../footer.php'; ?>

