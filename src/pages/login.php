<?php
session_start();
include("connection.php");

if (isset($_POST["login"])) {
  if ($_POST["pass_word"] == "" or $_POST["email"] == "") {
    echo "<center><h1>Email and Password cannot be empty</h1></center>";
  } else {
    $email = trim($_POST["email"]);
    $pass_word = strip_tags(trim($_POST["pass_word"]));

    $query = $conn->prepare("SELECT * FROM User WHERE email=? and pass_word=?");
    $query->execute(array($email, $pass_word));
    $control = $query->fetch(PDO::FETCH_OBJ);
    if ($control > 0) {
      $_SESSION["email"] = $email;
      header("Location: index.php");
    }
    echo "<center><p>Incorrect Password or Email</p></center>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/login.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <title>Log in</title>
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
      <div class="login-section">
        <div class="login-window">
          <div class="d-flex flex-column justify-content-center align-items-center mt-4">
            <div style="text-align: center">
              <h3>Login to start shopping</h3>
            </div>

            <div class="icon" style="margin-top: 10px; margin-bottom: 10px">
              <img src="../images/Log-in.png" alt="login" />
            </div>

            <div style="display: flex; flex-direction: column; margin-top: 20px">
              <form method="POST">

                <div style="margin-bottom: 10px">
                  <input type="text" name="email" class="form-control" placeholder="Email" />
                </div>
                <div style="margin-bottom: 10px">
                  <input type="text" name="pass_word" class="form-control" placeholder="Password" />
                </div>
                <button type="submit" class="btn btn-secondary" name="login">Log In</button>
                <a href="signup.php">Sign up</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include("partials/footer.php") ?>
  </div>
</body>

</html>