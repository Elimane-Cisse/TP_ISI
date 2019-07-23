<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=tp_php', 'root', '');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>profile</title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="../style/style.css">
   </head>
   <body>
      <header id="hea">
  <p>BIEVENUE CHEZ AmonZ</p>
</header>
<div class="hea1">
  <ul>
    <li>
     <a href="../index.php" id="acc">Accueil</a>

      </li>
  </ul>
</div>
      <div align="center">
         <h2>Bonjour <?php echo $userinfo['pseudo']; ?></h2>
         <br /><br />
         Votre pseudo = <?php echo $userinfo['pseudo']; ?>
         <br />
         Et vorte mail = <?php echo $userinfo['mail']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <?php
         }
         ?>
      </div>

   </body>
</html>
<?php
}
?>
