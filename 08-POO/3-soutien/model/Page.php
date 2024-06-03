<?php

class Page{
        private ? int $id = null;
        public function __construct(
                private string $title,
                private string $content,
                private string $route
        )
        {

        }
        public function getId():int{
        return $this->id;
        }
        public function setId(int $id):void{
        $this->id=$id;
        }

        /**
         * Get the value of title
         */
        public function getTitle(): string
        {
                return $this->title;
        }

        /**
         * Set the value of title
         */
        public function setTitle(string $title): void
        {
                $this->title = $title;
        }

        /**
         * Get the value of content
         */
        public function getContent(): string
        {
                return $this->content;
        }

        /**
         * Set the value of content
         */
        public function setContent(string $content): void
        {
                $this->content = $content;
        }

        /**
         * Get the value of route
         */
        public function getRoute(): string
        {
                return $this->route;
        }

        /**
         * Set the value of route
         */
        public function setRoute(string $route): void
        {
                $this->route = $route;
        }

        public function render():void{
                $content = $this->content;
                require_once "../3-soutien/templates/layout.phtml";
        }
}

?>