<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      body {
        background-color: rgb(253, 240, 213);
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
      }

      html {
        box-sizing: border-box;
      }

      *,
      *:before,
      *:after {
        box-sizing: inherit;
      }

      .row {
        padding-top: 30px;
      }

      .column {
        float: left;
        width: 20%;
        margin-bottom: 16px;
        padding: 0 8px;
        border-radius: 20px;
      }

      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
      }

      .about-section {
        padding: 50px;
        text-align: center;
        background-color: orange;
        color: black;
      }

      .container {
        padding: 0 16px;
        min-height: 200px;
      }

      .container::after,
      .row::after {
        content: "";
        clear: both;
        display: table;
      }

      .title {
        color: grey;
      }

      .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
      }

      .button:hover {
        background-color: #555;
      }

      @media screen and (max-width: 650px) {
        .column {
          width: 100%;
          display: block;
        }
      }
    </style>
  </head>
  <body>
    <div class="about-section">
      <h1>About us</h1>
      <h3>COMP 490 Group 2</h3>
    </div>

    <div class="row">
      <div class="column">
        <div class="card">
          <img
            src="https://www.seoclerk.com/pics/319222-1IvI0s1421931178.png"
            alt="pic"
            style="width: 100%"
          />
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
          <img
            src="https://www.seoclerk.com/pics/319222-1IvI0s1421931178.png"
            alt="Jane"
            style="width: 100%"
          />
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
          <img
            src="https://www.seoclerk.com/pics/319222-1IvI0s1421931178.png"
            alt="Jane"
            style="width: 100%"
          />
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
          <img
            src="https://www.seoclerk.com/pics/319222-1IvI0s1421931178.png"
            alt="Mike"
            style="width: 100%"
          />
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
          <img
            src="https://www.seoclerk.com/pics/319222-1IvI0s1421931178.png"
            alt="John"
            style="width: 100%"
          />
          <div class="container">
            <h2>Sophie</h2>
            <p class="title">UI/UX Lead Editor</p>
            <p>Year: Sophomore</p>
            <p>Major: CS</p>
          </div>
        </div>
      </div>
      <a href="/" onclick="route()">Home</a>
    </div>
  </body>
</html>
