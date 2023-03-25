<?php

    require_once('Manager.php');
    class TestimonialManager extends Manager{

        public function getTestimonial(){
            $bdd     = $this->connection();
            $requete = $bdd->query('SELECT * FROM opinions');
    
            return $requete;
        }

        public function postTestimonial($note, $message){

            $bdd = $this->connection();

            $requete = $bdd->prepare('INSERT INTO opinions(note, content) VALUES(?, ?)');
            $result = $requete->execute([$note, $message]);
            
            return $result;
        }
    }
    