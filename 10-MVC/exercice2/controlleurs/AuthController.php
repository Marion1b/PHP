<?php

class AuthController{
    public function __construct()
    {
        
    }

    public function logIn(array $post):void{
        $user = new UserManager;
        $username="";
        if(isset($post["username"] )){
            $usernameFind = $user->findOneUsername($post["username"]);
            if($usernameFind === "null"){
                echo "You haven't been find in our database, please try again";
            }else{
                $username = $usernameFind->getUsername();
            }
        }else{
            echo "please enter a username";
        }

        if(isset($post["password"])){
            $password = $post["password"];
            $passwordFind = $user->findOneUsername($username);
            $hash = $passwordFind->getPassword();
            $isPasswordCorrect = password_verify($password, $hash);
            if($isPasswordCorrect === false){
                echo "your password is wrong, try again";
            }else{
                $_SESSION["username"] = $username;
                $pc = new PageController;
                $pc->espacePerso();
            }
        }
    }

    public function signUp(array $post):void{
        $newUser = new User($post["username"], $post["email"], $post["password"]);
        $newUserInsert = new UserManager();
        $newUserInsert->create($newUser);
    }
}

?>