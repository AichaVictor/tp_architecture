<?php
require_once 'ConnexionBd.php';
require_once 'modele/domaine/Categorie.php';


class CategorieDao
{
    private $id;
    private $bdd;
    private $libelle;

    public function __construct()
    {
        $this->bdd = (new ConnexionBd)->getInstance();
    }

    public function getList()
    {
        $data = $this->bdd->query('SELECT * FROM Categorie');
        return $data->fetchAll(PDO::FETCH_CLASS, 'Categorie');
    }

    public function getById($id)
    {
        $data = $this->bdd->query('SELECT * FROM Categorie WHERE id = ', $id);
        return $data->fetch(PDO::FETCH_OBJ);
    }
}
