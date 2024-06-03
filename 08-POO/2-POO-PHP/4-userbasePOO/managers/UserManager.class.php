<?php

class UserManager{
    private array $users = [];
    private PDO $db;
    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;port=3306;dbname=prenomnom_userbase_poo;charset=utf8",
        "root",
        "");
    }

    /**
     * Get the value of users
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * Set the value of users
     */
    public function setUsers(array $users): void
    {
        $this->users = $users;
    }

    public function loadUsers():void{
        $query=$this->db->prepare(
            'SELECT *
            FROM users'
        );
        $query->execute();
    }
    public function saveUser(string $user):void{

    }
    public function deleteUser(string $user):void{

    }
}

?>