<?php
include('config.php');


$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    echo "";
} catch (PDOException $e) {
    echo "Er is geen verbinding met de database.<br>
        Neem contact op met de administrator<br>";
    echo "systeemmelding: " . $e->getMessage();
}

$sql = "SELECT Id
                ,Merk
                ,Model 
                ,Topsnelheid
                ,Prijs
        FROM DureAuto";

$statement = $pdo->prepare($sql);

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_OBJ);




$tableRows = "";
foreach ($result as $info) {
    $tableRows .= "<tr>
                        <td>$info->Merk</td>
                        <td>$info->Model</td>
                        <td>$info->Topsnelheid</td>
                        <td>$info->Prijs</td>
                        <td>
                            <a href='delete.php?Id=$info->Id'>
                                <img src='img/b_drop.png' alt='cross'>
                            </a>
                        </td>
                    </tr>";
}



?>
<h3>Welkom bij Amine's php Toets!</h3>


<h3>De vijf duurste auto's ter wereld!</h3>

<table border='1'>
    <thead>
        <th>Merk</th>
        <th>Model</th>
        <th>Topsnelheid</th>
        <th>Prijs</th>
        <th>Delete</th>
    </thead>
    <tbody>
        <?php echo $tableRows; ?>
    </tbody>
</table>