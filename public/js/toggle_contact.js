var contactButton = document.getElementsByClassName("toggle_contact");

var contactBox = document.getElementById("contactbox");
var mask = document.getElementById("mask");

function toggleContact() {
  contactBox.classList.toggle("hidden");
  mask.classList.toggle("hidden");
}

for(i=0; i < contactButton.length; i++) {
  mask.addEventListener("click", function () {
    toggleContact();
  });
  contactButton[i].addEventListener("click", function () {
    toggleContact();
  });
};
