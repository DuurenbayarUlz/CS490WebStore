<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("Location: signin.php");
}
require_once("connection.php");
$email = $_SESSION["email"];
$result = $conn->query("SELECT id FROM User WHERE email='$email'");
$id = $result->fetch();
$wishlist = $conn->query("SELECT * FROM ProductFavorite WHERE user_id='$id[id]'");
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
        if($wishlist->rowCount() > 0){
          while($row=$wishlist->fetch()){
            $item = $conn->query("SELECT * FROM Product WHERE id=$row[product_id]");
            $itemdet = $item->fetch();
        ?>
        <div class="wishlist-item">
          <img class="item-image" src="<?php echo $itemdet['image_path'] ?>">
          <div class="item-details">
            <p class="product"><?php echo $itemdet['name'] ?></p>
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
            <p class="price"><?php echo $itemdet['price'] ?></p>
          </div>
          <div class="actions">
            <a href="#">Add to cart</a>
            <a href="#">Remove from wishlist</a>
          </div>
        </div>
        <?php
          }}
        else{
        ?>
        <h3>No wishlist items to display</h3>
        <?php } ?>
      </div>
    </main>
    <?php include("partials/footer.php") ?>
  </div>
</body>

</html>