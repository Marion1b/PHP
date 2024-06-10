<?php

abstract class AbstractManager{
    protected $db; 
    public function __construct(
        protected string $host,
        protected string $port,
        protected string $dbname,
        protected string $user,
        protected string $password
    )
    {
        $this->db = new PDO("mysql:host=$host; port=$port; dbname=$dbname", $user, $password);
    }
}

?>