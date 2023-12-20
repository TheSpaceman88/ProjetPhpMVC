<?php
include_once('model\produitModel.php');

class produitController

{

    private $model;
    public function __construct()
    {
        $this->model = new ProduitsModel;
    }

    public function getProduitsProduits()
    {
        $produits=$this->model->getProduits();
        include_once('view\produit.php');
       
    }

    public function getProduitsCommand()
    {
        $produits=$this->model->getProduits();
        include_once('view\command.php');
       
    }

}