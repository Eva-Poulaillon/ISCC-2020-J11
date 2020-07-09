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
                
                
                $user_id = 8;
                $req = $dbco->prepare("DELETE FROM produit WHERE id = :user_id");
                $req->bindParam(':user_id', $user_id, PDO::PARAM_INT);
                $req->execute();
                echo 'Données supprimées';
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>