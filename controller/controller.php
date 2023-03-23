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