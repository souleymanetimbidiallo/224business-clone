<!-- Test de connection à la base de données-->
<?php
    include_once("connecterPDO.inc.php");
    $idm=connexion('224 business(g2)','parametre');
    if($idm){
      
    }else{
        echo 'echec de la connexion';
    }
?>
<!-- Fin du test de connexion -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    <div class="container-fluid ml-3" style="height:100px">
        <!-- Affichage du petit menu de l'administration -->
        <section class="row">
            <span class="col-10 h2 table-primary text-center text-primary mt-2 pt-1">Administration de la base de données</span>
            <!-- inclusion de la date -->
            <span class="col-2 h6 text-left  mt-2 pt-3" style="background-color:red; color:white;"><?php include_once('dateAvance.php') ?></span>
        </section>
        <section class="row">
            <div class="col-6">
            <a href="insertionArticle.php"> <img src="image/add.png" alt="ajout d'un artilce"> Ajoutez un article</a></button>
            </div>
            <div class="col-6 input-group">
                <form action="rechercher.php" method="post">
                <div >
                    <input type="text" name="search" placeholder="Identifiant">
                    <input type="text" name="searchDate" placeholder="Date de publication">
                    <input type="submit" value="Rechercher" class="text-primary table-primary">
                </div>
                </form>                
            </div>
        </section>
        <!--Fin d'affichage du menu de l'addministration -->
    </div>
    <?php
    /*inclusion du fichier permettant d'afficher tout le contenu de l'administration */
    include('afficher.php');
    ?>
    <script src="js/fontawesome-all.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>