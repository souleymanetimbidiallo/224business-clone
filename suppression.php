<?php
   $id = $_GET['id'];
   include_once('connecterPDO.inc.php');
   $idcom=connexion('224 business(g2)','parametre');
   $sql="DELETE FROM tbl_articles WHERE id_art=$id";
   $row=$idcom->exec($sql);
   echo "<script language=\"javascript\"> alert('Suppression effectuée avec succès!'); window.location='administration.php';</script>";
  
?>