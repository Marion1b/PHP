<?php

class Router{
    public function __construct()
    {
        
    }

    public function handleRequest(array $get):void{
        if(isset($_GET["route"]) && $_GET["route"]==="a-propos"){
            $about = new PageController;
            $about->about();
        }else if(!isset($_GET["route"])){
            $home = new PageController;
            $home->home();
        }else{
            $notFound = new PageController;
            $notFound->notFound();
        }
    }
}

?>