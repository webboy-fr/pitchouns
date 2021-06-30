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

    <body style="background-color: #CDE4F5 ;">
        <br><br>
        <div class="col-4 bg-dark text-light"><br>
            <h3>Accés API meteojob:</h3>

            <p>L'accés de l'API de météojob est privé. Aucun moyen (gratuit ou payant) n'existe pour y accéder</p>
        </div>
        </div>

        <div class="col-8 m-auto text-center p-5">
            <h1>Jooble</h1>

            <div class="m-auto text-center">
                <h4>L'accès à l'API Jooble (Application Programming Interface, comprenez interface de programmation applicative)
                    :</h4>
            </div>

            </br>
            <div class="row m-auto text-justify p-5">
                <div class="col-8 m-auto bg-light "><br>
                    <h3>Mode opératoire :</h3>

                    <p>remplir le formulaire sur https://fr.jooble.org/api/about avec une adresse mail et cliquer sur "envoyer la demande".
                        Jooble envoie la clé de l'API par mail, cette clé est limitée à 500 requêtes au total tant que jooble n'a pas validé le compte. (à ce jour pas de confirmation de validation)
                    </p>
                </div>
                <br><br>
            </div>

            <div class="col-8 m-auto text-justify bg-warning p-3">
                <h3>Bilan :</h3>

                <p>L'API Jooble fonctionne, cependant:
                    - elle est difficile à exploiter dans le temps qui nous a été imparti
                    - la limitation des 500 requêtes n'est pas levée tant qu'il n'ya pas de validation de jooble
                    Aucune informations sur les critères de validation de Jooble</p>
                <p>

                </p>
            </div>



            <br><br><br>
            <form action="" method="post">
                <h5>Veuillez entrer un métier et un lieu</h5>
                <input type="text" name="metier">
                <input type="text" name="lieu">
                <input type="submit">

            </form>

            <?php

            $metier = $_POST['metier'];
            $lieu = $_POST['lieu'];
            $params = "{ 'keywords': '$metier', 'location': '$lieu'}";

            $url = "https://fr.jooble.org/api/";
            $key = "098aba73-3440-4a4d-935b-c27460a2d827";

            //create request object
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url . "" . $key);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

            $test = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);

            // receive server response ...
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $server_output = curl_exec($ch);

            curl_close($ch);

            //print response

            echo "les paramètres envoyés :<br>";
            echo "$params <br><br>";

            echo "le debut de l'url envoyée :<br>";
            echo "$test<br><br>";

            echo "<h3>Voici les données brutes que nous renvoie l'API, preuve que cela fonctionne: </h3>";
            echo "les résultats obtenus :<br>";
            echo "<pre>";
            var_dump($server_output);
            echo "</pre>";

            ?>

    </body>

</html>