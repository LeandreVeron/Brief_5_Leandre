<?php
    
    include("connexion.php");

    /*$sql =  'SELECT * FROM lien';

    foreach ($pdo->query($sql) as $ligne) {

        echo $ligne ['lien_nom'];
    } */
    $sql =  'SELECT * FROM liens';

    $lienStatement = $connexion->prepare($sql);
    $lienStatement->execute();
    $data = $lienStatement->fetchAll();
    
    foreach($data as $ligne){
        echo $ligne['nom_liens'];
    }
    
    ?>