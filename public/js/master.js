/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/master.js ***!
  \********************************/
var btnAside = document.querySelector("#btn-toggle");
var aside = document.querySelector("#leftSidebar");
var body = document.querySelector("body");
var innAside = document.querySelector(".vertnav");
var btnActive = false;
btnAside.addEventListener("click", function () {
  if (!btnActive) {
    innAside.style.display = "none";
    body.classList.add("collapsed");
    btnActive = true;
  } else {
    innAside.style.display = "block";
    body.classList.remove("collapsed");
    btnActive = false;
  }
});
/******/ })()
;