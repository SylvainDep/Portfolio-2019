var button = document.getElementsByClassName("menu_button");
var hamburger_icon = document.getElementById("hamburger_icon");
var menu = document.getElementById("menu");

function toggleMenu() {
  hamburger_icon.classList.toggle("change");
  menu.classList.toggle("hidden");
}

for(i=0; i < button.length; i++) {
  button[i].addEventListener("click", function () {
    toggleMenu();
  });
};

hamburger_icon.addEventListener("click", function () {
  toggleMenu();
});
