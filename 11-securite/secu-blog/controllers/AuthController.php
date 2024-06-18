<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class AuthController extends AbstractController
{
    public function login() : void
    {
        $this->render("login", []);
    }

    public function checkLogin() : void
    {
        $email = false;
        if(isset($_POST["email"])){
            if(!empty($_POST["email"])){
                $email = true;
            }
        }

        $password = false;
        if(isset($_POST["password"])){
            if(!empty($_POST["password"])){
                $password = true;
            }
        }

        if($email === true && $password === true){
            $safeEmail = htmlspecialchars($_POST["email"]);
            $safePassword = htmlspecialchars($_POST["password"]);
            $um = new UserManager;
            $user = $um->findByEmail($safeEmail);
            if($user !==null){
                $hashFound = $user->getPassword();
                $isPasswordCorrect = password_verify($safePassword, $hashFound);
                if($isPasswordCorrect === true){
                    $_SESSION["user"] = $user;
                    $this->redirect("index.php");
                }else{
                    // $this->redirect("index.php?route=login");
                    var_dump($safeEmail ." ".$safePassword);
                    var_dump($hashFound);
                    var_dump($isPasswordCorrect);
                }
            }else{
                $this->redirect("index.php?route=login");
            }
        }else{
            $this->redirect("index.php?route=login");
        }
        
    }

    public function register() : void
    {
        $this->render("register", []);
    }

    public function checkRegister() : void
    {
        $username = false;
        if(isset($_POST["username"])){
            if(!empty($_POST["username"])){
                $username = true;
            }
        }

        $email = false;
        if(isset($_POST["email"])){
            if(!empty($_POST["email"])){
                $email = true;
            }
        }

        $password = false;
        if(isset($_POST["password"]) && isset($_POST["confirm-password"])){
            if(!empty($_POST["password"] && !empty($_POST["confirm-password"]))){
                $regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
                if(preg_match($regex, $_POST["password"])){
                    if($_POST["password"] === $_POST["confirm-password"]){
                        $password=true;
                    }
                }
            }
        }

        if($username === true && $email === true && $password === true){
            $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $today = date("Y-m-d H:i:s");
            $safeUsername = htmlspecialchars($_POST["username"]);
            $safeEmail = htmlspecialchars($_POST["email"]);
            $newUser = new User($safeUsername, $safeEmail, $hash, "USER", $today);
            $um = new UserManager;
            $um->create($newUser);
            $user = $um->findByEmail($safeEmail);
            $_SESSION["user"]=$user;
            $this->redirect("index.php");
        }else{
            $this->redirect("index.php?route=register");
        }
    }

    public function logout() : void
    {
        session_destroy();

        $this->redirect("index.php");
    }
}