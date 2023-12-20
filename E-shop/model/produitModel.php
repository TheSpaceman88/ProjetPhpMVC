<?php
include_once('bdd.php');



class ProduitsModel
{
    private $bdd;

    public function __construct()
    {
        try {
            $this->bdd = Bdd::connexion();
        } catch (PDOException $e) {
            // Handle the connection error appropriately
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getProduits()
    {
        try {
            $query = $this->bdd->query("SELECT * FROM produit");
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Handle the query error appropriately
            die("Query failed: " . $e->getMessage());
        }
    }

    public function getProduitsById($id)
    {
        try {
            $query = $this->bdd->query("SELECT * FROM produit WHERE produitId=$id");
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Handle the query error appropriately
            die("Query failed: " . $e->getMessage());
        }
    }
}
