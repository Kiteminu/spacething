const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})

cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})


const carrusel = document.querySelector(".carrusel-items");

let maxScrollLeft = carrusel.scrollWidth - carrusel.clientWidth;
let step = 1;
let intervalo = null;

const start = () => {
    intervalo = setInterval(function()  {
       carrusel.scrollLeft= carrusel.scrollLeft + step; 
       if(carrusel.scrollLeft === maxScrollLeft){
          step = step * -1;
       } else if(carrusel.scrollLeft === 0){
          step = step * -1;
       }
    }, 10);
};

const stop = () =>{
    clearInterval(intervalo);
};

carrusel.addEventListener('mouseover', () => {
    stop();
});

carrusel.addEventListener('mouseout', () => {
    start();
});

start();
