<?php
    include_once('connecterPDO.inc.php');
    $idcom=connexion('224 business(g2)','parametre');
    include_once('fonction.inc.php');
    $sql1=afficherCategorie(1,11);
    $sql2=afficherCategorie(2,4);
    $sql3=afficherCategorie(4,2);
    $art1=$idcom->query($sql1);
    $art2=$idcom->query($sql2);
    $art3=$idcom->query($sql3);
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=width-device, initial-scale=1,shrink-to-fit=no"/>
            <link rel="stylesheet" href="css/bootstrap.min.css"/>
            <title>Page d'accueil</title>
            <style>
                .lien1 a:link{
                    text-decoration: none;
                }
                .lien1 a:hover{
                    color:red;
                }
                .lien2 a:link{
                    text-decoration: none;
                }
                .lien2 a:hover{
                    color:green;
                }
                .lien3 a:link{
                    text-decoration: none;
                }
                .lien3 a:hover{
                    color:blue;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 col-lg-5">
                    <img src="images/banner.gif" alt="" class="img-fluid mt-md-5 mt-lg-5 d-block m-w-auto"/>
                    </div>
                    <div class="col-12 col-md-7 col-lg-7">
                        <img src="images/SOGUIBEC.gif" alt="" class="img-fluid mt-md-5 mt-lg-5 d-block m-w-auto"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="row"> 
                                <div style="position:relative;top:0.8vh;height:auto;"class="col-12 col-md-7 col-lg-7  badge ml-md-2 ml-lg-2 mt-md-4 mt-lg-4">
                                    <div class="badge-danger mb-md-0 mb-lg-0 font-weight-bolder h-100 " style="width: 225px;margin-left:3px;">
                                        <p class="h6">Offres d'emplois à la une</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 col-lg-5"></div>
                        </div>
                        <hr style="width:100%; height:1px;margin-top:-1px;position: relative;top:1px" class="bg-danger"/>
                        <div class="row">
                            <?php
                                while($art = $art1->fetch()){
                            ?>
                        <section class="row list-group-item-action">    
                            <div class="col-12 col-md-4 col-lg-4">
                                <a href="#"><img src="images/<?= $art['images']?>" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="lien1 col-12 col-md-8 col-lg-8">
                            <a href="article2.php?id=<?= $art['id_art'] ?>" title="<?= $art['titre'] ?>" > <?= $art['titre'] ?>
                            <p class="mt-2 text-dark">
                                <b>224business</b> - 
                                <i><?= $art['date_publication'] ?></i> 
                                <span class="badge badge-dark badge-pill">0</span>
                            </p>
                            </a>
                            </div>
                        </section>    
                            <?php } ?>
                        </div>
                    </div>
                        <div class="col-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div style="position: relative;top:0.8vh"class="col-12 col-md-7 col-lg-7 badge ml-md-2 ml-lg-2 mt-md-4 mt-lg-4">
                                <div class="badge-success mb-md-0 mb-lg-0 font-weight-bolder h-100 " style="width: 225px;margin-left:3px;">
                                    <p class="h6">Appel d'offres à la une</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 col-lg-5">
                                    
                            </div>
                        </div>
                            <hr style="width:100%; height:1px;margin-top:-1px;position:relative;top:1px"class="bg-success"/>
                            
                        <div class="row">
                            <?php
                                while($art = $art2->fetch()){
                            ?>
                            <div class="col-12 col-md-4 col-lg-4">
                                <a href="#"><img src="images/<?= $art['images']?>" alt="" class="img-fluid"></a>
                            </div>
                            <div class="lien2 col-12 col-md-8 col-lg-8">
                                <a href="article2.php?id=<?= $art['id_art'] ?>" title="<?= $art['titre'] ?>"> <?= $art['titre'] ?>
                                    <p class="mt-2 text-dark">
                                        <b>224business</b> - 
                                        <i><?= $art['date_publication'] ?></i>
                                        <span class="badge badge-dark badge-pill">0</span>
                                    </p>
                                </a>
                            </div>
                            <?php } ?>
                            <img src="images/job-orange.png" alt="une image"  style="height:100%; width:100%;"/>

                        </div>
                        
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <a href="#">
                                <img src="images/ban6.png" alt="" class="img-fluid pt-md-5 pt-lg-5 h-50 mx-auto d-block"/>
                        </a>
                        <h1 class="h4 font-weight-bolder text-primary">'Ces Leaders qui nous inspirent.' </h1>
                        <a href="#">
                            <img src="images/naite.jpg" alt="" class="img-fluid pt-md-5 pt-lg-5 h-35"/>
                            <span>Moustapha Naite-Ministre des TP-Un parcours enviable</span>
                        </a>
                        <div class="row">
                            <div style="position:relative;top:0.8vh; height:auto;"class="col-12 col-md-7 col-lg-7 badge ml-md-2 ml-lg-2 mt-md-8 mt-lg-7">
                                <div class="badge-primary mb-md-0 mb-lg-0 font-weight-bolder h-100 " style="width: 225px;"><p class="h6">Communiqué/Publireportage</p></div>
                            </div>
                            <div class="col-12 col-md-5 col-lg-5">
                                
                            </div>
                        </div>
                        <hr style="width:100%; height:1px;margin-top:-1px;padding-right:0px;" class="ml-md-0 ml-lg-0 bg-primary"/>
                        <div class="lien3 row">
                        <?php
                                while($art = $art3->fetch()){
                            ?>
                                <div class="col-12 col-md-4 col-lg-4">
                                <a href="#"><img src="images/<?= $art['images']?>" alt="" class="img-fluid"></a>
                                </div>
                                <div class="col-12 col-md-8 col-lg-8">
                                <a href="article2.php?id=<?= $art['id_art'] ?>" title="<?= $art['titre'] ?>"> <?= $art['titre'] ?>
                                    <p class="mt-2 text-dark">
                                        <b>224business</b> - 
                                        <i><?= $art['date_publication'] ?></i>
                                        <span class="badge badge-dark badge-pill">0</span>
                                    </p>
                                </a>
                                </div>
                                <?php } ?>
                            </div>      
                    </div>
                </div>
                
                <hr  style="width:85vw;" class="bg-dark"/>
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-8">
                        
                            <img src="images/caw.png" alt="caw" class="img-fluid"style="height:500px;  width:800px"/>
                        
                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                       
                            <img src="image/ramadan.png" alt="ramadan" class="img-fluid"style="height:500px; width:400px"/>
                        
                    </div><br>
                    <div class="h4 text-light" style="background-color:red;margin-left:450px;"><b>Nos Partenaires</b></div>                    
                    <hr  style="width:85vw;" class="bg-dark"/>
                </div>


<a class="d-block" href="#" data-toggle="modal" data-target="#myModal">
        <div class="row mx-auto d-md-flex d-lg-flex justify-content-around">
            <img src="images/logo-guinee.png" alt="" class="img-fluid " style="width:130px;height:150px;"/>
            <img src="images/logo-orange.png" alt="" class="img-fluid" style="width:130px;height:150px;"/>
            <img src="images/logo-scg.png" alt="" class="img-fluid"/>
            <img src="images/logo-terre-des-hommes.png" alt="" class="img-fluid " style="width:170px;height:150px;"/>
            <img src="images/logo-fhi360.jpg" alt="" class="img-fluid" style="width:170px;height:150px;"/>
            <img src="images/logo-pnud.png" alt="" class="img-fluid w-1"/>
        </div>
        <div class="row d-md-flex d-lg-flex justify-content-around mb-5">
            <img src="images/logo-man.jpg" alt="" class="img-fluid"/>
            <img src="images/logo-sos-villages.jpg" alt="" class="img-fluid" style="width:190px;height:170px;margin-left:125px;"/>
            <img src="images/logo-expertise-france.jpg" alt="" class="img-fluid" style="margin-left:33px;width:180px;height:170px;"/>
            <img src="images/logo-parcagpi.png" alt="" class="img-fluid" style="width:170px;height:170px;"/>
            <img src="images/logo-bcrg.png" alt="" class="img-fluid" style="width:170px;height:150px;"/>
        </div>
    </a>
    <div class="modal fade show" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content"style="width:350px;height:250px;">
                <div class="modal-body">
                    <!--Begin Carousel-->
                    <div class="carousel slide show fade" data-ride="carousel" id="myCarousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/guinee.png" alt="" class="img-fluid d-block mx-auto" style="width:130px;height:150px;"/>
                            </div>
                            <div class="carousel-item">
                                <img src="images/logo-orange.png" alt="" class="img-fluid d-block mx-auto" style="width:130px;height:150px;"/>
                            </div>
                            <div class="carousel-item">
                                <img src="images/logo-scg.png" alt="" class="img-fluid d-block mx-auto" style="width:130px;height:150px;">
                            </div>
                            <div class="carousel-item">
                                <img src="images/logo-terre-des-hommes.png" alt="" class="img-fluid d-block mx-auto" style="width:130px;height:150px;">
                            </div>
                            <div class="carousel-item">
                                <img src="images/logo-fhi360.jpg" alt="" class="img-fluid d-block mx-auto" style="width:130px;height:150px;"/>
                            </div>
                            <div class="carousel-item">
                                <img src="images/logo-pnud.png" alt="" class="img-fluid d-block mx-auto" style="width:130px;height:150px;"/>
                            </div>
                            <div class="carousel-item">
                                <img src="images/logo-man.jpg" alt="" class="img-fluid d-block mx-auto" style="width:130px;height:150px;">
                            </div>
                            <div class="carousel-item">
                                <img src="images/logo-sos-villages.jpg" alt="" class="img-fluid d-block mx-auto" style="width:130px;height:150px;">
                            </div>
                            <div class="carousel-item">
                                <img src="images/logo-expertise-france.jpg" alt="" class="img-fluid d-block mx-auto" style="width:130px;height:150px;"/>
                            </div>
                            <div class="carousel-item">
                                <img src="images/logo-parcagpi.png" alt="" class="img-fluid d-block mx-auto" style="width:130px;height:150px;"/>
                            </div>
                            <div class="carousel-item">
                                <img src="images/logo-bcrg.png" alt="" class="img-fluid d-block mx-auto" style="width:130px;height:150px;">
                            </div>
                        </div>
                        <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
                            <span class="carousel-control-prev-icon bg-dark"></span>
                        </a>
                        <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                            <span class="carousel-control-next-icon bg-dark"></span>
                        </a>
                    </div>
                    <!--End Carousel-->
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="rounded-circle">&times;</button>
                </div>
            </div>
        </div>
    </div>
</div>
            <script src="js/jquery-3.3.1.slim.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>