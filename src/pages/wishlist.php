<?php
  session_start();
  require_once("connection.php");

  if (!isset($_SESSION["email"])) {
    header("Location: signin.php");
  }

  /**
  * IMPLEMENT SHOWING PRODUCTS
  * @author: Sophie Decker and Thanh Vu
  * revised by: Thanh Vu 11/03/2022 - restructuring DB query 
  */

  // get email of logged in user
  $email = $_SESSION["email"];
  $userId = $_SESSION['userid'];

  try {
    $stmt = $conn->query("SELECT * from Product
    INNER JOIN ProductFavorite ON Product.id = ProductFavorite.product_id AND ProductFavorite.user_id = $userId
    ");
    
    while ($row = $stmt->fetch()) {
      $productIds[] =  $row['id'];
      $productNames[] = $row['name'];
      $productPrices[] = $row['price'];
      $productBrands[] = $row['brand'];
      $productImagePaths[] = $row['image_path'];
    }
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  // Close connection to save resources
  $conn = null;
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
      <?php include("../pages/partials/sidebar.php") ?>
      <div class="wishlist">
        <h2>My Wishlist</h2>
        <?php 
          if (!empty($productNames)) {
            
            for ($i = 0; $i < count($productNames); $i++) { 
              echo "<div class='wishlist-item'>
              <img class='item-image' src='$productImagePaths[$i]'>
              <div class='item-details'>
                <a href='product.php'?id=$productIds[$i]'><p class='product'>$productNames[$i]</p>
                <p class='brand'>$productBrands[$i]</p>
                <div class='catalog-item-description-star'>
                    <span>
                      <img src='../images/star-orange.png' alt='star-rating' title='rating' />
                      <img src='../images/star-orange.png' alt='star-rating' title='rating' />
                      <img src='../images/star-orange.png' alt='star-rating' title='rating' />
                      <img src='../images/star-orange.png' alt='star-rating' title='rating' />
                      <img src='../images/star-white.png' alt='star-rating' title='rating' />
                      <p>(37)</p>
                    </span>
                </div>
                <p class='price'>$productPrices[$i]</p>
              </div>
              <div class='actions'>
                <a href='#'>Add to cart</a>
                <a href='#'>Remove from wishlist</a>
              </div>
            </div>";
            }
        } else {
            echo "<h3>No wishlist items to display</h3>";
          }
          
        ?>
      </div> 
    </main>
    <?php include("partials/footer.php") ?>
  </div>
</body>

</html>