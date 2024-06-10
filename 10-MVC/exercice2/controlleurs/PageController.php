<?php

class PageController{
    public function __construct()
    {
        
    }

    public function home(){
        $route="home";
        require "templates/layout.phtml";
    }

    public function espacePerso():void{
        $route = "espace-perso";
        require "templates/layout.phtml";
    }

    public function connexion():void{
        $route = "connexion";
        require "templates/layout.phtml";
    }

    public function checkConnexion():void{
        $route="check-connexion";
        require "templates/check-connexion.php";
    }

    public function inscription():void{
        $route = "inscription";
        require "templates/layout.phtml";
    }

    public function checkInscription():void{
        $route="check-inscription";
        require "templates/check-inscription.php";
    }

    public function notFound():void{
        $route = "404";
        require "templates/layout.phtml";
    }
}

?>