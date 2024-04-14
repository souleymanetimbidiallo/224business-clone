<style>
/* Element css permettant de controler le menu et tout l'entete */


.navbar .navbar-nav{
  font-weight: bold;
  font-size: 1rem;
}

.navbar .navbar-nav li:hover:not(#search) {
  border-bottom: 0px solid lightskyblue;
}


.navbar .navbar-nav i{
  font-size: 1.5rem;
}

.navbar .navbar-nav .nav-item{
  margin-left: 10px;
}

.container .row .col-md-3:last-child i{
  font-size: 2.5rem;
}

.container .row .col-md-3:last-child i.first:hover{
  color: #385698;
  cursor: pointer;
  transition: .2s;
}

.container .row .col-md-3:last-child i.second:hover{
  color: #0E76A8;
  cursor: pointer;
  transition: .2s;
}

.container h1{
  font-weight: bold !important;
}

.navbar button{
  background: white !important;
  position: relative;
  bottom: 3px;
}

#search {
  display: block;
}

#search2{
  display: none;
}

@media only screen and (max-width: 768px) {
  
  .navbar .navbar-nav li:hover{
      border-bottom: none;
  }

  .navbar{
    margin-top: .5em;
  }
  

  #search {
    display: none;
  }

  #search2{
    display: block;
    position: relative;
    bottom: 5px;
  }
}

  </style>
  <!-- Entete de tous les pages du site -->
<header>
      <div id="page" class="w-100 " style="background: red; height: 25px; text-align:right; color:white; padding-right:10px;"  ><?php include_once('dateAvance.php');?></div>
      <img src="images/barre.png" alt="barre de haut" class="img-responsive d-block w-100">
      <nav class="navbar navbar-expand-lg navbar-light" style="background: #30A0B9; padding-bottom: .5px;">
      <!-- Creation du bouton pour les petits ecrans -->        
      <button class="navbar-toggler "
              type="button"
              data-toggle="collapse"
              data-target="#content"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="toggle navigation">
                  <span class="navbar-toggler-icon"></span>
       </button>
       <!-- Fin de la traitance du bouton -->
              <div class="collapse navbar-collapse justify-content-center" id="content">
                <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">ACCUEIL</a>
                  </li>

                  <li class="nav-item">
                    <a href="categorie.php?id=1" class="nav-link text-white">OFFRES D'EMPLOIS</a>
                  </li>

                  <li class="nav-item">
                    <a href="categorie.php?id=2" class="nav-link text-white">APPEL D'OFFRES</a>
                  </li>

                  <li class="nav-item">
                    <a href="categorie.php?id=3" class="nav-link text-white">FORMATION</a>
                  </li>

                  <li class="nav-item">
                    <a href="categorie.php?id=4" class="nav-link text-white">COMMUNIQUE</a>
                  </li>

                  <li class="nav-item">
                    <a href="membres.php" class="nav-link text-white">CONTACTEZ-NOUS</a>
                  </li>

                  <li class="nav-item" style="margin-left: 10rem;" id="search">
                    <a href="#" class="nav-link text-white ml-5">
                          <i class="fas fa-search"></i>
                    </a>

                  </li>
                </ul>
              </div>
      </nav>
    </header>
<!-- Fin du fichier d'entete -->
    <script src="js/fontawesome-all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
