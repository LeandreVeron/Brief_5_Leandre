
<?php

try
{
    // On se connecte à MySQL
    $connexion = new PDO('mysql:host=localhost;
                            dbname=bd_liens;
                            charset=utf8', 
                            'root', 
                            '');

    echo("connexion etablie !");
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table 

?>
