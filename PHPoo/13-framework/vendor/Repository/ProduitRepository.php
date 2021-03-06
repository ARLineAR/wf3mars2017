<?php

namespace Repository;

use Manager\EntityRepository; // /!\ Très important car l'héritage ne permet pas de charger le fichier
use PDO; 


class ProduitRepository extends EntityRepository{

    // Tout le code de EntityRepository est ici !!

    public function getAllProduits(){
        return $this -> findAll();
        
    }

    public function getProduitById($id){
        return $this -> find($id);
    }

    public function deleteProduitById($id){
        return $this -> delete($id);
    }

    public function registerProduit($infos){
        return $this -> register($infos);
    }

    // requêtes s^écifiques à cette entité Produit : $

    public function getAllCategories(){
        $requete = "SELECT DISTINCT categorie FROM produit";
        $resultat = $this -> getDb() -> query($requete);

        $categories = $resultat -> fetchAll(PDO::FETCH_ASSOC);

        if (!$categories){
            return FALSE;
        }else{
            return $categories;
        }
    }

    public function getAllProduitsByCategorie($categorie){ // prepare car données sensibles
        $requete = "SELECT * FROM produit WHERE categorie = :categorie";
        $resultat = $this -> getDb() -> prepare($requete);
        $resultat -> bindParam(':categorie', $categorie, PDO::PARAM_STR);
        $resultat -> execute();

        $produitCategorie = $resultat -> fetchAll(PDO::FETCH_ASSOC);
        
        if (!$produitCategorie){
            return FALSE;
        }else{
            return $produitCategorie;
        }

        
    }

    public function getAllSuggestions($categorie, $id){
        $requete = "SELECT * FROM produit WHERE categorie = '$categorie' AND id_produit != $id"; // '$cateforie' => string & $id => integer
        $resultat = $this -> getDb() -> query($requete);

        $suggestion = $resultat -> fetchAll(PDO::FETCH_ASSOC);

        if (!$suggestion){
            return FALSE;
        }else{
            return $suggestion;
        }
    }
}