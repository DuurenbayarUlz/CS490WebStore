<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/index.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <title>Webstore</title>
</head>

<body>
  <div id="root">
    <?php include("partials/header.php") ?>
    <div class="menu">
      <button>Home Goods</button>
      <button>Office Supplies</button>
      <button>Books & Media</button>
      <button>Electronics</button>
      <button>Appliances</button>
      <button>Toys</button>
      <button>Clothing</button>
    </div>
    <div class="catalog">
      <div class="container px-4 px-lg-5 pt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-xl-5">
          <div class="col mb-5">
            <div class="catalog-item">
              <img src="https://hcti.io/v1/image/a3abd534-a38d-47f8-819b-a33679090571" alt="Item" width="130" />
              <div class="catalog-item-description">
                <div class="catalog-item-description-name">
                  <p>Product Name</p>
                  <img src="../images/HeartIcon.png" alt="heart-icon" height="12" width="12" />
                </div>

                <div class="catalog-item-description-brand">
                  <p>Brand</p>
                  <img src="../images/PointerIcon.png" alt="heart-icon" height="12" width="13" />
                </div>

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
                <p>$34.99</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("partials/footer.php") ?>
  </div>
</body>

</html>