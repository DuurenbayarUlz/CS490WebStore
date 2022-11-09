<?php 
$displayNone = (!isset($_SESSION["email"]))  ? "style='display:none'" : '';
?>
<style>
    .header {
        width: 100%;
        height: 8vh;
        background-color: orange;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .header-logo {
        width: 150px;
        overflow-x: hidden;
        padding: 10px;
        margin-right: 20px;
    }

    .header-logo h1 {
        font-size: 2em;
    }

    .header-input input {
        width: 40vw;
    }

    .header-navigation {
        display: flex;
        width: 35vw;
        max-width: 360px;
        height: 100%;
        justify-content: flex-end;
        align-items: center;
        margin-right: 30px;
    }

    .header-navigation p {
        margin-bottom: 0;
        cursor: pointer;
        padding-left: 5px;
		font-size: 15px;
    }

    .header-logo h3 a,
    .header-navigation p a {
        text-decoration: none;
        color: black;
        font-weight: 400;
    }

    .header-logo h3 {
        margin: 0;
    }

    .header-logo h2 a :hover,
    .header-navigation-cart :hover,
    .header-navigation-wishlist :hover,
    .header-navigation-account :hover {
        color: rgb(164, 107, 0);
    }

    .header-navigation-cart,
    .header-navigation-wishlist,
    .header-navigation-account {
        display: flex;
        margin-left: 20px;
    }
</style>

<!-- AVOID FORM RESUBMISSION UPON PAGE REFRESH-->
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<!-- END SCRIPT - PAGE REFRESH-->


<header>
    <div class="header">
        <div class="header-logo">
            <h3><a href="index.php">Webstore</a></h3>
        </div>
        <div class="header-input">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
        </div>
        <div class="header-navigation">
            <div class="header-navigation-account">
                <img src="../images/profile.png" alt="heart-icon" height="18" width="18" />
                <?php
                echo (!isset($_SESSION["email"])) ? "<p><a href='signin.php'>Sign In</a></p>" : "<p><a href='home.php'>My account</a></p>";
                ?>
            </div>
            <div class="header-navigation-wishlist" 
            <?php 
                echo $displayNone;
            ?>>
                <img src="../images/HeartIcon2.png" alt="heart-icon" height="18" width="18" />
                <p><a href="wishlist.php">Wishlist</a></p>
            </div>
            <div class="header-navigation-cart" <?php
                                                echo $displayNone;
                                                ?>>
                <img src="../images/shopping-cart.png" alt="heart-icon" height="18" width="18" />
                <p><a href="cart.php">My Cart</a></p>
            </div>
        </div>
    </div>
</header>