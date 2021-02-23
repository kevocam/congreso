let button = document.querySelector("#button")
let slider1 = document.querySelector('#slider1')
let slider2 = document.querySelector('#slider2')


const config ={
    type: 'carrousel',
  startAt: 0,
  perView: 3,
  
}
/* new Glide('.glide').mount() */

new Glide('.glide',config).mount();