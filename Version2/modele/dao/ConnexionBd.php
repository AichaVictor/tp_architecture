<?php

class ConnexionBd
{

    public $connexion;

    public function __construct()
    {
        $this->connexion = new PDO('mysql:host=localhost;dbname=mglsi_news', 'root', '');
    }

    public function getInstance()
    {
        return $this->connexion;
    }
}
