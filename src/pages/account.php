<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("Location: signin.php");
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
    <?php include("partials/header.php") ?>
    <div class="catalog">
      <div>
        <?php include("../pages/partials/sidebar.php") ?>
        <a href="logout.php">Log out</a>
      </div>
      <div>
        <div>
          <div>
            Welcome <?php echo $_SESSION['email'] ?>
          </div>
        </div>
        <div class="form">
          <p>Change Username:</p>
          <input type="text" name="email" class="form-control" placeholder="" />
          <button type="submit" class="btn btn-secondary" name="change-username" style="margin-top: 10px">Submit</button>
        </div>
        <div style="padding-top: 20px">
          <p>Change Password:</p>
          <input type="text" name="password" class="form-control" placeholder="" />
          <input type="text" name="password" class="form-control" placeholder="" style="margin-top: 6px" />
          <button type="submit" class="btn btn-secondary" name="change-password" style="margin-top: 10px">Submit</button>

        </div>
      </div>
    </div>
    <?php include("partials/footer.php") ?>
  </div>
</body>

</html>