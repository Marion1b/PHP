export class Character{
    #name;
    #healthPoints;
    constructor(name, healthPoints){
        this.#name = name;
        this.#healthPoints = healthPoints;
    }
    get name(){
        return this.#name;
    }
    get healthPoints(){
        return this.#healthPoints;
    }
    set name(name){
        this.#name=name;
    }
    set healthPoints(healthPoints){
        this.#healthPoints=healthPoints;
    }
}