<?php

$page = $_GET['page'];

switch ($page) {
    case 'base':
        include('view/base.php');
        break;

    case 'home':
        include('view/home.php');
        break;

    case 'produit':
        include_once('controller/produitController.php');
        $Produits = new ProduitController;
        $Produits->getProduitsProduits();
        break;

    case 'command':
        include_once('controller/commandController.php');
        $user = new commandController;
        $user->setCommand();
        include_once('view\command.php');
        break;

    default :
        include('view/notfound.php');
        break;

    }


/*if ($page == 'accueil') {
    include('view/accueil.php');
} elseif ($page == 'contact') {
    include('view/contact.php');
} elseif ($page == 'blabla') {
    include('view/contact.php');
} elseif ($page == 'getContact') {
    include('view/getContact.php');
} elseif ($page == 'nutriscore') {
    include('controller/nutriscoreController.php');
} elseif ($page == 'articles') {
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticles();
} elseif ($page == 'inscription') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->setUser();
} elseif ($page == 'authentification') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->getAuthentification();
} elseif ($page == 'exit') {
    $_SESSION=array();
}
else {
    echo 'page introuvable';
}
*/