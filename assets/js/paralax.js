let bg = document.getElementById("bg");
// let strange = document.getElementById("strange");
let spider = document.getElementById("spider");

window.addEventListener("scroll", function () {
  var value = window.scrollY;
  // bg.style.top = value * 0.5 + "px";
  spider.style.left = value * 0.5 + "px";
});
