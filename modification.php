<?php
   $id = $_GET['id'];
   include_once('connecterPDO.inc.php');
   $idcom=connexion('224 business(g2)','parametre');
   $sql="SELECT * FROM tbl_articles WHERE id_art=$id";
   $rows=$idcom->query($sql);
   $row=$rows->fetch(PDO::FETCH_NUM)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
       
        <div style="padding-left:50px; padding-right:50px;">
            <form action= "# " method="post" enctype="application/x-www-form-urlencoded">   
                <h1 class="h3 text-center table-primary text-primary" > Modification d'un article</h1>
                    <fieldset>
                    <legend class="h5 text-primary">Informations de l'article</legend>
                        <div class="form-group">
                            <label for="tire" >Titre:</label><br> 
                        </div> 
                            <input type="text" name="titre" id="titre" value="<?= $row[1] ?>" placeholder="Entrez le titre de l'article" class="form-control">
                        <div class="form-group">
                                <label for="contenu" >Contenu:</label><br> 
                                <textarea name="contenu" id="contenu" cols="50" rows="10" class="form-control"><?= $row[2] ?></textarea>
                        </div>
                        <div class="form-group">
                                <label for="date" >Date de publication:</label><br> 
                                <input type="date" name="datePu" id="datePu" placeholder="Entrez la date de publication" value="<?= $row[3] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="tire" >Image:</label><br> 
                                <input type="text" name="image" id="image" placeholder="Entrez le nom de l'image (ex:image.png)" value="<?= $row[4] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="tire" >Categorie:</label><br>                                     
                                    <select name="categorie" id="categorie" class="form-control">
                                        <option value="">---Choisissez la categorie---</option>
                                        <option value="1">Offres d'appels</option>
                                        <option value="2">Appels d'offres</option>
                                        <option value="3">Formation</option>
                                        <option value="4">Communiqué</option>
                                    </select>
                                
                        </div>
                        <hr style="heigth:2px">
                        <div style="padding-bottom:5px;"> <button type="reset" name="btn1" value="Effacer" class="btn btn-danger">Effacer</button>
                        <button type="submit" name="modifier" value="Envoyer" class="btn btn-success">Enregistrer</button></div>                        
                </fieldset> 
            </form>        
        </div>


        <?php 
            if(isset($_POST['modifier'])){
                if(isset($_POST['titre']) && isset($_POST['contenu']) && isset($_POST['datePu']) && isset($_POST['image']) && isset($_POST['categorie'])){
                    $titre = $_POST['titre'];
                    $contenu = $_POST['contenu'];
                    $datePu = $_POST['datePu'];
                    $image = $_POST['image'];
                    $categorie = $_POST['categorie'];
                    
                    $sql = "UPDATE tbl_articles 
                            SET titre = '$titre', contenu = '$contenu', date_publication = '$datePu', images = '$image', categorie = '$categorie' 
                            WHERE id_art = '$id'";
                    
                    $result = $idcom->exec($sql);
                    
                    if($result!=1)
                    {
                        echo "<script type=\"text/javascript\">alert('Erreur de modification')</script>";
                    }
                    else{
                        echo "<script type=\"text/javascript\">alert('Vos modifications sont enregistrées'); window.location='administration.php';</script>";
                    }

                }
                else{

                }
            }
        ?>
    <script src="js/fontawesome-all.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>         