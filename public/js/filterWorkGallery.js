var all = document.getElementsByClassName("all");
var dev = document.getElementsByClassName("dev");
var seo = document.getElementsByClassName("seo");
var content = document.getElementsByClassName("content");

var allToggler = document.getElementById("toggle_all");
var devToggler = document.getElementById("toggle_dev");
var seoToggler = document.getElementById("toggle_seo");
var contentToggler = document.getElementById("toggle_content");

function toggledev() {
  for(i=0; i < all.length; i++) {
    dev[i].classList.remove("hidden");
    seo[i].classList.add("hidden");
    content[i].classList.add("hidden");

    allToggler.classList.remove("active");
    devToggler.classList.add("active");
    seoToggler.classList.remove("active");
    contentToggler.classList.remove("active");
  };
}

function toggleseo() {
  for(i=0; i < all.length; i++) {
    dev[i].classList.add("hidden");
    seo[i].classList.remove("hidden");
    content[i].classList.add("hidden");

    allToggler.classList.remove("active");
    devToggler.classList.remove("active");
    seoToggler.classList.add("active");
    contentToggler.classList.remove("active");
  };
}

function togglecontent() {
  for(i=0; i < all.length; i++) {
    dev[i].classList.add("hidden");
    seo[i].classList.add("hidden");
    content[i].classList.remove("hidden");

    allToggler.classList.remove("active");
    devToggler.classList.remove("active");
    seoToggler.classList.remove("active");
    contentToggler.classList.add("active");
  };
}

devToggler.addEventListener("click", function () {
  toggledev();
});

seoToggler.addEventListener("click", function () {
  toggleseo();
});

contentToggler.addEventListener("click", function () {
  togglecontent();
});

allToggler.addEventListener("click", function () {
  for(i=0; i < all.length; i++) {
    all[i].classList.remove("hidden");
  };

  allToggler.classList.add("active");
  devToggler.classList.remove("active");
  seoToggler.classList.remove("active");
  contentToggler.classList.remove("active");
});
