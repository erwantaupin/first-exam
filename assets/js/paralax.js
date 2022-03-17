let bg = document.getElementById("bg");
let spider = document.getElementById("spider");

window.addEventListener("scroll", function () {
  var value = window.scrollY;
  spider.style.left = value * 0.5 + "px";
});
