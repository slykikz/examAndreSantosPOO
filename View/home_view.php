<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>


    <div class="container">

        <a href="../examPhpAndreSantos/index.php?controller=recette&action=addForm">
            <button style="margin-bottom:10px;" class="btn btn-danger">Ajouter une nouvelle Recette</button>
        </a>
        <br>

        <h1>Bienvenue sur mon site de ravioles</h1>


        <table class="table">
            <thead>
            <td>Id</td>
            <td>Ingredient Principal</td>
            <td>Titre</td>
            <td>Recette</td>
            <td>File</td>
            <td>Action</td>
            </thead>

            <tbody>
            <?php

            foreach ($recette as $rec) {
                ?>
                <tr>
                    <td><?php echo $rec->getId()?></td>
                    <td><?php echo $rec->getIngredientPrincipal()?></td>
                    <td><?php echo $rec->getTitre()?></td>
                    <td><?php echo $rec->getRecette()?></td>
                    <td><img style="max-width: 100px;" src="<?php echo('assets/img/'.$rec->getFile());?>"</td>
                    <td>
                        <a href="../examPhpAndreSantos/index.php?controller=recette&action=delete&id=<?php echo $rec->getId()?>">Supprimer</a>
                        <a href="../examPhpAndreSantos/index.php?controller=recette&action=updateForm&id=<?php echo $rec->getId()?>">Modifier</a>
                        <a href="../examPhpAndreSantos/index.php?controller=recette&action=detailForm&id=<?php echo $rec->getId()?>">Détail</a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <?php
    include 'Parts/scripts.html'
    ?>
</body>
</html>