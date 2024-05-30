<?php

    class Connexion{
        private PDO $db;
        public function __construct(
            private string $host="localhost",
            private string $port = "3306",
            private string $dbname = "",
            private string $user="root",
            private string $password = ""
        ){
            $connexionString = "mysql:host=$host;port=$port;dbname=$dbname";
            $this->db = new PDO(
                $connexionString,
                $user,
                $password
            );
        }
        public function getHost():string{
            return $this->host;
        }
        public function setHost(string $host):void{
            $this->host = $host;
        }
        public function getPort():string{
            return $this->port;
        }
        public function setPort(string $port):void{
            $this->port = $port;
        }
        public function getDbName():string{
            return $this->dbname;
        }
        public function setDbName(string $dbName):void{
            $this->dbname = $dbName;
        }
        public function getUser():string{
            return $this->user;
        }
        public function setUser(string $user):void{
            $this->user = $user;
        }
        public function getPassword():string{
            return $this->password;
        }
        public function setPassword(string $password):void{
            $this->password = $password;
        }
        public function getPDO():PDO{
            return $this->db;
        }
    }
?>