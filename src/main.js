import "./sass/index.scss"

const hamburger = document.querySelector(".header__hamburger")
const nav = document.querySelector(".nav")
hamburger.addEventListener("click", () => {
  nav.classList.toggle("nav--visible")
})