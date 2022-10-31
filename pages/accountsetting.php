<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="accountsettings.css" rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <title>Account Settings</title>
</head>
<body>
    <div id="root">
        <header>
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
                    alt="profile icon"
                    height="18"
                    width="18"
                    />
                    <p>My account</p>
                </div>
                <div class="header-navigation-wishlist">
                    <img
                    src="../images/HeartIcon2.png"
                    alt="heart icon"
                    height="18"
                    width="18"
                    />
                    <p>Wishlist</p>
                </div>
                <div class="header-navigation-cart">
                    <img
                    src="../images/shopping-cart.png"
                    alt="cart icon"
                    height="18"
                    width="18"
                    />
                    <p>My Cart</p>
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
        <main>
            <div class="sidebar">
                <ul>
                    <li><a href="accountsettings.php">Account Settings</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="wishlist.php">Wishlist</a></li>
                    <li><a href="#">Refill Wallet</a></li>
                </ul>
            </div> <!-- End of sidebar -->
            <div class="accountsettings">
                <div class="top">
                    <div class="profile-picture">
                        <img src="https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" alt="...">
                    </div>
                    <div>
                        <p>Upload new profile picture:</p>
                        <input type="button" value="Upload">
                    </div>
                </div>
                <div class="userpass">
                    <div>
                        <h3>Change Username:</h3>
                        <input type="text" name="username" value="New username">
                        <input type="submit" value="Submit">
                    </div>
                    <div>
                        <h3>Change Password:</h3>
                        <input type="password" name="password" value="New password">
                        <input type="password" name="confirmpass" value="Confirm new password">
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>