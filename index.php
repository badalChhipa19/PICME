<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script defer src="js/script.js" defer></script>

  <link rel="icon" href="img/favicon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/stylesheet.css" />
  <link rel="stylesheet" href="css/query.css" />

  <title>PICME.com &mdash; An online stpre!</title>
</head>

<body>
  <div class="big">
    <header class="section-header">
      <div class="header">
        <img class="logo" src="img/logo.png" alt="Picme.com's logo" />
        <nav class="header-nav">
          <a class="go-pro nav" href="#">Go Pro</a>
          <a class="btn nav" href="main.php"><abbr title="Without signing-up">Shope Now</abbr></a>
        </nav>
      </div>
    </header>

    <main>
      <section class="section-hero">
        <div class="container hero">
          <div class="div-1">
            <h1 class="heading-primary">
              Now purchase a good quality product with PICME.com
            </h1>
            <p class="paragraph hero-description">
              We provide shop on your doorstep. To make your shopping fast we
              provides you fast delivery within 2 to 3 days, so you don't get
              late for your destination.
            </p>
            <div class="hero-btn">
              <a class="btn" href="#aboutus">Learn more &darr;</a>
              <!-- <button id="#aboutus" class="btn">Learn more &darr;</button> -->
            </div>
            <div class="customer-box">
              <div>
                <img class="customer-img" src="img/customer/1.png" alt="customer Images" />
                <img class="customer-img" src="img/customer/2.png" alt="customer Images" />
                <img class="customer-img" src="img/customer/3.png" alt="customer Images" />
                <img class="customer-img" src="img/customer/4.png" alt="customer Images" />
                <img class="customer-img" src="img/customer/5.png" alt="customer Images" />
                <img class="customer-img" src="img/customer/6.png" alt="customer Images" />
              </div>
              <p class="paragraph customer-text">
                <span>250000+</span> users across the world
              </p>
            </div>
          </div>
          <div class="div-2">
            <h2 class="heading-secondary">Sign Up</h2>
            <form class="form" action="main.php" method="post">
              <div>
                <label class="label" for="name">Name</label>
                <input class="input" type="text" name="name" id="name" placeholder="Full Name" required />
              </div>

              <div>
                <label class="label" for="email">E-mail</label>
                <input class="input" type="email" name="email" id="email" placeholder="demo@.com" required />
              </div>

              <div>
                <label class="label" for="phone">Phone no.</label>
                <input class="input" type="tel" name="phone" id="phone" placeholder="0000000000" />
              </div>

              <div>
                <label class="label" for="password">Password</label>
                <input class="input" type="password" name="password" id="password" placeholder="TypeAPassword"
                  required />
              </div>

              <div class="form-btn">
                <button class="btn">signing-up</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
  </div>

  <aside>
    <div class="section-aside">
      <div class="go-proz">
        <a href="#">
          <ion-icon class="cross-svg" name="close-outline"></ion-icon>
        </a>
        <div class="price-box">
          <div class="membership one">
            <h2 class="price"><span>₹</span>900</h2>
            <p class="price-description">per month. Join when you need</p>
            <ul class="membership-text">
              <li>
                <ion-icon class="check-svg" name="checkmark-outline"></ion-icon>
                <span>Free delivery</span>
              </li>
              <li>
                <ion-icon class="check-svg" name="checkmark-outline"></ion-icon>
                <span>One-day delivery </span>
              </li>
              <li>
                <ion-icon class="check-svg" name="checkmark-outline"></ion-icon>
                <span>Tow-day delivery</span>
              </li>
              <li>
                <ion-icon class="check-svg" name="checkmark-outline"></ion-icon>
                <span>Morning delivery</span>
              </li>
              <li>
                <ion-icon class="check-svg" name="checkmark-outline"></ion-icon>
                <span>7 day item return limit</span>
              </li>
            </ul>
            <div class="price-btn">
              <button class="btn">Join membership</button>
            </div>
          </div>
          <div class="membership tow">
            <h2 class="price"><span>₹</span>350</h2>
            <p class="price-description">anual. Join every month</p>
            <ul class="membership-text">
              <li>
                <ion-icon class="check-svg" name="checkmark-outline"></ion-icon>
                <span>Free delivery</span>
              </li>
              <li>
                <ion-icon class="check-svg" name="checkmark-outline"></ion-icon>
                <span>One-day delivery </span>
              </li>
              <li>
                <ion-icon class="check-svg" name="checkmark-outline"></ion-icon>
                <span>Tow-day delivery</span>
              </li>
              <li>
                <ion-icon class="check-svg" name="checkmark-outline"></ion-icon>
                <span>Morning delivery</span>
              </li>
              <li>
                <ion-icon class="check-svg" name="checkmark-outline"></ion-icon>
                <span>7 day item return limit</span>
              </li>
            </ul>
            <div class="price-btn">
              <button class="btn">Join membership</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>

  <footer class="section-footer">
    <div class="container footer">
      <div class="footer-box picme-col">
        <img class="logo" src="img/logo.png" alt="PICME.com's log " />
        <nav class="footer-nav">
          <ul class="unorder-list">
            <li>
              <a class="social-icon" href="#">
                <ion-icon class="svg" name="logo-facebook"></ion-icon>
              </a>
            </li>
            <li>
              <a class="social-icon" href="#">
                <ion-icon class="svg" name="logo-twitter"></ion-icon>
              </a>
            </li>
            <li>
              <a class="social-icon" href="#">
                <ion-icon class="svg" name="logo-instagram"></ion-icon>
              </a>
            </li>
          </ul>
        </nav>
        <p class="paragraph copyright">
          &copy; 2022 www.PICME.com. All rights reserved.
        </p>
      </div>
      <div class="footer-box address">
        <h3 class="heading-tertairy">Contact us</h3>
        <div class="footer-box-flex">
          <p class="paragraph">
            682 Dream Empire, 4th Floor, Bengaluru, India
          </p>
          <ul class="unorder-list-link">
            <li>
              <a class="contect-links" href="tel:121-201-1121">121-201-1121</a>
            </li>
            <li>
              <a class="contect-links" href="mailto:hello@picm.com">hello@picm.com</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-box detail">
        <h3 class="heading-tertairy">Account</h3>
        <ul class="footer-box-flex unorder-list-detail">
          <li><a class="contect-links" href="#">Create account</a></li>
          <li><a class="contect-links" href="#">Sign in</a></li>
          <li><a class="contect-links" href="#">IOS app</a></li>
          <li><a class="contect-links" href="#">Android app</a></li>
        </ul>
      </div>
      <div class="footer-box detail">
        <h3 class="heading-tertairy">Company</h3>
        <ul class="footer-box-flex unorder-list-detail">
          <li><a id="aboutus" class="contect-links" href="#">About us</a></li>
          <li><a class="contect-links" href="#">For Business</a></li>
          <li><a class="contect-links" href="#">Partners</a></li>
        </ul>
      </div>
      <div class="footer-box detail">
        <h3 class="heading-tertairy">Resources</h3>
        <ul class="footer-box-flex unorder-list-detail">
          <li><a class="contect-links" href="#">Technology</a></li>
          <li><a class="contect-links" href="#">Help center</a></li>
          <li><a class="contect-links" href="#">Privacy & terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</body>

</html>