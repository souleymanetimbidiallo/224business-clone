<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
        <!-- formulaire permettant la saisie ou la moification d'un article, utilisee coté administration -->
        <form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="application/x-www-form-urlencoded" class="control">   
                <div class="col-3"></div>
                <div class="col-6">
                        <h1 class="h3 text-center table-primary text-primary" >Insertion d'un article</h1>
                    <fieldset>
                        <legend class="h5 text-primary">Informations de l'article</legend>
                               <div  class="control">
                                     <label for="tire" >Titre:</label><br> 
                                     <input type="text" name="titre" id="titre" placeholder="Entrez le titre de l'article">
                                </div> 
                                <div class="control">
                                         <label for="contenu" >Contenu:</label><br> 
                                         <textarea name="contenu" id="contenu" cols="50" rows="10"></textarea>
                                </div>
                                <div class="control">
                                         <label for="date" >Date de publication:</label><br> 
                                         <input type="date" name="datePu" id="datePu" placeholder="Entrez la date de publication">
                                </div>
                                <div class="control">
                                         <label for="tire" >Image:</label><br> 
                                         <input type="text" name="image" id="image" placeholder="Entrez le nom de l'image (ex:image.png)">
                                </div>
                                <div class="control">
                                         <label for="tire" >Categorie:</label><br>                                     
                                            <select name="categorie" id="categorie">
                                                <option value="">---Choisissez la categorie---</option>
                                                <option value="1">Offres d'appels</option>
                                                <option value="2">Appels d'offres</option>
                                                <option value="3">Formation</option>
                                                <option value="4">Communiqué</option>
                                            </select>
                                        
                                </div>
                                <hr style="heigth:2px">
                                <div><button type="reset" name="btn1" value="Effacer" class="btn btn-primary">Effacer</button>
                                <button type="submit" name="btn1" value="Envoyer" class="btn btn-primary">Envoyer</button></div>                        
                                </fieldset>          
                </div>
                <div class="col-3"></div>        
    </form>
    <!-- fin du formulaire -->
    <!-- inclusion dus fichiers bootstrap -->
    <script src="js/fontawesome-all.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>