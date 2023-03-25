<?php

class Manager{

    protected function connection(){
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=MVC_SITE;charset=utf8', 'root', '');
        }
        catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
         return $bdd;
    
    }
    
}
