<?php

if(isset($_POST["artikel"])){
    include "pdo.php";

    $myConn = new DB;

    $artikel = htmlspecialchars($_POST["artikel"]);
    $verpakking = htmlspecialchars($_POST["verpakking"]);
    $inhoud = htmlspecialchars($_POST["inhoud"]);
    $omschrijving = htmlspecialchars($_POST["omschrijving"]);
    $btw = htmlspecialchars($_POST["btw"]);
    $emballage = htmlspecialchars($_POST["emballage"]);
    $prijs = htmlspecialchars($_POST["prijs"]);


    $query = "INSERT INTO tblartikel (Artikelgroep, Verpakking, Inhoud, Omschrijving, btw_code, emballage, prijs)
    VALUES ('$artikel','$verpakking','$inhoud','$omschrijving','$btw','$emballage', '$prijs')";
    
    $result = $myConn->executeSQL($query);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
    <form method="POST" action="index.php">
    <input type="text" required name="artikel" placeholder="Artikelgroep">
    <input type="text" required name="verpakking" placeholder="Verpakking">
    <input type="number" required name="inhoud" placeholder="inhoud">
    <input type="text" required name="omschrijving" placeholder="Omschrijving">
    <input type="number" required name="btw" placeholder="BTW Code">
    <input type="number" required name="emballage" placeholder="Emballage">
    <input type="number" required name="prijs" placeholder="Prijs">
    <input type="submit"  value="Toevoegen">
    </form>
</body>
</html>