//Toggle class active
const navbarNav = document.querySelector(".navbar-nav");
//ketika menu di klik
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

//Klik diluar sidebar untuk menghilangkan menu
const menu = document.querySelector("#menu");
document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

//slider
const carousel = document.querySelector(".carousel");
const columnWidth = document.querySelector(".column").clientWidth;

let currentIndex = 0;

const showHideIcons = () => {
  document.getElementById("left").style.display =
    currentIndex === 0 ? "none" : "block";
  document.getElementById("right").style.display =
    currentIndex === 2 ? "none" : "block";
};

document.getElementById("left").addEventListener("click", () => {
  currentIndex = Math.max(0, currentIndex - 1);
  carousel.scrollLeft = currentIndex * columnWidth;
  showHideIcons();
});

document.getElementById("right").addEventListener("click", () => {
  currentIndex = Math.min(2, currentIndex + 1);
  carousel.scrollLeft = currentIndex * columnWidth;
  showHideIcons();
});

carousel.addEventListener("scroll", () => {
  currentIndex = Math.round(carousel.scrollLeft / columnWidth);
  showHideIcons();
});