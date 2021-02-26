/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/pabellon.js ***!
  \**********************************/
var imgBase = document.querySelector('#imgBase');
var titleBase = document.querySelector('#titleBase');
var descBase = document.querySelector('#descBase');
var item1 = document.querySelector("#item1");
var item2 = document.querySelector("#item2");
var item2Text = document.querySelector('#item2Text');
item1.addEventListener("mouseenter", function () {
  imgBase.src = "./img/dauGroup1.png";
  titleBase.textContent = item2Text.value;
});
item2.addEventListener("mouseenter", function () {
  imgBase.src = "./img/dauGroup2.png";
});
/******/ })()
;