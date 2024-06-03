import {Taches} from './Todo.js';

window.addEventListener('DOMContentLoaded', function(){
    let taches = new Taches();
    const taskInput = document.querySelector("#tache");
    const addButton = document.querySelector("button");
    const ul = document.querySelector("ul");
    addButton.addEventListener('click', (e)=>{
        e.preventDefault();
        if(taches.tache5.length !== 0){
            alert('Attention nombre de tâche limité à 5');
        }
        for(let prop in taches){
            if(taches[prop].length === 0){
                taches[prop] = taskInput.value;
                const newLi = document.createElement('li');
                newLi.innerText = taches[prop];
                ul.appendChild(newLi);
                console.log(taches[prop]);
                break;
            }
        }
    })
})