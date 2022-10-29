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
  <link rel="stylesheet" href="../css/account.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <title>Webstore</title>
</head>

<body>
  <div id="root">
    <header>
      <div class="header">
        <div class="header-logo">
          <h2>Webstore</h2>
        </div>
        <div class="header-navigation">
          <div class="header-navigation-account">
            <a href="index.php">Home</a>
          </div>
          <div class="header-navigation-wishlist">
            <img src="../images/HeartIcon2.png" alt="heart-icon" height="18" width="18" />
            <p>Wishlist</p>
          </div>
          <div class="header-navigation-cart">
            <img src="../images/shopping-cart.png" alt="heart-icon" height="18" width="18" />
            <p>My Cart</p>
          </div>
        </div>
      </div>
    </header>
    <div class="catalog">
      <p>
        Welcome <?php echo $_SESSION['email'] ?>
      </p>
      <a href="logout.php">Log out</a>
    </div>
    <?php include("partials/footer.php") ?>
  </div>
</body>

</html>