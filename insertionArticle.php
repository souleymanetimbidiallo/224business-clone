<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Insertion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    <!-- Insertion d'un article dans la base de donnees -->
<div style="padding-left:50px; padding-right:50px;">
    <form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="application/x-www-form-urlencoded">   
         <h1 class="h3 text-center table-primary text-primary" >Insertion d'un article</h1>
            <fieldset>
            <legend class="h5 text-primary">Informations de l'article</legend>
                <div class="form-group">
                    <label for="tire" >Titre:</label><br> 
                    <input type="text" name="titre" id="titre" placeholder="Entrez le titre de l'article" class="form-control">
                </div> 
                <div class="form-group">
                        <label for="contenu" >Contenu:</label><br> 
                        <textarea name="contenu" id="contenu" cols="50" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                        <label for="date" >Date de publication:</label><br> 
                        <input type="date" name="datePu" id="datePu" placeholder="Entrez la date de publication" class="form-control">
                </div>
                <div class="form-group">
                        <label for="tire" >Image:</label><br> 
                        <input type="text" name="image" id="image" placeholder="Entrez le nom de l'image (ex:image.png)" class="form-control">
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
                <button type="submit" name="btn1" value="Envoyer" class="btn btn-success">Envoyer</button></div>                        
        </fieldset> 
    </form>          
</div>                
<?php   
//Enregistrements des informations dans la base de donnees 
        include_once('connecterPDO.inc.php');
        $idcom=connexion('224 business(g2)','parametre');
            //Verifier si tous les champs sont saisis 
        if(!empty($_POST['titre']) && !empty($_POST['contenu']) && !empty($_POST['datePu']) && !empty($_POST['image']) && !empty($_POST['categorie'])){
            $id="\N";
            $titre=$idcom->quote($_POST['titre']);
            $contenu=$idcom->quote($_POST['contenu']);
            $datePu=$idcom->quote($_POST['datePu']);
            $image=$idcom->quote($_POST['image']);
            $categorie=$idcom->quote($_POST['categorie']);
                //Requete d'insertions des informations saisies dans le formulaire
            $sql="INSERT INTO tbl_articles
                    VALUES($id,$titre,$contenu,$datePu,$image,$categorie)";
            $nblignes=$idcom->exec($sql);
            if($nblignes!=1){
                $mes_erreurs=$idcom->errorInfo();
                echo 'Insertion impossible, code:'.$idcom->errorCode().$mes_erreurs[2];
                echo "<script language=\"javascript\"> alert('Erreur: ".$idcom->errorCode()."')</script>";
            }else{
                echo "<script language=\"javascript\"> alert('Vous êtes enregistrés avec succès, Votre identifiant est :".$idcom->lastInsertID()."'); window.location='administration.php';</script>";
                $idcom=null;
            }
            
        }else{
            echo "<h3 class='text-danger block text-center'>Formulaire à compléter!</h3>";
        }
?>  
<!-- Inclusion des fichier bootstrap -->
    <script src="js/fontawesome-all.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>