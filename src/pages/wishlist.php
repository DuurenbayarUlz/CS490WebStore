<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("Location: signin.php");
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
    <?php include("partials/header.php") ?>
    <?php include("partials/menu.php") ?>

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