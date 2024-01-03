const bannerElement = document.querySelector(".banner"); // Sélection de l'élément de la bannière avec document.querySelector(".banner") dans le html

// Parallax Effect banner bg
// écoute de l'event de défilement (scroll) sur la fenêtre (window)
window.addEventListener("scroll", () => {
  let offset = window.pageYOffset; // À chaque défilement, la fonction anonyme associée à l'event calcule le décalage de défilement vertical (offset) entre le logo et le bg
  bannerElement.style.backgroundPositionY = offset * 0.7 + "px"; // et ajuste la position de l'arrière-plan de la bannière en fonction de cet offset, pour avoir un effet de parallaxe.
});

// Rotation effect on scroll
// écoute de l'event de défilement (scroll) sur la fenêtre (window)
window.addEventListener("scroll", () => {
  // change --flower-rotation-time CSS variable
  document.documentElement.style.setProperty("--flower-rotation-time", "2s"); // on accélère au scroll le temps de rotation des fleurs
});

window.addEventListener("scrollend", () => {
  // change --flower-rotation-time CSS variable
  document.documentElement.style.setProperty("--flower-rotation-time", "9s"); // on ralentit à la fin du scroll, le temps de rotation des fleurs
});

// Cloud Scroll parallax
// Sélection des nuages avec document.querySelector("") dans le html
let bigCloud = document.querySelector(".bigCloud");
let littleCloud = document.querySelector(".littleCloud");

// écoute de l'event de défilement (scroll) sur la fenêtre (window)
window.addEventListener("scroll", () => {
  //console.log(window.pageYOffset);
  let section = document.getElementById("place"); // Sélection de l'élément avec document.getElementById("") dans le html
  let bannerPosition = section.getBoundingClientRect(); // getBoundingClientRect renvoie un objet avec les propriétés top, bottom, left et right

  // En fonction de la partie visible de la section, les nuages (bigCloud et littleCloud)
  // ajustent leur position horizontale (right) pour créer un effet de parallaxe lors du défilement.

  // log quand l'element est visible
  // si
  let heightOfSectionVisible;
  let percentageOfSectionVisible;

  if (
    bannerPosition.top < window.innerHeight &&
    bannerPosition.bottom > window.innerHeight
  )
    heightOfSectionVisible = window.innerHeight - bannerPosition.top;
  percentageOfSectionVisible = heightOfSectionVisible / section.offsetHeight;
  bigCloud.style.right = percentageOfSectionVisible * 300 + "px";
  littleCloud.style.right = percentageOfSectionVisible * 550 + "px";
});

// burger menu
// Sélection des éléments dans le html
let menuBtn = document.querySelector(".menu-btn");
let menu = document.querySelector(".nav");
let menuItem = document.querySelectorAll(".nav__link");

// écoute de l'event click pour ajouter la class active au clique sur le menu
menuBtn.addEventListener("click", function () {
  menuBtn.classList.toggle("active");
  menu.classList.toggle("active");
});

// écoute de l'event sur menuItem pour désactiver le menu burger au clique
menuItem.forEach(function (menuItem) {
  menuItem.addEventListener("click", function () {
    menuBtn.classList.toggle("active");
    menu.classList.toggle("active");
  });
});
