<?php
require_once 'modele/dao/ArticleDao.php';
require_once 'modele/dao/CategorieDao.php';
require_once 'modele/dao/ConnexionBd.php';

class Controller
{
    function __construct()
    {
    }

    public function showAccueil()
    {
        $articleDao = new ArticleDao();
        $categorieDao = new CategorieDao();
        $articles = $articleDao->getList();
        $categories = $categorieDao->getList();
        require_once 'vue/accueil.php';
    }

    public function ShowArticle($id)
    {
        $articleDao = new ArticleDao();
        $categorieDao = new CategorieDao();
        $articles = $articleDao->getById($id);
        $categories = $categorieDao->getList();
        require_once 'vue/article.php';
    }

    public function ShowCategorie($id)
    {
        $articleDao = new ArticleDao();
        $categorieDao = new CategorieDao();
        $articles = $articleDao->getByCategoryId($id);
        $categories = $categorieDao->getList();
        //require_once 'vue/articleByCategorie.php';
        require_once 'vue/accueil.php';
    }

    public function showErrorPage()
    {
    }
}
