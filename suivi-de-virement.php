<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylesuivi.css">
    <link rel="stylesheet" href="css/styleapropos.css">
    <link rel="stylesheet" href="css/stylevir.css">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon" />
    <title>UBS - Votre banque - plus de 150 ans | Monde</title>
</head>

<body>
    <header>
        <a href="/"><img class="logo" src="image/UBS_Logo_Semibold.svg" alt=""></a>
    </header>

    <!--menu-->
    <nav class="pixel16 pixel">
        <label for="menu-mobile" class="menu-mobile">Menu</label>
        <input type="checkbox" name="" id="menu-mobile">
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="Banque-dinvestissement.html">Banque d'investissement</a></li>
            <li><a href="Gestion-de-patrimoine.html">Gestion de patrimoine</a></li>
            <li><a href="À-propos-de-nous.html">À propos de nous</a></li>
            <li><a href="Contactez-nous.php">Contactez-nous</a></li>
        </ul>
    </nav>
    <!--fin menu-->

    <?php

    //ICI EN BAS LE CODE DE SUIVIE A MODIFIER UNIQUEMENT DANS LE CODE SANS SUPRIMER LE POINT VIRGULE

    //👇👇👇👇👇👇👇👇

    $CODE = '830095';

    //👆👆👆👆👆👆👆👆

    //ICI EN HAUT LE CODE DE SUIVIE A MODIFIFIER UNIQUEMENT DANS LE CODE SANS SUPRIMER LE POINT VIRGULE

    ?>

    <?php

    //NE PAS TOUCHER AU CODE EN DESSOUS

    if (isset($_POST['envoi'])) {
        if (isset($_POST['mdp']) and !empty($_POST['mdp'])) {
            if ($_POST['mdp']    ==  $CODE) {
                $acces = 1;
            } else {
                echo '<p>Attention : votre numéro de suivi du virement est incorrect</p>';
            }
        } else {
            echo '<p>Attention : vous devriez entrer un numéro de suivi</p>';
        }
    }

    if (!isset($acces)) { ?>
        <?php


        //NE PAS TOUCHER LE CODE AU DESSUS

        ?>

        <br>
        <!-- <div class="formulaire">
            <form action="" method="post">
                Veillez entrer votre numero de référence du virement <br><br>
                <input type="text" name="mdp" placeholder="Entrer votre suivi ici..."><br><br>
                <input class="boutonsuivi" type="submit" name="envoi" value="Suivi virement">

            </form>
        </div> -->

        <form action="" method="post" class="text-center container">
            <div class="form-group">
                <label for="mdp" style="font-weight: bold;">Veillez entrer votre numero de référence du virement</label>
                <input type="text" name="mdp" id="mdp" class="form-control" placeholder="Entrer votre suivi ici...">
            </div>
            <button type="submit" name="envoi" class="btn btn-primary">Suivi virement</button>
        </form>
    <?php } else { ?>


        <!--POUR LA MODIFICATION DU NOM ET AUTRE INFORMATION DU CLIENT TOUS CELA CE PASSE SI-DESSOUS-->

        <div class="paddingleft">
            <h1>Suivi du virement</h1>
            <p class="chers red">Chers clients veuillez lire attentivement votre suivi</p>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="fontsizec">virement en cours.........87% </span></div>
            </div>
            <h2 class="toopooo">information sur l'expediteur</h2>
            <div class="flext">
                <div class="width">
                    <div>
                        <h3>information personnel</h3>
                        <article>nom : <span class="couleurtext">############</span></article>
                        <article>prénom : <span class="couleurtext">############</span></article>
                        <article>pays : <span class="couleurtext">############</span></article>
                        <article>téléphone : <span class="couleurtext">############</span></article>

                    </div>
                </div>
                <div class="width">
                    <div>
                        <h3>information bancaire</h3>
                        <article>numéro aba : <span class="couleurtext">061120084</span></article>
                        <article>N° du compte : <span class="couleurtext"> 4021131374867</span></article>
                        <article>nom de la banque : <span class="couleurtext"> UBS BANK</span></article>
                        <article>devise du compte : <span class="couleurtext"> USD</span></article>
                    </div>
                </div>
            </div>
            <p class="clea"></p>
            <h2>information sur le destinataires</h2>
            <div class="flext">
                <div class="width">
                    <div>
                        <h3>information personnel</h3>
                        <article>nom : <span class="couleurtext">############ </span></article>
                        <article>prénom : <span class="couleurtext">############ </span></article>
                        <article>pays : <span class="couleurtext">############</span></article>
                        <article>téléphone : <span class="couleurtext">############</span></article>

                    </div>
                </div>
                <div class="width">
                    <div>
                        <h3>information bancaire</span></h3>
                        <article>CODE Banque : <span class="couleurtext">////</span></article>
                        <article>GUICHET : <span class="couleurtext">///</span></article>
                        <article>nom de la banque : <span class="couleurtext">############</article>
                        <article>N° du compte : <span class="couleurtext">############</span></article>
                    </div>
                </div>
            </div>
            <h2>information du virement</h2>
            <div class="flext">
                <div class="width">
                    <div>
                        <h3>Montant</h3>
                        <article class="COULEUR">Avis de débit d'un montant de : <span class="couleurtext">100.000$</span> </article>
                        <article class="COULEUR">dans le compte numéro : <span class="couleurtext"> ********4867</span> </article>
                        <article class="COULEUR">N° de suivi du virement : <span class="couleurtext">VIR83****</span> </article>
                        <article class="COULEUR">les détails de paiement supplémentaire sont indiqué sur les conditions</article>

                    </div>
                </div>

                <div class="width">
                    <div>
                        <h3>STATUT DE VOTRE VIREMENT !!!</h3>
                        <article class="COULEUR"> Chers Clients votre virement est en cours et seras disponible dans votre compte après obtention d'une attestation de dépôt monétaire au FMI ( Fonds Monétaire International) bien vouloir contacter la représentation régionale au pays d'origine de la collection au +237 698 29 13 36
                            Merci !!!</article>
                        <article>structure à contacter <a href="tel: 00237 ############">+237 ############</a></article>
                        <article><span class="red">LE VIREMENT SERA ANNULER DANS 72 HEURES SI IL N'EST PAS JUSTIFIER !!!</span </div </div>

                    </div><br><br><br>
                    <!--POUR LA MODIFICATION DU NOM ET AUTRE INFORMATION DU CLIENT TOUS CELA CE PASSE SI-DESSUS-->



                    <!--<div class="width">
                <div>
                    <h3>Condition</h3>
                    <article>Cher</article>
                    <article>bic :</article>
                    <article>nom de la banque :</article>
                    <article>devise du compte :</article>
                </div>
            </div>-->

                </div><br><br><br>


                <!--debut footer-->

                <footer>
                    <p style="color: black;">© UBS 1998-2024. Tous droits réservés.</p>
                </footer>
                <!--fin footer-->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>




<?php } ?>