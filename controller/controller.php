<?php

    require('model/usersModel.php');
    require('model/opinionModel.php');

    function home(){
        $requete = getUsers();

        require('view/listUsersView.php');
    }


    function opinions(){
        $requete = getOpinions();

        require('view/listOpinionsView.php');
    }