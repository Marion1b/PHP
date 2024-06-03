<?php

    require_once "../3-soutien/managers/PageManagers.php";

    class Routing{
        private PageManager $page_manager;
        public function __construct()
        {
        }
        public function dispatch(string $route):void{
            $this->page_manager = new PageManager();
            $all_routes = $this->page_manager->getAllRoutes();
            foreach($all_routes as $solo_route){
                if($route === $solo_route["route"]){
                    $title = $this->page_manager->getPageByRoute($route)[0]["title"];
                    $content = $this->page_manager->getPageByRoute($route)[0]["content"];
                    $page = new Page($title, $content, $route);
                    $page->render();
                } 
            }
        }
    }

?>