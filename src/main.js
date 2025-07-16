import "./sass/index.scss";

const hamburger = document.querySelector(".header__hamburger");
const nav = document.querySelector(".nav");
const blur = document.querySelector(".blur");
const navClose = document.querySelector(".nav__close");
hamburger.addEventListener("click", () => {
  nav.classList.toggle("nav--visible");
  blur.classList.toggle("blur--visible");
});

navClose.addEventListener("click", () => {
  nav.classList.toggle("nav--visible");
  blur.classList.toggle("blur--visible");
});
