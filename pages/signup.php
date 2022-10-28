<?php
session_start();

  include("connection.php");

  // try {
  //   $sql = "insert into User (email, full_name, pass_word) values ('$email', '$full_name', '$password')";
  //   $conn->exec($sql);
  //   echo "New record created successfully";
  // } catch(PDOException $e) {
  //   echo $sql . "<br>" . $e->getMessage();
  // }
  // $conn = null;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <title>Sign up</title>
  </head>
  <body>
    <div id="root">
      <header>
        <div class="header">
          <div class="header-logo"><h2>Webstore</h2></div>
          <div class="header-input">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
          </div>
          <div class="header-navigation">
            <div class="header-navigation-account">
              <img
                src="../images/profile.png"
                alt="heart-icon"
                height="18"
                width="18"
              />
              <p>My account</p>
            </div>
            <div class="header-navigation-wishlist">
              <img
                src="../images/HeartIcon2.png"
                alt="heart-icon"
                height="18"
                width="18"
              />
              <p>Wishlist</p>
            </div>
            <div class="header-navigation-cart">
              <img
                src="../images/shopping-cart.png"
                alt="heart-icon"
                height="18"
                width="18"
              />
              <p>My Cart</p>
            </div>
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
      <div class="catalog">
        <div class="login-section">
          <div class="login-window">
            <div
              class="d-flex flex-column justify-content-center align-items-center mt-4"
            >
              <div style="text-align: center">
                <h3>Signup to your account to start shopping</h3>
              </div>

              <div class="icon" style="margin-top: 10px; margin-bottom: 10px">
                <img src="../images/Log-in.png" alt="login" />
              </div>

              <div
                style="display: flex; flex-direction: column; margin-top: 20px"
              >
                <form method="POST">
                  <input
                    type="text"
                    name="email"
                    class="form-control"
                    placeholder="Email"
                  />

                  <input
                    type="text"
                    name="fullname"
                    class="form-control"
                    placeholder="Full name"
                  />

                  <input
                    type="text"
                    name="password"
                    class="form-control"
                    placeholder="Password"
                  />
                  <button type="submit" name="signup">Sign Up</button>
                  <a href="login.php">Log in</a>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer">
        <div class="footer-category">
          <h6>Shop by Category</h6>
          <div class="footer-category-line"></div>
          <p>Office Supplies</p>
          <p>Books</p>
          <p>Electronics</p>
          <p>Home Goods</p>
          <a href="about.php">About</a>
        </div>
        <div class="footer-about">
          <h6>About</h6>
          <div class="footer-about-line"></div>
          <p>About Us</p>
          <p>Refill Webcoins</p>
        </div>
        <div class="footer-social">
          <div class="footer-social-logos">
            <div class="footer-social-logo-item">
              <img src="../images/fb.png" alt="fb-icon" />
            </div>
            <div class="footer-social-logo-item">
              <img src="../images/insta-logo.png" alt="insta-icon" />
            </div>
            <div class="footer-social-logo-item">
              <img src="../images/youtube.png" alt="youtube" />
            </div>
            <div class="footer-social-logo-item">
              <img src="../images/twitter.png" alt="twitter" />
            </div>
          </div>
          <div class="footer-social-copyright">
            © 2022 | Web development | Group 2
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
