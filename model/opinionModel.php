<?php

    function getOpinions(){
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=MVC_SITE;charset=utf8', 'root', '');
        }
        catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
        
        $requete = $bdd->query('SELECT * FROM opinions');

        return $requete;
    }