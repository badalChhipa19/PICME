console.log("hii");

const goProBtn = document.querySelector(".go-pro");
const display = document.querySelector(".go-proz");
const retrive = document.querySelector(".retrive");
const close = document.querySelector(".cross-svg");

goProBtn.addEventListener("click", function () {
  display.classList.add("retrive");
});
close.addEventListener("click", function () {
  display.classList.remove("retrive");
});
