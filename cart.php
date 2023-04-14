<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script defer src="js/cart.js" defer></script>

  <link rel="icon" href="img/favicon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/cart.css" />

  <title>PICME.com &mdash; CART</title>
</head>

<body>
  <header class="section-header">
    <section class="header">
      <div class="header-logo">
        <img class="logo" src="img/logo.png" alt="PICME.com's logo" />
      </div>

      <nav class="header-nav">
        <ul class="header-nav-list">
          <li><a class="main-nav-link" href="main.php">Home</a></li>
        </ul>
      </nav>
    </section>
  </header>

  <main>
    <section class="main-section">
      <div class="cart-container container">
        <div class="cart-heading">
          <h2 class="heading-secondary">Shoping Cart</h2>
          <p class="btn-danger-all">Remove All</p>
        </div>

        <div class="cart-items">
          <div class="cart-row">
            <div class="cart-item">
              <img class="item-image" src="img/photos/jenas-1.jpg" alt="cart-item" />
              <p class="item-title heading-tertairy">jeans</p>
            </div>
            <span class="item-price">₹ 499</span>

            <div class="sizes paragraph">
              <a class="size" href="#">XS</a>
            </div>

            <div class="cart-elements">
              <input class="item-quantity" type="number" min="1" value="1" />
              <button class="btn-danger">Remove</button>
            </div>
          </div>

          <div class="cart-row">
            <div class="cart-item">
              <img class="item-image" src="img/photos/jenas-2.jpg" alt="cart-item" />
              <p class="item-title heading-tertairy">jeans</p>
            </div>
            <span class="item-price">₹ 499</span>

            <div class="sizes paragraph">
              <a class="size" href="#">XS</a>
            </div>

            <div class="cart-elements">
              <input class="item-quantity" type="number" min="1" value="1" />
              <button class="btn-danger">Remove</button>
            </div>
          </div>

          <div class="cart-row">
            <div class="cart-item">
              <img class="item-image" src="img/photos/pants-3.jpg" alt="cart-item" />
              <p class="item-title heading-tertairy">jeans</p>
            </div>
            <span class="item-price">₹ 499</span>

            <div class="sizes paragraph">
              <a class="size" href="#">XS</a>
            </div>

            <div class="cart-elements">
              <input class="item-quantity" type="number" min="1" value="1" />
              <button class="btn-danger">Remove</button>
            </div>
          </div>

          <div class="cart-row">
            <div class="cart-item">
              <img class="item-image" src="img/photos/shirt-6.jpg" alt="cart-item" />
              <p class="item-title heading-tertairy">jeans</p>
            </div>
            <span class="item-price">₹ 499</span>

            <div class="sizes paragraph">
              <a class="size" href="#">XS</a>
            </div>

            <div class="cart-elements">
              <input class="item-quantity" type="number" min="1" value="1" />
              <button class="btn-danger">Remove</button>
            </div>
          </div>

          <div class="cart-row">
            <div class="cart-item">
              <img class="item-image" src="img/photos/shirt-2.jpg" alt="cart-item" />
              <p class="item-title heading-tertairy">jeans</p>
            </div>
            <span class="item-price">₹ 499</span>

            <div class="sizes paragraph">
              <a class="size" href="#">XS</a>
            </div>

            <div class="cart-elements">
              <input class="item-quantity" type="number" min="1" value="1" />
              <button class="btn-danger">Remove</button>
            </div>
          </div>

          <div class="cart-row">
            <div class="cart-item">
              <img class="item-image" src="img/photos/jenas-6.jpg" alt="cart-item" />
              <p class="item-title heading-tertairy">jeans</p>
            </div>
            <span class="item-price">₹ 499</span>

            <div class="sizes paragraph">
              <a class="size" href="#">XS</a>
            </div>

            <div class="cart-elements">
              <input class="item-quantity" type="number" min="1" value="1" />
              <button class="btn-danger">Remove</button>
            </div>
          </div>

          <div class="cart-row">
            <div class="cart-item">
              <img class="item-image" src="img/photos/tshirt-1.jpg" alt="cart-item" />
              <p class="item-title heading-tertairy">jeans</p>
            </div>
            <span class="item-price">₹ 499</span>

            <div class="sizes paragraph">
              <a class="size" href="#">XS</a>
            </div>

            <div class="cart-elements">
              <input class="item-quantity" type="number" min="1" value="1" />
              <button class="btn-danger">Remove</button>
            </div>
          </div>
        </div>

        <div class="cart-bill">
          <div class="secton-coupons">
            <h4 class="heading-forth">COUPONS</h4>
            <div class="coupons-el">
              <div class="el-fir">
                <ion-icon class="cou-svg" name="pricetag"></ion-icon>
                <p class="price-para cou-text">Apply Coupons</p>
              </div>
              <button class="cou-btn">APPLY</button>
            </div>
            <p class="price-para-1">
              <span>Login</span> to see best coupons for you.
            </p>
          </div>
          <br />

          <div class="section-price">
            <h4 class="heading-forth">PRICE DETAILS</h4>
            <div class="price-boxes">
              <p class="price-para">Total MRP</p>
              <p class="price-para copy"></p>
            </div>
            <div class="price-boxes">
              <p class="price-para">Discount on MRP</p>
              <p class="price-para">10%</p>
            </div>
            <div class="price-boxes">
              <p class="price-para">Coupons Discounts</p>
              <p class="price-para">Apply coupons</p>
            </div>
          </div>
          <div class="section-total">
            <div class="price-boxes">
              <p class="price-para">Total Amount</p>
              <p class="temp-price">₹499</p>
            </div>
            <button class="main-btn">Place Order</button>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

</html>