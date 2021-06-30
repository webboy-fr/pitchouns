<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<? require "nav.php" ?>

<body style="background-color: #CDE4F5 ;">
    <br><br>

    <div class="col-8 m-auto text-center p-5">
        <h1>Indeed</h1>

        <i><a href="https://opensource.indeedeng.io/api-documentation/" target="_blank">Documentation officielle du site</a></i>
    </div><br>

    <div class="m-auto text-center">
        <h4>L'accès à l'API (Application Programming Interface, comprenez interface de programmation applicative)
            se fait en 3 étapes :</h4>
    </div>

    <br>
    <div class="row m-auto text-justify p-5">
        <div class="col-4 bg-light"><br>
            <h3>Première étape :</h3>

            <p>Créer un compte client sur Ideed avec une adresse mail et un mot de passe. Activer le compte en cliquant sur le lien d'Indeed reçu par mail.
                Créer un projet (application) sur Indeed pour pouvoir générer un ID Client et une clé secrète</p>
        </div>

        <div class="col-4 bg-secondary">
            <h3>Deuxième étape :</h3>

            <p>Sur le site de la documentation d’Indeed, récupérer ce qu’on appelle un Token.
                Un Token est un jeton généré par un serveur lors de l'authentification d'un utilisateur sur une application Web,
                qui est ensuite transmis au client. Il permet d'identifier l'utilisateur.
                Ce Token peut être récupéré via une requête envoyée sur le site.</p>
        </div>

        <!-- Insérer le code ici -->

        <div class="col-4 bg-dark text-light"><br>
            <h3>Troisième étape :</h3>

            <p>Pour accéder aux données d’Indeed, le Token n’est pas suffisant. Il est nécessaire d’avoir un “Publisher”,
                une sorte de compte premium mais gratuit. Un nouveau mail doit-être envoyé afin de récupérer le Publisher.</p>
        </div>
    </div>

    <div class="col-8 m-auto text-justify bg-warning p-3">
        <h3>Bilan :</h3>

        <p>Récupérer des données exploitables sur Indeed est gratuit, mais cepandant complexe par manque de documentation claire
            ainsi que par le nombre d'étapes à effectuer pour y parvenir</p>
        <p>Lors de notre tentative de récupération des données nous avons passé les deux premières étapes sans problème.
            La dernière n’a pu aboutir. Après une longue attente, le service client d’Indeed nous a répondu que pour le moment
            il n’était pas possible d’accéder à l’API car elle a été supprimée. Indeed est actuellement en train de reconfigurer
            les comptes éditeurs pour y remédier . Nous n’avons aucune information du temps que cela prendra pour que l’API redevienne disponible.
        </p>
    </div>


</body>

</html>