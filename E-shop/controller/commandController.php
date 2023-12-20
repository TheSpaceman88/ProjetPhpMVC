<?php
include_once('model/commandModel.php');

class commandController
{
    private $model;
    public function __construct()
    {
        $this->model = new CommandModel;
    }

    /**
     * COMMAND
     */
    public function getFormCommand()
    {
        include_once('controller/produitController.php');
        $produit = new ProduitController;
        $produit->getProduitsCommand();
    }


    public function setCommand()
    {
        if (isset($_POST['LastName'])) {
            $lastName = $_POST['LastName'];
            $firstName = $_POST['FirstName'];
            $email = $_POST['Email'];
            $message = $_POST['Message'];
            $produit = $_POST['produit'];
            if ($this->model->setCommand($lastName,$firstName,$email,$message,$produit)) {
                echo  "la commande sera envoyé dans la base de données et sera stocké aucune action apres";
                echo "Inscription KO";
                $this->getFormCommand();
            }


        } else {
            $this->getFormCommand();
        }


    }
}