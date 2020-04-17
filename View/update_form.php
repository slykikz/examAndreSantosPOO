<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
    <div class="container-fluid">
        <a href="../examPhpAndreSantos/index.php?controller=default&action=home">
            <button style="margin-bottom:10px;" class="btn btn-success">Revenir en arrière</button>
        </a>

        <h1>Mise à jour de la recette avec l'ID <?php echo $recette->getId();?> et comme titre : <?php echo $recette->getTitre();?></h1>


        <form method="post" action="index.php?controller=recette&action=updateRecette&id=<?php echo $recette->getId()?>">

            <label>ID</label>
            <input name="id" value="<?php echo $recette->getId()?>" class="form-control">

            <label>Ingredient Principal</label>
            <input name="ingredient_principal" value="<?php echo $recette->getIngredientPrincipal()?>" class="form-control">

            <label>Titre</label>
            <input name="titre" value="<?php echo $recette->getTitre()?>" class="form-control">

            <label>Recette</label>
            <input name="recette" value="<?php echo $recette->getRecette()?>" class="form-control">

            <label>Image</label>
            <input type="file" name="image">

            <br><br>

            <input class="btn btn-success" type="submit" value="valider">
        </form>
    </div>
    <?php
    include 'Parts/scripts.html'
    ?>
</body>