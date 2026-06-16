
let hello = console.log("Hello, world!");

let n1 = 20;
let n2 = 20.50;
console.log(typeof(n1));
console.log(typeof(n2)); 

console.log(typeof(hello));

//objetos
let juca = {nome: "juca silva", idade: 19};
let juca2 = {nome: "silvano", idade: 45};
let juca3 = {nome: "silvio nano", idade: 25};
console.log(typeof(juca));
console.log(juca);
// array
let vetor = [1, 2, 3, 4, 5];
let vetor2 = [juca, juca2, juca3];

console.log(vetor2);

/*
diferença entre var, let, const
const não muda durante a execução
var é global
let é por escopo
*/

//função anônima
// só usa na hora e nem precisa declarar nome
()=>{
    console.log("Sou uma função anônima");
}

//Classes JS: Number, Math, Strings, JSON, Array, Date 