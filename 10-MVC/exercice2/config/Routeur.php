<?php

class Routeur{
    public function __construct()
    {
        
    }

    public function handleRequest(array $get):void{
        $pc = new PageController();
        if(isset($get["route"]) && $get["route"]==="connexion"){
            $pc->connexion();
        }else if(isset($get["route"]) && $get["route"]==="check-connexion"){
            $pc->checkConnexion();
        }else if(isset($get["route"]) && $get["route"] === "inscription"){
            $pc->inscription();
        }else if(isset($get["route"]) && $get["route"] === "check-inscription"){
            $pc->checkInscription();
        }else if(isset($get["route"]) && $get["route"]==="espace-perso"){

        }else if(!isset($get["route"])){
            $pc->home();
        }else{
            $pc->notFound();
        }
    }
}

?>