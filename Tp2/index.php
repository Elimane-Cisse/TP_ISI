<?php include 'header.php'; ?>
<h1 align="center">Tp2 ( autoload et reset)</h1>
  <div align="center" id="forms">
   <form>
    <?php


        function __autoload($clas_name)
        {

            include "classe/".$clas_name.".php";
        }


        $form = new formulaire();
    ?>
        <?= $form->getnom("nom");?>
        <?= $form->getprenom("prenom");?>
        <?= $form->getemail("email");?>
        <?= $form->getpassword("password");?>
        <?= $form->getsubmit("Valider","Annuler");?>


    </form>
   </div>

   <?php include 'footer.php' ?>
