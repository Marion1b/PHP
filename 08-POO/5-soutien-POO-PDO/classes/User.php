<?php

class User{
    private int $id;
    public function __construct(
        private string $titre,
        private string $nom,
        private string $prenom,
        private int $emprunts
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

    public function getNom(): string
    {
            return $this->nom;
    }

    public function setNom(string $nom): void
    {
            $this->nom = $nom;

    }

    public function getPrenom(): string
    {
            return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
            $this->prenom = $prenom;

    }

    public function getEmprunts(): int
    {
            return $this->emprunts;
    }

    public function setEmprunts(int $emprunts): void
    {
            $this->emprunts = $emprunts;

    }
}

?>