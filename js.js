console.log("okm");
let menu = document.querySelector("#menu-btn");
let  navbar = document.querySelector(".header .navbar");
console.log("okm");
menu.addEventListener("click",() => {
    console.log("ok");
    menu.classList.toggle("fa-times");
    navbar.classList.toggle("active");
})