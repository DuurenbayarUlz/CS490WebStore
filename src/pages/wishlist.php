<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/wishlist.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <title>Wishlist</title>
</head>

<body>
  <div id="root">
    <header>
      <div class="header-logo">
        <h2>Webstore</h2>
      </div>
      <div class="header-input">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
      </div>
      <div class="header-navigation">
        <div class="header-navigation-account">
          <img src="../images/profile.png" alt="profile icon" height="18" width="18" />
          <p>My account</p>
        </div>
        <div class="header-navigation-wishlist">
          <img src="../images/HeartIcon2.png" alt="heart icon" height="18" width="18" />
          <p>Wishlist</p>
        </div>
        <div class="header-navigation-cart">
          <img src="../images/shopping-cart.png" alt="cart icon" height="18" width="18" />
          <p>My Cart</p>
        </div>
      </div>
    </header>
    <div class="menu">
      <button>Home Goods</button>
      <button>Office Supplies</button>
      <button>Books & Media</button>
      <button>Electronics</button>
      <button>Appliances</button>
      <button>Toys</button>
      <button>Clothing</button>
    </div>


    <main>
      <div class="sidebar">
        <ul>
          <li>Account Settings</li>
          <li>Order History</li>
          <li><a href="wishlist.html">Wishlist</a></li>
          <li>Refill Wallet</li>
        </ul>
      </div>
      <div class="wishlist">
        <h2 style="font-weight:bold;">My Wishlist</h2>
        <div class="wishlist-item">
          <img class="item-image" src="../images/headphone.png">
          <div class="item-details">
            <p class="product">Product Name</p>
            <p class="brand">Brand</p>
            <div class="catalog-item-description-star">
              <span>
                <img src="../images/star-orange.png" alt="star-rating" title="rating" />
                <img src="../images/star-orange.png" alt="star-rating" title="rating" />
                <img src="../images/star-orange.png" alt="star-rating" title="rating" />
                <img src="../images/star-orange.png" alt="star-rating" title="rating" />
                <img src="../images/star-white.png" alt="star-rating" title="rating" />
                <p>(37)</p>
              </span>
            </div>
            <p class="price">$34.99</p>
          </div>
          <div class="actions">
            <a href="#">Add to cart</a>
            <a href="#">Remove from wishlist</a>
          </div>
        </div>
        <div class="wishlist-item">
          <img class="item-image" src="../images/headphone.png">
          <div class="item-details">
            <p class="product">Product Name</p>
            <p class="brand">Brand</p>
            <div class="catalog-item-description-star">
              <span>
                <img src="../images/star-orange.png" alt="star-rating" title="rating" />
                <img src="../images/star-orange.png" alt="star-rating" title="rating" />
                <img src="../images/star-orange.png" alt="star-rating" title="rating" />
                <img src="../images/star-orange.png" alt="star-rating" title="rating" />
                <img src="../images/star-white.png" alt="star-rating" title="rating" />
                <p>(37)</p>
              </span>
            </div>
            <p class="price">$34.99</p>
          </div>
          <div class="actions">
            <a href="#">Add to cart</a>
            <a href="#">Remove from wishlist</a>
          </div>
        </div>
        <div class="wishlist-item">
          <img class="item-image" src="../images/headphone.png">
          <div class="item-details">
            <p class="product">Product Name</p>
            <p class="brand">Brand</p>
            <div class="catalog-item-description-star">
              <span>
                <img src="../images/star-orange.png" alt="star-rating" title="rating" />
                <img src="../images/star-orange.png" alt="star-rating" title="rating" />
                <img src="../images/star-orange.png" alt="star-rating" title="rating" />
                <img src="../images/star-orange.png" alt="star-rating" title="rating" />
                <img src="../images/star-white.png" alt="star-rating" title="rating" />
                <p>(37)</p>
              </span>
            </div>
            <p class="price">$34.99</p>
          </div>
          <div class="actions">
            <a href="#">Add to cart</a>
            <a href="#">Remove from wishlist</a>
          </div>
        </div>
      </div>
    </main>
    <?php include("partials/footer.php") ?>
  </div>
</body>

</html>