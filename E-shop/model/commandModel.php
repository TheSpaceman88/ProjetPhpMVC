<?php
include_once('bdd.php');

class CommandModel
{

    private $bdd;

    public function __construct()
    {
        $this->bdd=Bdd::connexion();
    }

    public function getCommand()
    {
        return $this->bdd->query("SELECT * FROM commands")->fetchAll(PDO::FETCH_ASSOC);

    }

    public function setCommand($lastName,$firstName,$email,$message,$produit)
    {

        $setCommand=$this->bdd->prepare("INSERT INTO commands(LastName,FirstName,Email,Message,produit) VALUES(?,?,?,?,?)");
        return $setCommand->execute([$lastName,$firstName,$email,$message,$produit]);
        
    }


}


 