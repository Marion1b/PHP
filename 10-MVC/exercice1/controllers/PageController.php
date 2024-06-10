<?php

class PageController{
    public function __construct()
    {
        
    }

    public function home():void{
        $route = "home";
        require "../10-MVC/templates/layout.phtml";
    }

    public function about():void{
        $route = "about";
        require "../10-MVC/templates/layout.phtml";
    }

    public function notFound(){
        $route = "404";
        require "../10-MVC/templates/layout.phtml";
    }
}

?>