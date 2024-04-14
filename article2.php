<?php
 //APPEL DE LA PAGE DE CONNEXION
  include_once('connecterPDO.inc.php');
  $db=connexion('224 business(g2)','parametre');
 if(isset($_GET['id']) AND !empty($_GET['id'])){
      $id=htmlspecialchars($_GET['id']);
      $articles=$db->prepare('SELECT * FROM tbl_articles WHERE id_art=?');
      $requete = "SELECT libelle FROM tbl_categories WHERE id_cat = $id";
      $articles->execute(array($id));
      if($articles->rowcount()==1){
          $art=$articles->fetch();
      }
  }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Article</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
    </head>

    <body>
<!-- inclusion de l'entete -->
    <?php include_once('header.php'); ?>
    <main class="container mt-4">
        <div class="row">
            <div class="col-12">
                
            <p class="text-secondary" style="font-size:14px;">
                <a href="#" class="text-muted">Accueil</a> &rsaquo; 
                <a href="categorie.php?id=<?php $art['categorie'] ?>" class="text-muted">categorie</a>&rsaquo;
                <?= $art['titre']; ?>
            </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 list-group">
                <!--body1 -->
        <div class="art_body1">
          <p>

          </p>
            <h1><?php echo $art['titre'];?></h1>
          <h6><?=$art['date_publication'];?></h6>
          <div class="icone">
            <button type="button" class="btn btn-primary" ><span class="fab fa-facebook-f"></span> partager sur facebook</button>
            <button type="button" class="btn btn-info"><span class="fab fa-twitter"></span> Tweeter sur twitter</button>
            <button type="button" class="btn btn-danger"><span class="fab fa-google-plus-g"></span> </button>
            <button type="button" class="btn btn-danger"><span class="fab fa-pinterest-p"></span> </button>
          </div><br>
          <p > <img src="image/<?=$art['images'];?>" style="width: 200px; height: 180px; float: left; margin-right: 10px;"></p>
          <p style="margin-top:30%;">
            <?php
                  $contenu=$art['contenu'];
                  echo nl2br($contenu);
            ?>
          </p>
          <div class="icone">Partager :
            <button type="button" class="btn btn-primary" ><span class="fab fa-facebook-f"></span> facebook</button>
            <button type="button" class="btn btn-info"><span class="fab fa-twitter"></span> Twitter</button>
            <button type="button" class="btn btn-danger"><span class="fab fa-google-plus-g"></span> </button>
            <button type="button" class="btn btn-danger"><span class="fab fa-pinterest-p"></span> </button>
          </div>
          <main class="container mt-4">
                  <ul class="nav nav-tabs" id="myTab">
                      <li class="nav-item">
                          <a href="#home" data-toggle="tab" class="nav-link active" id="home-tab">Article Connexe</a>
                      </li>
                      <li class="nav-item">
                          <a href="#profile" data-toggle="tab" class="nav-link" id="profile-tab">Plus de l'auteur</a>
                      </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home">
                          <img src="images/image1.png" style="margin-bottom: 0px;" >
                          <img src="images/image2.png" style="margin-bottom: 0px;" >
                          <img src="images/image3.png" style="margin-bottom: 0px;" >
                      </div>
                      <div class="tab-pane fade" id="profile">
                        <img src="images/image4.png" style="margin-bottom: 0px;" >
                        <img src="images/image5.png" style="margin-bottom: 0px;" >
                        <img src="images/image6.png" style="margin-bottom: 0px;" >
                      </div>
                  </div>
                </main> 
        </div>
        <!--fin body1-->
        </div>
        <div class="col-12 col-md-4">                    
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
        <!-- inclusion du pied de page -->
        <?php include_once('footer.php');?>
        <!--Files JS-->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/fontawesome-all.min.js"></script>
    </body>
</html>