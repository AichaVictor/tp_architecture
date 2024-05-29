<?php

class Categorie
{
    private $id;
    private $libelle;

    function __construct()
    {
    }

    //getters
    public function getId()
    {
        return $this->id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    //setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
}
