<?php

require "models/User.php";

class UserManager extends AbstractManager{

    public function __construct(){
        parent::__construct("localhost", "3306", "prenomnom_userbase_poo", "root", "");
    }

    public function findAll():array{
        $query = $this->db->prepare(
            "SELECT *
            FROM users"
        );
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        $usersClass = [];
        $tag=0;
        foreach($users as $user){
            $usersClass[]=new User($user["username"], $user["email"], $user["password"]);
            $usersClass[$tag]->setId($user["id"]);
            $tag++;
        }
        return $usersClass;
    }

    public function findOneUsername(string $username):? User{
        $query = $this->db->prepare(
            "SELECT *
            FROM users
            WHERE username = :username"
        );
        $parameters = [
            "username"=>$username
        ];
        $query->execute($parameters);
        if($query->rowCount() === 1){
            $user=$query->fetch(PDO::FETCH_ASSOC);
            $userClass = new User($user["username"], $user["email"], $user["password"]);
            $userClass->setId($user["id"]);
            return $userClass;
        }else{
            return null;
        }
    }

    public function create(User $user):void{
        $query = $this->db->prepare(
            "INSERT INTO
                users(
                    username,
                    email,
                    password
                )VALUES(
                    :username,
                    :email,
                    :password
                )"
        );
        $parameters = [
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => password_hash($user->getPassword(), PASSWORD_DEFAULT)
        ];
        $query->execute($parameters);
    }

}

?>