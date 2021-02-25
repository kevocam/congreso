let button = document.querySelector("#button")
let slider1 = document.querySelector('#slider1')
let slider2 = document.querySelector('#slider2')
let slider3 = document.querySelector('#heroSlider');

const config = {
    type: 'carrousel',
    startAt: 0,
    perView: 3,

}
const config2 = {
    type: 'carousel',
    startAt: 0,
    perView: 4,

}
const config3 = {
        type: 'slider',
        startAt: 0,
        perView: 1,

    }
    /* new Glide('.glide').mount() */
/* import Glide, { Images } from '@glidejs/glide/dist/glide.modular.esm';
 */
new Glide('.glide', config).mount();
new Glide('#glideHome', config2).mount();
new Glide('#heroSlider', config3).mount();