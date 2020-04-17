<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
    <div class="container">
        <h1>Ajouter une nouvelle recette</h1>

        <a href="../examPhpAndreSantos/index.php?controller=default&action=home">
            <button style="margin-bottom:10px;" class="btn btn-danger">Revenir en arrière</button>
        </a>

        <form method="post" action="index.php?controller=recette&action=addRecette" enctype="multipart/form-data">
            <label>Titre</label>
            <input name="titre" class="form-control" placeholder="Nom de la recette" required>

            <label>Ingredient Principal</label>
            <input name="ingredient_principal" class="form-control" placeholder="Ingredient Principal" required>

            <label>Recette</label>
            <textarea name="recette" class="form-control" placeholder="Expliquez la recette"></textarea>

            <label>Image</label>
            <input type="file" name="image">

            <input class="btn btn-success" type="submit" value="valider">
        </form>
    </div>
    <?php
    include 'Parts/scripts.html'
    ?>
</body>