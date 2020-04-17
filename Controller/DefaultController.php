<?php

class DefaultController{

    public function home()
    {
        $recetteManager = new RecetteManager();
        $recette = $recetteManager->selectAll();
        require 'View/home_view.php';
    }
}