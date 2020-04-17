<?php
    class RecetteManager extends DbManager {
        public function __construct()
        {
            parent::__construct();
        }


        public function selectAll()
        {
            $recettes = [];
            $sql = 'SELECT * FROM raviole';
            foreach ($this->bdd->query($sql) as $row) {
                $recettes[] = new Recette($row['id'], $row['ingredient_principal'], $row['titre'], $row['recette'], $row['file']);
            }

            return $recettes;
        }


        public function insert(Recette $recette)
        {
            $id = $recette->getId();
            $ingredient_principal = $recette->getIngredientPrincipal();
            $titre = $recette->getTitre();
            $recettes = $recette->getRecette();
            $file = $recette->getFile();
            $requete = $this->bdd->prepare("INSERT INTO raviole (id,ingredient_principal, titre, recette, file) VALUES (?,?,?,?,?)");
            $requete->bindParam(1, $id);
            $requete->bindParam(2, $ingredient_principal);
            $requete->bindParam(3, $titre);
            $requete->bindParam(4, $recettes);
            $requete->bindParam(5, $file);
            $requete->execute();
            $recette->setId($this->bdd->lastInsertId());

        }

        public function delete($id)
        {
            $requete = $this->bdd->prepare("DELETE FROM raviole where id = ?");
            $requete->bindParam(1,$id);
            $requete->execute();
        }

        public function select($id)
        {
            $requete = $this->bdd->prepare("SELECT * FROM raviole WHERE id=?");
            $requete->bindParam(1, $id);
            $requete->execute();
            $res = $requete->fetch();
            $recette = new Recette($res['id'], $res['ingredient_principal'], $res['titre'], $res['recette'], $res['file']);

            return $recette;
        }

        public function update(Recette $recette)    // Mon update ne marche pas car j'ai appelé ma class recette et du coup j'ai eu plein de soucis a cause de ça.
                                                    // le formulaire marche bien je n'arrive juste pas à update une recette
        {
            $id = $recette->getId();
            $ingredient_principal = $recette->getIngredientPrincipal();
            $titre = $recette->getTitre();
            $recette = $recette->getRecette();
            $file = $recette->getFile();
            $requete = $this->bdd->prepare("UPDATE  raviole SET id =? , ingredient_principal = ?, titre = ?, recette = ?, file = ? WHERE id = ?");
            $requete->bindParam(1, $id);
            $requete->bindParam(2, $ingredient_principal);
            $requete->bindParam(3, $titre);
            $requete->bindParam(4, $recette);
            $requete->bindParam(5, $file);
            $requete->execute();
        }



    }