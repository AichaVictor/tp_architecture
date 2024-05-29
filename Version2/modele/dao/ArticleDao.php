<?php
require_once 'ConnexionBd.php';
require_once 'modele/domaine/Article.php';

class ArticleDao
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = (new ConnexionBd)->getInstance();
    }
    public function getList()
    {
        $data = $this->bdd->query('SELECT * FROM Article');
        return $data->fetchAll(PDO::FETCH_CLASS, 'Article');
    }

    public function getById($id)
    {
        $data = $this->bdd->query('SELECT * FROM Article WHERE id = ', $id);
        return $data->fetch(PDO::FETCH_OBJ);
    }

    public function getByCategoryId($id)
    {
        $data = $this->bdd->prepare('SELECT * FROM Article WHERE categorie = :id');
        $data->bindParam(':id', $id, PDO::PARAM_INT);
        $data->execute();
        return $data->fetchAll(PDO::FETCH_CLASS, 'Article');
    }
}
