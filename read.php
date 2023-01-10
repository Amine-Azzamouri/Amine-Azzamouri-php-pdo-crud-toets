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

$sql = "SELECT Id
                ,Merk
                ,Model 
                ,Topsnelheid
                ,Prijs
        FROM dureauto";

$statement = $pdo->prepare($sql);

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_OBJ);




$tableRows = "";
foreach ($result as $info) {
    $tableRows .= "<tr>
                        <td>$info->Name</td>
                        <td>$info->Networth</td>
                        <td>$info->Age</td>
                        <td>$info->MyCompany</td>
                        <td>
                            <a href='delete.php?Id=$info->Id'>
                                <img src='img/b_drop.png' alt='cross'>
                            </a>
                        </td>
                    </tr>";
}



?>
<h3>The 5 richest people on earth</h3>

<table border='1'>
    <thead>
        <th>Name</th>
        <th>Networth</th>
        <th>Age</th>
        <th>MyCompany</th>
        <th>Delete</th>
    </thead>
    <tbody>
        <?php echo $tableRows; ?>
    </tbody>
</table>