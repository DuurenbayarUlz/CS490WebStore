<?php
session_start();

include("connection.php");
if (isset($_POST["signup"])) {
  if ($_POST["full_name"] == "" or $_POST["pass_word"] == "" or $_POST["email"] == "") {
    echo "<center><h1>FullName, Email, and Password cannot be empty</h1></center>";
  } else {
    try {
      $email = trim($_POST["email"]);
      $full_name = trim($_POST["full_name"]);
      $pass_word = strip_tags(trim($_POST["pass_word"]));
      $hashed_password = password_hash($pass_word, PASSWORD_DEFAULT);      
      $query = "INSERT INTO User (email, full_name, pass_word) values ('$email', '$full_name', '$hashed_password')";
      $statement = $conn->prepare($query);
      $statement->execute();
      echo "New record created successfully";
    } catch (PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/signup.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <title>Sign up</title>
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
              <h4>Signup to start shopping</h4>
            </div>

            <div class="icon" style="margin-top: 10px; margin-bottom: 10px">
              <img src="../images/Log-in.png" alt="login" />
            </div>

            <div style="display: flex; flex-direction: column; margin-top: 10px">
              <form method="POST">
                <div style="margin-bottom: 10px">
                  <input type="text" name="email" class="form-control" placeholder="Email" />
                </div>

                <div style="margin-bottom: 10px">
                  <input type="text" name="full_name" class="form-control" placeholder="Full name" />
                </div>

                <div style="margin-bottom: 10px">
                  <input type="password" name="pass_word" class="form-control" placeholder="Password" />
                </div>
                <button type="submit" class="btn btn-secondary" name="signup">Sign Up</button>
                <a href="login.php">Log in</a>
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