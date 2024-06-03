<?php

class User 
{
    protected string $email;
    protected string $password;

    public function __construct(){

    }

    public function login() : array {
        return ["login" => $this->email, "password" => $this->password];
    }
}

class Reader extends User
{
    private array $favoriteBooks = [];

    public function __construct(string $email, string $password){
        $this->email = $email;
        $this->password = $password;
    }

    public function addBookToFavorites(string $book): array {
        $this->favoriteBooks[] = $book;

        return $this->favoriteBooks;
    }

    public function removeBookFromFavorites(string $book): array {
        foreach($this->favoriteBooks as $key => $favoriteBook)
        {
            if($favoriteBook === $book)
            {
                unset($this->favoriteBooks[$key]);
            }
        }

        return $this->favoriteBooks;
    }  

    public function getFavoriteBooks(): array {
        return $this->favoriteBooks;
    }
}

$ZazVersionNightCore = new Reader ("zazversionnightcore@yahoo.fr", "zaz");

$ZazVersionNightCore->addBookToFavorites("le temps des tempêtes");
$ZazVersionNightCore->addBookToFavorites("Fugue américaine");
var_dump($ZazVersionNightCore->getFavoriteBooks());
$ZazVersionNightCore->removeBookFromFavorites("Fugue américaine");
var_dump($ZazVersionNightCore->getFavoriteBooks());
var_dump($ZazVersionNightCore->login());
?>