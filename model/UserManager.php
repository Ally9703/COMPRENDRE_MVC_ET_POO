<?php

    // UTILISER LA POOO
    class UserManager {

        private function connection(){
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=MVC_SITE;charset=utf8', 'root', '');
            }
            catch(Exception $e) {
                die('Erreur : '.$e->getMessage());
            }
            return $bdd;
        }

        public function getUsers(){
            
            $bdd     = $this->connection();
            $requete = $bdd->query('SELECT * FROM users');
    
            return $requete;
        }
        
    }
    