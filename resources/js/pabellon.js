let imgBase = document.querySelector('#imgBase');
let titleBase = document.querySelector('#titleBase');
let descBase = document.querySelector('#descBase');
let item1 = document.querySelector("#item1");

let item2 = document.querySelector("#item2");
let item2Text = document.querySelector('#item2Text')


alert(item2Text.value)

item1.addEventListener("mouseenter", () => {
    imgBase.src = "./img/dauGroup1.png"
    titleBase.textContent = item2Text.value;
})

item2.addEventListener("mouseenter", () => {
    imgBase.src = "./img/dauGroup2.png"

})