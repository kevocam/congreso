let button = document.querySelector("#button")
let slider1 = document.querySelector('#slider1')
let slider2 = document.querySelector('#slider2')
let slider3 = document.querySelector('#heroSlider');

const config = {
    type: 'carousel',
    startAt: 0,
    perView: 3,

}
const config2 = {
    type: 'carousel',
    startAt: 0,
    perView: 4,

}
const config3 = {
        type: 'carousel',
        startAt: 1,
        perView: 1,
        autoplay: 3500, 
        animationDuration:2000,
    }
    
new Glide('.glide', config).mount(); 
new Glide('#glideHome', config2).mount();
new Glide('#heroSlider', config3).mount(); 
 

 let dropdownMenu = document.querySelector("#dropdownMain");
let dropdown = document.querySelector('.dropdownContent')
let iconDropdown = document.querySelector('.icon-tabler-arrow-down');

 dropdownMenu.addEventListener('click', () => {
   
    if (dropdown.classList.contains('dropdownClose')) {
        dropdown.classList.remove('dropdownClose')
        iconDropdown.style.transform="rotate(180deg)";
    } else {
        dropdown.classList.add('dropdownClose')    
        iconDropdown.style.transform="rotate(0deg)";
    }



 })
