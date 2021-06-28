<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="metier">
    <input type="text" name="lieu">
    <input type="submit">
    <span>Veuillez entrer un métier et un lieu</span>
</form>

<?php

$metier = $_POST['metier'];
$lieu = $_POST['lieu'];
$params = "{ 'keywords': '$metier', 'location': '$lieu'}";

$url = "https://fr.jooble.org/api/";
$key = "098aba73-3440-4a4d-935b-c27460a2d827";

//create request object
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url."".$key);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$test = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);

//print response

echo "les paramètres envoyés :<br>";
echo "$params <br><br>";

echo "le debut de l'url envoyée :<br>";
echo "$test<br><br>";

echo "les résultats obtenus :<br>";
echo "<pre>";
var_dump($server_output);
echo "</pre>";

?>

</body>
</html>