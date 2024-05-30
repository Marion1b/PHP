<?php

class User{
    public function __construct(private int $id, private string $name, private string $password){

    }

    public function getID():int{
        return $this->id;
    }

    public function setId(int $id) : void{
        $this->id = $id;
    }

    public function getName():string{
        return $this->name;
    }
    public function setName(string $name):void{
        $this->name = $name;
    }
    public function getPassword():string{
        return $this->password;
    }
    public function setPassword(string $password):void{
        $this->password=$password;
    }
}

?>