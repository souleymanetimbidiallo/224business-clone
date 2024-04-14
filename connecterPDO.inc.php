<?php
//Fonction de connexion a la base de donnees, le nom de la base de donnees et le nom du fichier contenamt les parametres de connexion 
    function connexion($nameBD,$param){
        include_once($param.'.inc.php');
        $dns='mysql:host='.HOST.';dbname='.$nameBD.';charset=UTF8';
        $user=USER;
        $pass=PASS;

        try{
            $idcom = new PDO($dns,$user,$pass);
            return $idcom;
        }catch(PDOException $except){
            echo 'Echc de la connexion'.$except->getMessage();
            return false;
            exit();
        }
    }
?>