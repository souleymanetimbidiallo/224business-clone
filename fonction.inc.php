<?php
    function afficherCategorie($identifiant,$nb){
        $sql="SELECT * FROM tbl_articles WHERE categorie=$identifiant ORDER BY id_art DESC LIMIT 0,$nb";
        return $sql;
    }
?>