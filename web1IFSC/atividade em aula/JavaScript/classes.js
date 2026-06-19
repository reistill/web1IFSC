let nome_completo = "Maria" + " " + "Silva";
console.log(nome_completo);

nome_completo.toLocaleUpperCase();
console.log(nome_completo);

// split regex separa string de dois em dois caracteres aabbccdd, reverse para inverter a ordem da string, join para retirar os espaços
nomeCompleto = nome_completo.split("").reverse().join("");
console.log(nomeCompleto);

let min, max;

min = 90;
max = 100;

// vai gerar um número aleatório entre 0 e 1
random = Math.random();
console.log(random);

// gerar um número aleatório entre min e max
console.log(Math.random() * (max - min) + min);