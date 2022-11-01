<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("Location: signin.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../css/about.css">
</head>

<body>
  <div class="about-section">
    <h1>About us</h1>
    <h3>COMP 490 Group 2</h3>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img src="https://www.seoclerk.com/pics/319222-1IvI0s1421931178.png" alt="pic" style="width: 100%" />
        <div class="container">
          <h2>Duure</h2>
          <p class="title">Front-End Lead</p>
          <p>Year: Senior</p>
          <p>Major: CS & Econ</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="https://www.seoclerk.com/pics/319222-1IvI0s1421931178.png" alt="Jane" style="width: 100%" />
        <div class="container">
          <h2>Thanh N. Vu</h2>
          <p class="title">Back-End Lead</p>
          <p>Year: Senior</p>
          <p>Major: CS</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="https://www.seoclerk.com/pics/319222-1IvI0s1421931178.png" alt="Jane" style="width: 100%" />
        <div class="container">
          <h2>William</h2>
          <p class="title">Back-End</p>
          <p>Year: Senior</p>
          <p>Major: CS</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="https://www.seoclerk.com/pics/319222-1IvI0s1421931178.png" alt="Mike" style="width: 100%" />
        <div class="container">
          <h2>Caroline</h2>
          <p class="title">Front-End</p>
          <p>Year: Senior</p>
          <p>Major: CS</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="https://www.seoclerk.com/pics/319222-1IvI0s1421931178.png" alt="John" style="width: 100%" />
        <div class="container">
          <h2>Sophie</h2>
          <p class="title">UI/UX Lead Editor</p>
          <p>Year: Sophomore</p>
          <p>Major: CS</p>
        </div>
      </div>
    </div>
    <a href="index.php">Home</a>
    <?php include("partials/footer.php") ?>
  </div>
</body>

</html>