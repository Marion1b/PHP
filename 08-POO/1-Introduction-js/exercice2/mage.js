import { Character } from "./character.js";

export class Mage extends Character{
    #manaPoints;
    constructor(name, healthPoints, manaPoints){
        super(name, healthPoints);
        this.#manaPoints = manaPoints;
    }
    get manaPoints(){
        return this.#manaPoints;
    }
    set manaPoints(manaPoints){
        this.#manaPoints=manaPoints;
    }
}