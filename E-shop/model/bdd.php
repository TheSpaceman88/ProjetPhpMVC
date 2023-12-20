<?php

class Bdd
{
    public static function connexion()
    {
        try {
            return new PDO("mysql:host=51.158.59.186;port=14301;dbname=eshop", "phppex", "Supermotdepasse!42");
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}

$bdd = Bdd::connexion();




