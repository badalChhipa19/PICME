"use strict";

// categery btns
const jeansBtn = document.querySelector(".jeans-btn");
const pantsBtn = document.querySelector(".pants-btn");
const tshirtsBtn = document.querySelector(".tshirts-btn");
const shirtsBtn = document.querySelector(".shirts-btn");
const homeBtn = document.querySelector(".home-btn");
const allBtn = document.querySelector(".all-btn");

const jeansEl = document.querySelector(".jeans");
const pantsEl = document.querySelector(".pants");
const tshirtsEl = document.querySelector(".tshirts");
const shirtsEl = document.querySelector(".shirts");
const homeEl = document.querySelector(".carousel-box");

allBtn.addEventListener("click", function () {
  jeansEl.classList.remove("hidden");
  pantsEl.classList.remove("hidden");
  tshirtsEl.classList.remove("hidden");
  shirtsEl.classList.remove("hidden");
  homeEl.classList.add("hidden");
});
homeBtn.addEventListener("click", function () {
  homeEl.classList.remove("hidden");
  jeansEl.classList.add("hidden");
  pantsEl.classList.add("hidden");
  tshirtsEl.classList.add("hidden");
  shirtsEl.classList.add("hidden");
});
jeansBtn.addEventListener("click", function () {
  jeansEl.classList.remove("hidden");
  pantsEl.classList.add("hidden");
  tshirtsEl.classList.add("hidden");
  shirtsEl.classList.add("hidden");
  homeEl.classList.add("hidden");
});
pantsBtn.addEventListener("click", function () {
  pantsEl.classList.remove("hidden");
  jeansEl.classList.add("hidden");
  tshirtsEl.classList.add("hidden");
  shirtsEl.classList.add("hidden");
  homeEl.classList.add("hidden");
});
tshirtsBtn.addEventListener("click", function () {
  tshirtsEl.classList.remove("hidden");
  jeansEl.classList.add("hidden");
  pantsEl.classList.add("hidden");
  shirtsEl.classList.add("hidden");
  homeEl.classList.add("hidden");
});
shirtsBtn.addEventListener("click", function () {
  shirtsEl.classList.remove("hidden");
  jeansEl.classList.add("hidden");
  pantsEl.classList.add("hidden");
  tshirtsEl.classList.add("hidden");
  homeEl.classList.add("hidden");
});

// LIKE btn
const likeBtn = document.querySelectorAll(".like");

likeBtn.forEach(function (a) {
  a.addEventListener("click", function () {
    a.style.color = "#ff7c1f";
  });
});

// CAROUSEL
const slides = [
  "img/carousel/1.png",
  "img/carousel/2.png",
  "img/carousel/3.png",
  "img/carousel/4.png",
  "img/carousel/5.png",
];
let i = 0;
function on() {
  document.apk.src = slides[i];

  if (i < slides.length - 1) {
    i++;
  } else {
    i = 0;
  }

  setTimeout("on()", 4000);
}
on();
