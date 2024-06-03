<?php

    class PageManager{
        private PDO $db;
        public function __construct()
        {
            $this->db=new PDO("mysql:host=localhost;port=3306;dbname=prenomnom_poo_soutien",
            "root",
            "");
        }
        public function getAllPages():array{
            $query = $this->db->prepare(
                'SELECT
                    title,
                    route
                FROM
                    pages');
            $query->execute();
            $all_pages=$query->fetchAll(PDO::FETCH_ASSOC);
            return $all_pages;
        }
        public function getPageByRoute(string $route):array{
            $query = $this->db->prepare(
                "SELECT
                    title,
                    content
                FROM
                    pages
                WHERE
                    route = :route");
            $parameters = [
                "route"=>$route
            ];
            $query->execute($parameters);
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getAllRoutes():array{
            $query = $this->db->prepare(
                "SELECT
                    route
                FROM
                    pages"
            );
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>