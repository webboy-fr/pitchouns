<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="width: 35%; margin-left: 20px;">
        <!-- // rapport pour l api welcome to the jungle  -->
        <h1>Rapport de Faisabilité</h1>
        <h4>Welcome to the jungle</h4><br>
        <h3>1-Modalités d’accès à l’API </h3>
        <p>L'accès à l'API Welcome Kit est accessible pour les entreprises bénéficiant d'un abonnement PRO sur Welcome
            to
            the Jungle.
            Une fois que vous avez un compte, et votre abonnement, si vous désirez un token pour votre société, vous
            pouvez
            contacter votre account manager.
            Veuillez noter que pour des raisons de confidentialité, vous devez disposer du statut “admin” pour que l’on
            puisse vous communiquer un token, ou avoir l’autorisation écrite d’un admin de votre compte. </p>

            <h3>2-Voici les étapes à suivre pour obtenir un token:</h3>
        <ul>
            
            <li>Rassembler les scopes qui vous paraissent nécessaires listés dans la documentation.</li>
            <li>Indiquer les cas d'usage que vous allez mettre en place afin qu’ils puissent les faire remonter à leur
                équipe produit.</li><br>
        </ul>
        <p>Dans tous les cas pour avoir une estimation du prix il vous faut visiter le site suivant, afin de contacter
            l’équipe de WelcomeKit, qui s’occupe de l’API de Welcome to the jungle : https://www.welcomekit.co/fr </p>
        <br>
        <h3>3-Cette API permet bien de récupérer les informations suivantes :</h3>
        <ul>
            <li>Nom de la société </li>
            <li>Lieu </li>
            <li>Intitulé du poste </li>
            <li>Type de contrat </li>
            <li>Hébergeur de l’offre </li>
        </ul>
    </div>
    <br>
    <div>
        <h1>Test d'appel de données avec le site : La bonne alternance</h1>
        <!-- Pour cette API nous avons besoin de savoir : le code romes du travail recherché, de la latitude et longitude de la ville, nombre de kilomètre de la zone de recherche et du code insee de la ville -->
        <!-- On pourrait donc rajouter un select afin de permettre une recherche  -->
        <!-- TO DO select -->
    <?php 
        //on fait appel à l'API avec l'url, on récupère le json, et on en fait un tableau qui sera exploitable
        $url = "https://labonnealternance.apprentissage.beta.gouv.fr/api/V1/jobs?romes=M1805&latitude=43.604652&longitude=1.444209&radius=50&insee=31555&sources=offres&caller=pitchounes";
        $json = file_get_contents($url);
        $data = json_decode($json, true, 512, JSON_OBJECT_AS_ARRAY);?>
        <!-- On met en forme les données récupérés -->
        <?php foreach ($data["peJobs"]["results"] as $job) : ?>
            <h2><?= $job["title"] ?></h2>
            <p>Entreprise : <?= (isset($job["company"]["name"])) ? $job["company"]["name"] : "Non Renseigné" ?></p>
            <p>Date de création de l'offre : <?= $job["job"]["creationDate"] ?></p>
            <p>Lieu : <?= $job["place"]["city"] ?></p>
            <p>Description : <?= $job["job"]["description"] ?></p>
            <p>Type de contrat : <?= $job["job"]["contractType"] ?> : <?= $job["job"]["contractDescription"] ?></p>
            <p>Lien vers l'offre : <a target="_blank" href='<?= $job["url"] ?>'><?= $job["url"] ?></a></p>
        <?php endforeach ?>
    </div>
</body>

</html>