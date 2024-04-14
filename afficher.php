<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Affichage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
                <?php
                /*Connexion a la base de donnees */
                    include_once('connecterPDO.inc.php');
                    $idcom=connexion('224 business(g2)','parametre');
                    $sql='SELECT art.id_art,art.titre,art.date_publication,art.images,lower(cat.libelle) as categorie FROM tbl_articles art, tbl_categories cat where cat.id_cat=art.categorie ORDER BY art.id_art ASC';
                    $rows=$idcom->query($sql);
            
                    if(!$rows){
                        $mes_erreurs=$idcom->errorInfo();
                        echo 'Connexion impossible, code: '.$idcom->errorCode(),$mes_erreurs[2];
                    }else{
                        $nbart=$rows->rowCount();
            
                        echo "<h2 class='text-primary ml-3'>Vous avez $nbart articles dans le site</h2>";
                    ?>
                    <!-- Liste de tous les articles dans un tableau avec a droite les options de modification, de suppression et d'affichage complet de l'article -->
                    <div class="table-responsive">
                    <table class="table table-striped  table-hover table-bordered text-between ml-3 mr-3">
                        <!-- Entete -->    
                    <tr>
                            <th>Identifiant</th>
                            <th>Titre</th>
                            <th>Date de publication</th>
                            <th>Image</th>
                            <th>Categorie</th>
                        </tr>
                    <?php 
                        while($row=$rows->fetch()){
                    ?><!-- Ligne du tableau -->
                        <tr>
                            <td><?= $row['id_art']?></td>
                            <td><?= $row['titre']?></td>
                            <td><?= $row['date_publication']?></td>
                            <td> <img src="image/<?= $row['images']?>" alt="Image"> </td>
                            <td><?= $row['categorie']?></td>
                            <td><a href="modification.php?id=<?= $row[0] ?>"> <img src="image/edit.png" alt="Modifier cet article"> Modifier</a></td> 
                            <td><a href="suppression.php?id=<?= $row[0] ?>"><img src="image/delete.png" alt="Supprimer cet article">Supprimer</a></td>  
                            <td><a href="article2.php?id=<?= $row[0] ?>"><img src="image/view.png" alt="Afficher cet article">Voir+</a></td>
                        </tr>
                    <?php    
                        }
                        $rows->closeCursor();
                    }
                    $idcom=null;
                ?>  
        </table> 
        <!-- fin de l'affichage -->
        </div>   
        <!-- inclusion des fichiers de bootstrap -->
    <script src="js/fontawesome-all.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>