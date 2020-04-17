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

        <h1>Détail de la recette avec l'ID <?php echo $recette->getId();?> et comme titre : <?php echo $recette->getTitre();?></h1>

        <br>
            <div class="container text-center">
                <h1>ID</h1>
                <h4><?php echo $recette->getId()?></h4>
            </div>

            <div class="container text-center">
                <h1>Ingredient Principal</h1>
                <h4><?php echo $recette->getIngredientPrincipal()?></h4>
            </div>

            <div class="container text-center">
                <h1>Titre</h1>
                <h4><?php echo $recette->getTitre()?></h4>
            </div>

            <div class="container text-center">
                <h1>Recette</h1>
                <h4><?php echo $recette->getRecette()?></h4>
            </div>
        <br>

    </div>

    <?php
    include 'Parts/scripts.html'
    ?>
</body>