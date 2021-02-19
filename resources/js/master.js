let btnAside = document.querySelector("#btn-toggle")
let aside = document.querySelector("#leftSidebar");
let body = document.querySelector("body");
let innAside = document.querySelector(".vertnav")
let btnActive = false;
btnAside.addEventListener("click", () => {

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