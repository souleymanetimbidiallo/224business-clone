<?php
    include_once("connecterPDO.inc.php");
    $connexion = connexion("224 business(g2)", "parametre");
    $id = $_GET['id'];
    $requete = "SELECT libelle FROM tbl_categories WHERE id_cat = $id";
    $resultat = $connexion->query($requete);
    $donnees = $resultat->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Categorie</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">
        <style>
            
            a:link{
                text-decoration: none;
            }
            /*Bouton pour afficher le sous-menu*/
            .dropdown{
                background-color: black;
            }
            .dropdown a{
                color: white;
                font-size: 12px;
            }

            /*Gerer le sous-menu*/
            .dropdown-menu{
                background-color: black;
                color: white;
                text-decoration: none;
            }
            .dropdown-menu:hover{
                text-decoration: none;
            }

            /*Gerer les liens du sous-menu*/
            .dropdown-item{
                color: white;
                font-size: 11px;
            }
            .dropdown-item:hover{
                color: rgb(0, 255, 255);
                background-color: black;
            }
           
        </style>
    </head>

    <body>
        <!-- Structure des pages de categorie, Appels d'offres , ...., Communiqué-->
            <?php include_once('header.php'); ?>
        <main class="container mt-4">
            <div class="row">
                <div class="col-12">
                    
                <p class="text-secondary" style="font-size:14px;">
                    <a href="#" class="text-muted">Accueil</a> &rsaquo; 
                    <?= $donnees['libelle']; ?>
                </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 list-group">
                    <h1 class="h2"><?= $donnees['libelle']?></h1>
                    <?php 
                        $sql = "SELECT *
                                FROM tbl_articles
                                WHERE categorie = ?
                                ORDER BY id_art DESC";
                        $req = $connexion->prepare($sql);
                        $req->execute(array($id));
                        while($art = $req->fetch()){
                    ?>
                    <!--Begin Section -->
                    <section class="row list-group-item-action">
                        <figure class="figure col-3 my-auto">
                            <img src="images/<?= $art['images']?>" alt="" class="img-fluid figure-img">
                        </figure>
                        <article class="col-9">
                                <a href="article2.php?id=<?= $art['id_art'] ?>" title="<?= $art['titre'] ?>" ><h1 class="h4 mt-5"> <?= $art['titre'] ?></h1>
                                <p class="mt-2">
                                <b>224business</b> - 
                                <i><?= $art['date_publication'] ?></i> 
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="badge badge-dark badge-pill">0</span>
                            </p>
                            <p class="d-none d-md-block mt-1 text-dark">
                                <?php 
                                    $contenu = $art['contenu'];
                                    $lg_max = 130;
                                    if(strlen($contenu) > $lg_max){
                                        $contenu = substr($contenu, 0, $lg_max);
                                        $contenu .= " ...";
                                    } 
                                    echo $contenu;
                                ?>
                            </p>
                                </a>                           
                        </article>
                    </section>
                    <?php 
                        }
                    ?>
                    <!--End Section -->

                    <!--Begin Pagination-->
                    <ul class="pagination justify-content-center justify-content-md-start mt-5">
                        <li class="page-item ml-2 active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item ml-2"><a href="#" class="page-link">2</a></li>
                        <li class="page-item ml-2"><a href="#" class="page-link">3</a></li>
                        <span class="d-block mx-2">...</span>
                        <li class="page-item ml-2"><a href="#" class="page-link">62</a></li>
                        <li class="page-item ml-2"><a href="#" class="page-link">&gt;</a></li>
                    </ul>
                    <!--End Pagination-->

                </div>
                <div class="col-12 col-md-4">
                    <button type="button" class="btn dropdown d-none d-md-block ml-auto">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">DERNIER</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">Dernier</li>
                            <li class="dropdown-item">Les articles en vedette</li>
                            <li class="dropdown-item">Plus populaire</li>
                            <li class="dropdown-item">7 jours populaire</li>
                            <li class="dropdown-item">Les mieux notés</li>
                            <li class="dropdown-item">Au hasard</li>
                        </ul>
                    </button>
                    
                    <figure class="mt-4">
                            <img src="images/ban6.png" alt="Pub 1" class="img-fluid">
                    </figure>
                    
                    <figure class="mt-4">
                            <img src="images/job-orange.png" alt="Pub 2" class="img-fluid">
                    </figure>
                    
                    <figure class="mt-4">
                            <img src="images/pub-ramadan-promo.PNG" alt="Pub 3" class="img-fluid">
                    </figure>
                </div>
            </div>
        </main>
        <?php include_once('footer.php');?>
        <!--Files JS-->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/fontawesome-all.min.js"></script>
    </body>
</html>