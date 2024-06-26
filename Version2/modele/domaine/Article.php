<?php
class Article
{

    private $id;
    private $titre;
    private $contenu;
    private $categorie;
    private $dateCreation;
    private $dateModification;

    function __construct()
    {
    }

    //getters
    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function getDateModification()
    {
        return $this->dateModification;
    }

    //setters

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;
    }
}
