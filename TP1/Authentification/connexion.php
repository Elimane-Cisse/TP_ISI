<?php include 'traitementconnexion.php' ?>
<html>
   <head>
      <title>connexion</title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="../style/style.css">
      <link rel="stylesheet" type="text/css" href="stylef.css">
   </head>
   <body>
       <header id="hea">
  <p>BIEVENUE CHEZ AmonZ</p>
</header>
<div class="hea1">
  <ul>
    <li>
     <a href="../index.php" id="acc">Accueil</a>

     <a href="inscription.php" id="ins">Inscription</a>
  </li>
  </ul>
</div>
      <div align="center">
         <h2>Connexion</h2>
         <form method="POST" id="connex">
          <label>Email:</label>
            <input type="email" name="mailconnect" placeholder="Mail" id="mai" />
            <br/><br/>
          <label>Password:</label>
            <input type="password" name="mdpconnect" placeholder="Mot de passe" id="pas"/>
            <br/><br/>
            <input type="submit" name="formconnexion" value="Se connecter !" />
            <br><br>
             <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
         </form>

      </div>
   </body>
</html>
