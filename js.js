let swiper = new Swiper(".home-slider", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
let menu = document.querySelector("#menu-btn");
let  navbar = document.querySelector(".header .navbar");


menu.addEventListener("click",() => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
})

