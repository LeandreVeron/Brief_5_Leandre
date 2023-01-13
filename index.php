<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="css/style.css">
    <title>Ma Base de données</title>
</head>
<body>
    <h1>Gestion de mes marques-pages</h1>

    <table class= "repere">
        <tr>
            <th>Nom</th>
            <th>Lien</th>
        </tr>
    <?php

    include("connexion.php");

    //connexion vers la base de données

    $sql =  'SELECT * FROM liens';

    $lienStatement = $connexion->prepare($sql);
    $lienStatement->execute();
    $data = $lienStatement->fetchAll();

    foreach($data as $ligne){

        echo "<tr>";
            echo "<td>".$ligne["nom_liens"]."</td>";
            echo "<td>".$ligne["url_liens"]."</td>";
        echo "</tr>";
    }

    ?>
    </table>
</body>
</html>