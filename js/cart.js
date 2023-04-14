updateCartTotal();

const removeBtn = document.getElementsByClassName("btn-danger");
for (let i = 0; i < removeBtn.length; i++) {
  removeBtn[i].addEventListener("click", funRemove);
}

const removeAllBtn = document.querySelector(".btn-danger-all");
const itemsFOrRemove = document.querySelectorAll(".cart-row");

removeAllBtn.addEventListener("click", removeAll);
function removeAll() {
  itemsFOrRemove.forEach(function (any) {
    any.remove();
  });
}

const quantityChange = document.getElementsByClassName("item-quantity");
for (let i = 0; i < quantityChange.length; i++) {
  let button = quantityChange[i];
  button.addEventListener("change", updateCartTotal);
}

// REMOVE BTN

function funRemove(event) {
  // let buttonClicked = event.target;
  document.getElementsByClassName("cart-row")[0].remove();
  updateCartTotal();
}

// Cart PRICE

function updateCartTotal() {
  let cartItems = document.getElementsByClassName("cart-items")[0];
  let cartRows = cartItems.getElementsByClassName("cart-row");
  let total = 0;

  for (let i = 0; i < cartRows.length; i++) {
    let cartRow = cartRows[i];
    // console.log(cartRow);
    let quantity = parseFloat(
      cartRow.getElementsByClassName("item-quantity")[0].value
    );
    let price = parseFloat(
      cartRow.getElementsByClassName("item-price")[0].innerText.replace("₹", "")
    );
    total += quantity * price;
  }
  let discountedPrice = total / 10;
  // console.log(total);
  document.getElementsByClassName("temp-price")[0].innerText =
    "₹" + (total - discountedPrice);
  document.querySelector(".copy").innerText = "₹" + total;
}

// SIZE-BTN

// const sizeBtn = document.getElementsByClassName('size');
// for(let i = 0; i < sizeBtn.length; i++) {
//   let event = sizeBtn[i];
//   event.addEventListener('click', function(any) {
//     any.classList
//   })
// }
