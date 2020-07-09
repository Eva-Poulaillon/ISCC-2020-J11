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
                
                $donnees = [
                    'id' => 8, 
                    'nom' => 'T-shirt noir',
                    'description' => 'T-shirt coton de couleur noire', 
                    'prix' => 15.50, 
                    'quantite' => 10, 
                    
                ];
                
                $sth = $dbco->prepare(
                    "INSERT INTO produit VALUES (:id, :nom, :description, :prix, :quantite)"
                );
                $sth->execute($donnees);
                echo 'Entrée ajoutée dans la table';
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>