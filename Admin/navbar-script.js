console.log("working");

let isHamburgerCollapsed = true;
const hamburger = document.querySelector(".nav__hamburger"); //menu button
const hamburgerMenu = document.querySelector(".hamburger__menu"); //menu dropdown

hamburger.addEventListener("click", function () {
  console.log("working");

  if (isHamburgerCollapsed) {
    hamburgerMenu.style.paddingTop = "30px";
    hamburgerMenu.style.paddingBottom = "30px";
    hamburgerMenu.style.height = "341px";
    hamburgerMenu.style.overflow = "show";
    isHamburgerCollapsed = false;
  } else {
    hamburgerMenu.style.paddingTop = "0px";
    hamburgerMenu.style.paddingBottom = "0px";
    hamburgerMenu.style.height = "0px";
    hamburgerMenu.style.overflow = "hidden";
    isHamburgerCollapsed = true;
  }
});

loginHamburger.addEventListener("click", function () {
  console.log("working");

  modal.style.display = "block";
  login.style.zIndex = "200";
  login.style.opacity = "1";
});
