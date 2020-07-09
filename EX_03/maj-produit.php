<!DOCTYPE html>
<html>
    <head>
        <title>BDD</title>
        <meta charset='utf-8'>
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servname = "localhost"; $dbname = "BaseTest01"; $user = "root"; $pass = "root";
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                
                $req = $dbco->prepare("UPDATE produit SET quantite = 1 WHERE nom = 'Short bleu'");
                $req->execute();
                echo 'Données mises à jour';
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }