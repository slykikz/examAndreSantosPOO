<?php
    require 'include.php';


    if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
        $recetteController = new DefaultController();
        $recetteController->home();
    }

    else if($_GET['controller'] === 'recette' && $_GET['action'] === 'addForm'){
        $RecetteController = new RecetteController();
        $RecetteController->addForm();
    }

    else if($_GET['controller'] === 'recette' && $_GET['action'] === 'addRecette'){
        $recetteController = new RecetteController();
        $recetteController->persistForm();
    }

    else if($_GET['controller'] === 'recette' && $_GET['action'] === 'delete' && isset($_GET['id'])){
        $recetteController = new RecetteController();
        $recetteController->delete($_GET['id']);
    }

    else if($_GET['controller'] === 'recette' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
        $recetteController = new RecetteController();
        $recetteController->updateForm($_GET['id']);
    }

    else if($_GET['controller'] === 'recette' && $_GET['action'] === 'updateRecette' && isset($_GET['id'])){
        $recetteController = new RecetteController();
        $recetteController->updateRecette($_GET['id']);
    }

    else if($_GET['controller'] === 'recette' && $_GET['action'] === 'detailForm' && isset($_GET['id'])){
        $recetteController = new RecetteController();
        $recetteController->detailForm($_GET['id']);
    }


    else {
        throw new Exception('La page demandée n\'existe pas', 404);
    }

?>
