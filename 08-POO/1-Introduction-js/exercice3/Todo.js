export class Taches{
    tache1;
    tache2;
    tache3;
    tache4;
    tache5;
    constructor(tache1="", tache2="", tache3="", tache4="", tache5=""){
        this.tache1 = tache1;
        this.tache2 = tache2;
        this.tache3 = tache3;
        this.tache4 = tache4;
        this.tache5 = tache5;
    }
    get tache1(){
        return this.tache1;
    }
    get tache2(){
        return this.tache2;
    }
    get tache3(){
        return this.tache3;
    }
    get tache4(){
        return this.tache4;
    }
    get tache5(){
        return this.tache5;
    }
    set tache1(tache1){
        this.tache1 = tache1;
    }
    set tache2(tache2){
        this.tache2 = tache2;
    }
    set tache3(tache3){
        this.tache3 = tache3;
    }
    set tache4(tache4){
        this.tache4 = tache4;
    }
    set tache5(tache5){
        this.tache5=tache5;
    }
}