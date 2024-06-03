<?php

class Character{
    protected int $life;
    protected string $name;
    public function __construct()
    {
        
    }
    
    public function getLife(): int
    {
        return $this->life;
    }
    public function setLife(int $life): void
    {
        $this->life = $life;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function introduce():string{
        return "Bonjour je m'appelle $this->name";
    }
}

class Warrior extends Character{
    private int $energy;
    
    public function __construct($life = 10, $name = "warrior", $energy=10)
    {
        parent::__construct();
        $this->life = $life;
        $this->name = $name;
        $this->energy = $energy;
    }

    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }

    public function fullIntroduction():string{
        return $this->introduce() . "<br>vie : " . $this->getLife() . "<br> energie : " . $this->getEnergy();
    }
}

class Mage extends Character{
    private int $mana;
    public function __construct($life = 10, $name="mage", $mana=10)
    {
        parent::__construct();
        $this->life = $life;
        $this->name = $name;
        $this->mana = $mana;
    }

    public function getMana(): int
    {
        return $this->mana;
    }

    public function setMana(int $mana): void
    {
        $this->mana = $mana;
    }

    public function fullIntroduction():string{
        return $this->introduce() . "<br>vie : " . $this->getLife() . "<br> mana : " . $this->getMana();
    }
}

$gronk = new Warrior(15, "Gronk", 30);
$elowim = new Mage(12, "Elowin", 13);

echo $gronk->fullIntroduction();
echo "<br> <br>";
echo $elowim->fullIntroduction();

?>