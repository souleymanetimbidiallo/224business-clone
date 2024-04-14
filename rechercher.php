<?php
$find= $_POST['search'];
$findDate=$_POST['searchDate'];
    include_once("connecterPDO.inc.php");
    $idcom=connexion('224 business(g2)','parametre');
    if(!$idcom){
        echo 'echec de la connexion';
       
    }else{
        if(empty($find) && empty($findDate)){
            header('location:administration.php');
        }elseif(!empty($find) && empty($findDate)){
            $sql="SELECT art.id_art,art.titre,art.date_publication,art.images,lower(cat.libelle) as categorie FROM tbl_articles art, tbl_categories cat where cat.id_cat=art.categorie and art.id_art='$find'";
        }elseif(!empty($find) && !empty($findDate)){
            $sql="SELECT art.id_art,art.titre,art.date_publication,art.images,lower(cat.libelle) as categorie FROM tbl_articles art, tbl_categories cat where cat.id_cat=art.categorie and art.id_art='$find'";
        }else{
            $sql="SELECT art.id_art,art.titre,art.date_publication,art.images,lower(cat.libelle) as categorie FROM tbl_articles art, tbl_categories cat where cat.id_cat=art.categorie and art.date_publication='$findDate'";
        }
        $rows=$idcom->query($sql);
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Recherche</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    <div class="container-fluid ml-3" style="height:100px">
        <section class="row">
            <span class="col-10 h2 table-primary text-center text-primary mt-2 pt-1">Administration de la base de données</span>
            <span class="col-2 h6 text-left text-danger table-danger mt-2 pt-3"><?php include_once("dateAvance.php");?></span>
        </section>
        <section class="row">
            <div class="col-11">
            <a href="insertionArticle.php"> <img src="image/add.png" alt="ajout d'un artilce"> Ajoutez un article</a></button>
            </div>
            <div class="col-1 input-group">
                <a href="administration.php" alt="Administration" title="Retour"><img src="image/Return.png"></a>              
            </div>
        </section>
    </div>
    <?php $nbart=$rows->rowCount(); ?>
    
    <h2 class="h2 text-primary ml-3"> Nombre d'article(s) trouvé(s): <?= $nbart ?> </h2>
    

    <div class="table-responsive">
                    <table class="table table-striped  table-hover table-bordered text-between ml-3 mr-3">
                        <tr>
                            <th>Identifiant</th>
                            <th>Titre</th>
                            <th>Date de publication</th>
                            <th>Image</th>
                            <th>Categorie</th>
                        </tr>
                        <?php 
                        while($row=$rows->fetch()){
                    ?>
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
        </div>   


    <script src="js/fontawesome-all.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
