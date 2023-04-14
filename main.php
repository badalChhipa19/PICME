<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script defer src="js/mainscript.js" defer></script>

  <link rel="icon" href="img/favicon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main-style.css" />


  <title>PICME.com &mdash; An online stpre!</title>
</head>

<body>
  <div class="big">
    <header class="section-header">
      <section class="header">
        <div class="header-logo">
          <img class="logo" src="img/logo.png" alt="PICME.com's logo" />
        </div>

        <nav class="header-nav">
          <div class="search-box">
            <input type="text" class="search-bar" name="search-box" placeholder="Search your item hear....." />
            <ion-icon class="search-svg" name="search"></ion-icon>
          </div>
          <ul class="header-nav-list">
            <li><a class="main-nav-link" href="index.php">Sign-in</a></li>
            <li><a class="main-nav-link" href="#">Blog</a></li>
            <li>
              <a class="main-nav-link main-nav-link-svg" href="#">
                <ion-icon class="wishlist main-nav-svg" name="heart-outline"></ion-icon>
              </a>
            </li>
            <li>
              <a class="main-nav-link main-nav-link-svg" href="cart.php">
                <ion-icon class="cart main-nav-svg" name="cart-outline"></ion-icon>
              </a>
            </li>
          </ul>
        </nav>
      </section>
    </header>

    <main class="section-main">
      <section class="content">
        <aside class="side-block">
          <nav class="aside-nav">
            <ul class="unorder-categery">
              <li>
                <button class="categery-btn home-btn">
                  <ion-icon name="home"></ion-icon>
                </button>
              </li>
              <li>
                <button class="categery-btn all-btn">All</button>
              </li>
              <li>
                <button class="categery-btn jeans-btn">Jeans</button>
              </li>
              <li>
                <button class="categery-btn pants-btn">Pants</button>
              </li>
              <li>
                <button class="categery-btn tshirts-btn">T-Shirts</button>
              </li>
              <li>
                <button class="categery-btn shirts-btn">Shirts</button>
              </li>
            </ul>
          </nav>

          <div class="min-box">
            <h4 class="heading-forth">Delivery Day</h4>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Get it by tomorrow</p>
            </div>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Get it in 2 Days</p>
            </div>
          </div>

          <div class="min-box">
            <h4 class="heading-forth">Brand</h4>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Dennis Lingo</p>
            </div>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Style Quotient</p>
            </div>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">IndoPrimo</p>
            </div>
          </div>

          <div class="min-box">
            <h4 class="heading-forth">Price</h4>
            <ul class="aside-element-unorder-list">
              <li>
                <a class="aside-element-link" href="#">Under ₹500</a>
              </li>
              <li>
                <a class="aside-element-link" href="#">₹500 - ₹750</a>
              </li>
              <li>
                <a class="aside-element-link" href="#">₹750 - ₹1,000</a>
              </li>
              <li>
                <a class="aside-element-link" href="#">₹1,000 - ₹1,500</a>
              </li>
            </ul>
          </div>

          <div class="min-box">
            <h4 class="heading-forth">Sizes</h4>
            <div class="sizes paragraph">
              <a class="size" href="#">XS</a>
              <a class="size" href="#">S</a>
              <a class="size" href="#">M</a>
              <a class="size" href="#">L</a>
              <a class="size" href="#">XL</a>
            </div>
          </div>

          <div class="min-box">
            <h4 class="heading-forth">Pay on Delivery</h4>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Eligible for Pay On Delivery</p>
            </div>
          </div>

          <div class="min-box">
            <h4 class="heading-forth">Fit</h4>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Regular fit</p>
            </div>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Slim fit</p>
            </div>
          </div>

          <div class="min-box">
            <h4 class="heading-forth">Apparel Material</h4>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Cotton</p>
            </div>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Crepe</p>
            </div>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Denim</p>
            </div>
          </div>

          <div class="min-box">
            <h4 class="heading-forth">Occasion</h4>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Evening</p>
            </div>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Ceremony</p>
            </div>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Casual</p>
            </div>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Business</p>
            </div>
          </div>

          <div class="min-box">
            <h4 class="heading-forth">Discount</h4>
            <ul class="aside-element-unorder-list">
              <li>
                <a class="aside-element-link" href="#">10% Off or more</a>
              </li>
              <li>
                <a class="aside-element-link" href="#">25% Off or more</a>
              </li>
              <li>
                <a class="aside-element-link" href="#">35% Off or more</a>
              </li>
              <li>
                <a class="aside-element-link" href="#">50% Off or more</a>
              </li>
              <li>
                <a class="aside-element-link" href="#">60% Off or more</a>
              </li>
              <li>
                <a class="aside-element-link" href="#">70% Off or more</a>
              </li>
            </ul>
          </div>

          <div class="min-box">
            <h4 class="heading-forth">Availability</h4>
            <div class="about-delivery-box">
              <input class="checkbox" type="checkbox" />
              <p class="aside-para">Include Out of Stock</p>
            </div>
          </div>
        </aside>

        <div class="main-block">
          <div class="carousel-box">
            <img name="apk" class="carousel-images" src="img/carousel/1.png" alt="carousel images" />
          </div>
          <div class="page jeans hidden">
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/jenas-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Jeans</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
          </div>

          <div class="page pants hidden">
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/pants-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Pants</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
          </div>

          <div class="page tshirts hidden">
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/tshirt-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">T-Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
          </div>

          <div class="page shirts hidden">
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-1.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-2.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-3.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-4.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-5.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
            <figure class="figure">
              <img class="page-image" src="img/photos/shirt-6.jpg" alt="jeans-photos" />
              <div>
                <div class="figure-titel">
                  <h3 class="heading-secondary title">Shirt</h3>
                  <a class="purchase-links like paragraph" href="#">
                    <ion-icon name="heart"></ion-icon>
                  </a>
                </div>
                <p class="price">₹499</p>

                <div class="sizes paragraph">
                  <a class="size" href="#">XS</a>
                  <a class="size" href="#">S</a>
                  <a class="size" href="#">M</a>
                  <a class="size" href="#">L</a>
                  <a class="size" href="#">XL</a>
                </div>
                <div class="purchase-btns">
                  <a class="purchase-links buy paragraph" href="#">Buy Now</a>
                  <a class="purchase-links add-cart paragraph" href="#">Add to bag</a>
                </div>
              </div>
            </figure>
          </div>
        </div>
      </section>
    </main>
  </div>
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
          <li>
            <a class="contect-links" href="#">Create account</a>
          </li>
          <li><a class="contect-links" href="#">Sign in</a></li>
          <li><a class="contect-links" href="#">IOS app</a></li>
          <li><a class="contect-links" href="#">Android app</a></li>
        </ul>
      </div>
      <div class="footer-box detail">
        <h3 class="heading-tertairy">Company</h3>
        <ul class="footer-box-flex unorder-list-detail">
          <li>
            <a id="aboutus" class="contect-links" href="#">About us</a>
          </li>
          <li><a class="contect-links" href="#">For Business</a></li>
          <li><a class="contect-links" href="#">Partners</a></li>
        </ul>
      </div>
      <div class="footer-box detail">
        <h3 class="heading-tertairy">Resources</h3>
        <ul class="footer-box-flex unorder-list-detail">
          <li><a class="contect-links" href="#">Technology</a></li>
          <li><a class="contect-links" href="#">Help center</a></li>
          <li>
            <a class="contect-links" href="#">Privacy & terms</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
</body>

</html>