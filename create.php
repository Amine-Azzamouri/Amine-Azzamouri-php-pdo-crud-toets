<?php
include('config.php');


$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    echo " er is een verbinding met de database";
} catch (PDOException $e) {
    echo "Er is geen verbinding met de database.<br>
        Neem contact op met de administrator<br>";
    echo "systeemmelding: " . $e->getMessage();
}

$sql = "INSERT INTO richestpeople (Id 
                            ,Name
                            ,Networth
                            ,Age
                            ,MyCompany)
        VALUES              (NULL
                            ,:Voornaam
                            ,:Tussenvoegsel
                            ,:Achternaam);";
//   maak de query gereed met de prepare-method van het $pdo-object
$statement = $pdo->prepare($sql);
$statement->bindValue(':Name', $_POST['Name'], PDO::PARAM_STR);
$statement->bindValue(':Networth', $_POST['Networth'], PDO::PARAM_STR);
$statement->bindValue(':Age', $_POST['Age'], PDO::PARAM_STR);
$statement->bindValue(':MyCompany', $_POST['MyCompany'], PDO::PARAM_STR);
$statement->execute();

header('Location: read.php');
