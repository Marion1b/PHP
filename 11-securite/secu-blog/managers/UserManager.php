<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class UserManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findByEmail(string $email):? User{
        $query = $this->db->prepare(
            "SELECT *
            FROM users
            WHERE email = :email"
        );
        $parameters = [
            "email"=>$email
        ];
        $query->execute($parameters);

        if($query->rowCount()===1){
            $user = $query->fetch(PDO::FETCH_ASSOC);
            $userClass = new User($user["username"], $user["email"], $user["password"], $user["role"], $user["created_at"]);
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
                    password,
                    role,
                    created_at)
                VALUES(
                    :username,
                    :email,
                    :password,
                    :role,
                    :created_at
                )");
        $parameters = [
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' =>password_hash($user->getPassword(), PASSWORD_DEFAULT),
            'role' => $user->getRole(),
            'created_at'=>date("Y-m-d H:i:s")
        ];
        $query->execute($parameters);
    }
}