<?php


    class RecetteController {
        public function addForm()
        {
            require 'View/insert_form.php';
        }

        public function persistForm()
        {
            $fileUrl = null;
            $allowedExtension = ['image/png','image/jpeg','file/gif'];
            if(in_array($_FILES['file']['type'],$allowedExtension)){
                if($_FILES['file']['size'] < 80000000){
                    $extension = explode('/', $_FILES['file']['type'])[1];
                    $fileUrl = uniqid().'.'.$extension;
                    move_uploaded_file($_FILES['file']['tmp_name'],'assets/img/'.$fileUrl);
                }
            }


            $recette = new Recette(null, $_POST['ingredient_principal'], $_POST['titre'], $_POST['recette'], $fileUrl);
            $recetteManager = new RecetteManager();
            $recetteManager->insert($recette);
            header('Location: /examPhpAndreSantos/index.php?controller=default&action=home');
        }

        public function delete($id)
        {
            $recetteManager = new RecetteManager();
            $recetteManager->delete($id);
            header('Location: /examPhpAndreSantos/index.php?controller=default&action=home');
        }


        public function updateForm($id)
        {
            $recetteManager = new RecetteManager();
            $recette = $recetteManager->select($id);

            require 'View/update_form.php';
        }

        public function updateRecette($id)
        {
            $fileUrl = null;
            $recetteManager = new RecetteManager();
            $recette = $recetteManager->select($id);
            $recette = new Recette($id, $_POST['ingredient_principal'], $_POST['titre'], $_POST['recette'], $fileUrl);
            $recetteManager->update($recette);

            header('Location: /examPhpAndreSantos/index.php?controller=default&action=home');
        }

        public function detailForm($id)
        {
            $recetteManager = new RecetteManager();
            $recette = $recetteManager->select($id);

            require 'View/detail_form.php';
        }


    }