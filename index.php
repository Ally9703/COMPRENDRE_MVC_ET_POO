
<?php

    require('controller/controller.php');

    try{
        if(isset($_GET['page'])){

            if($_GET['page'] == 'accueil'){
                home();
            }
            else if ($_GET['page'] == 'avis'){

                    // Vérification de l'ajouter des avis à l'aide du formulaire
                if(isset($_POST['note']) && !empty(['message'])){
                    addTestimonials(htmlspecialchars($_POST['note']), htmlspecialchars($_POST['message']));
                }
                else{
                    opinions();
                }
              
            }
            
            else{
                throw new Exception("cette page n'existe plus ou a été supprimée");
            }  
        }
        
        else{
            home();
        }
            
    }
    catch(Exception $e){
        $error = $e->getMessage();
        require("view/errorView.php");
    }
    
    
    
    
    