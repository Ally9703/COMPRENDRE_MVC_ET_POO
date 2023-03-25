<?php

    require_once('model/UserManager.php');
    require_once('model/TestimonialManager.php');

    function home(){
        $userManager = new UserManager();
        $requete = $userManager->getUsers();

        require('view/listUsersView.php');
    }


    function opinions(){
        
        $opinionManager = new TestimonialManager();
        $requete = $opinionManager->getTestimonial();

        require('view/listTestimonialsView.php');
    }

    function addTestimonials($note, $messsage){
        $testimonialManager = new TestimonialManager();

        $result = $testimonialManager->postTestimonial($note, $messsage);

        if($result === false){
            throw new Exception("Impossible d'ajouter votre avis pour le moment"); 
        }
        else{
            header('location: index.php?page=avis');
            exit();
        }
    }