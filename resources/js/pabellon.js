let imgBase = document.querySelector('#imgBase');
let titleBase = document.querySelector('#titleBase');
let descBase = document.querySelector('#descBase');
let item1 = document.querySelector("#item1");
let boton = document.querySelector('#btn');
let item2 = document.querySelector("#item2");
let item2Text = document.querySelector('#item2Text')

let item3 = document.querySelector("#item3");
let item3Text = document.querySelector('#item3Text')


let item4 = document.querySelector("#item4");
let item4Text = document.querySelector('#item4Text')





item1.addEventListener("mouseenter", () => {
    imgBase.src = "./img/dauGroup1.png"
    titleBase.textContent = item2Text.value;
    descBase.textContent = "La felicidad consiste en ENCONTRAR en quién CONFIAR. La mejor puerta es la que puedes dejar ABIERTAt";
    boton.href="/detail-gray"

})

item2.addEventListener("mouseenter", () => {
    imgBase.src = "./img/insignias/insignia6.png";
    titleBase.textContent = item2Text.value;
    descBase.textContent = "Dau Escuela de Vida, es un Centro de Formación Humano Existencial con sede en Lima Perú. Nuestra misión es brindar y, desarrollar espacios y servicios de apoyo a la comunidad a través de un servicio de relación acompañamiento individual y grupal con distintas modalidades el enfoque existencial humanista. ";
    boton.href="/detail-dau"

})
item3.addEventListener("mouseenter", () => {
    imgBase.src = "./img/insignias/insignia3.png";
    titleBase.textContent = item3Text.value;
    descBase.textContent = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining ";
    boton.href="/detail-cundinamarca"

})
item4.addEventListener("mouseenter", () => {
    imgBase.src = "./img/insignias/insignia4.png";
    titleBase.textContent = item4Text.value;
    descBase.textContent = "Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining ";
    boton.href="/detail-cundinamarca"

})