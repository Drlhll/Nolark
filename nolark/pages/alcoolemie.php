<!DOCTYPE html>
<!-- 
     Page web créé dans le cadre du cours de web Dev le 01/09/2020
     Auteur : José GIL
     Email : jgil83000@gmail.com
-->
<html lang="fr-FR">
    <head>
        <title>Casques Nolark&nbsp;:&nbsp;Sécurité et confort, nos priorités !</title>
        <meta charset="UTF-8">
        <meta name="author" content="José GIL">
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../js/cookies/tarteaucitron/tarteaucitron.js"></script>
        <script src="../js/cookies/tarteaucitron.init.js"></script>
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
        <link href="../css/cgu.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../favicon.ico">
    </head>
    <body>
        <?php include('../includes/header.html.inc.php'); ?>
        <section>
            <p id="grosTitre">Similateur pédagogique d'alcoolémie théorique</p>
			<form id="form_contact" name="form_contact" action="http://gil83.fr/nolark/testforms.php" method="POST">
                <fieldset id="coordo">
                    <div><label for="i_nom">Poids :</label> <input type="number" name="i_nom" id="i_nom" size="1" pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\s\-]+$" required><div class="input-validation"></div></div>
                    <div><label for="i_sexe">Votre sexe :</label> <input [type="radio"]:checked name="i_sexe" type="button" id="btn_envoyer" name="sub_envoyer" value="Homme"> <input type="reset" name="rst_annuler" value="Femme"></div> </div>
                    <div><label for="i_email">Nombre de verres bus :</label> <input type="number" name="i_email" id="i_email" size="0" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><div class="input-validation"></div></div>
                <div id="controles"><input type="button" id="btn_envoyer" name="sub_envoyer" value="Valider"> <input type="reset" name="rst_annuler" value="Effacer les réponses"></div>
                  
            </form>
        </section>
        <?php include('../includes/footer.inc.php'); ?>
    </body>
</html>