<?php

class Livre{
    private int $id;
    public function __construct(
        private string $titre,
        private string $auteur,
        private string $categorie,
        private int $sur_place,
        private int $en_rayon,
        private int $emprunt
    )
    {
        
    }
    
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitre(): string
    {
            return $this->titre;
    }

    public function setTitre(string $titre): void
    {
            $this->titre = $titre;

    }

    public function getAuteur(): string
    {
            return $this->auteur;
    }

    public function setAuteur(string $auteur): void
    {
            $this->auteur = $auteur;

    }

    public function getCat(): string
    {
            return $this->categorie;
    }

    public function setCat(string $cat): void
    {
            $this->categorie = $cat;

    }

    public function getSurPlace(): int
    {
            return $this->sur_place;
    }

    public function setSurPlace(int $sur_place): void
    {
            $this->sur_place = $sur_place;

    }

    public function getEnRayon(): int
    {
            return $this->en_rayon;
    }

    public function setEnRayon(int $en_rayon): void
    {
            $this->en_rayon = $en_rayon;

    }

    public function getEmprunt(): int
    {
            return $this->emprunt;
    }

    public function setEmprunt(int $emprunt): void
    {
            $this->emprunt = $emprunt;

    }

    public function toConsult():void{
        if($this->en_rayon === 1 && $this->sur_place === 0){
            $this->sur_place === 1;
            $this->en_rayon === 0;
        }
    }

    public function finishConsult():void{
        if($this->en_rayon === 0 && $this->sur_place === 1){
            $this->en_rayon === 1;
            $this->sur_place === 0;
        }
    }

    public function isBorrowable():bool{
        if($this->en_rayon === 1 && $this->sur_place ===0){
            return true;
        }else{
            return false;
        }
    }


}

?>