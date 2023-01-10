<?php


require('config.php');


$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";


try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        echo "";
    } else {
        echo "interne server error :(";
    }
} catch (PDOException $e) {
    $e->getMessage();
}






$sql = "DELETE FROM DureAuto
        WHERE Id = :Id;";

if ($sql) {
    echo "het record is verwijderd";
    header('Refresh:1.5; read.php');
} else {
    echo " het bracket is niet verwijderd";
}


$statement = $pdo->prepare($sql);


$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);

$result = $statement->execute();
