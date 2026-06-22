let pdata = document.createElement("p");

pdata.id = "pdata";

let intervalo = setInterval(()=>{
    let date = new Date();
//              o apostofro é pra que o $ funcione
pdata.innerHTML=`Data e hora atual: ${date.toLocaleString()}`;
// usando DOM para o body adotar nossa variável
document.body.appendChild(pdata); 
}, 1000);

let butao = document.createElement("button");
butao.addEventListener("click");
document.innerHTML = "Parar atualização";

