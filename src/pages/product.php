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
    <link rel="stylesheet" href="../css/product.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <title>Product</title>
</head>

<body>
    <div id="root">
        <?php include("partials/header.php") ?>
        <div class="product">
            <div class="product-section">
                <div class="product-section-image">
                    <img src="https://m.media-amazon.com/images/I/51n-E0hy3NL._AC_SL1500_.jpg" alt="product" style="object-fit: contain;" height="100%" width="100%" />
                </div>
                <div class="product-section-description">
                    <div class="product-section-description-title">
                        <h2>Product Title</h2>
                    </div>
                    <div class="product-section-description-brand">
                        <h3>Product Brand</h3>
                    </div>
                    <div class="product-section-description-rating">
                        <h4>Produt Rating</h4>
                    </div>
                    <div class="product-section-description-price">
                        <h4>Product Price</h4>
                    </div>
                    <div class="product-section-description-stock">
                        <h4>In stock : 45</h4>
                    </div>
                    <div class="product-section-description-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac diam sit amet enim tempus sodales. Proin congue bibendum convallis. Ut metus quam, consectetur at ante et, dignissim auctor ipsum. Cras posuere volutpat massa, et facilisis odio iaculis id. Nunc ullamcorper tincidunt metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque tempus molestie nulla, nec mattis justo dignissim eu.</p>
                    </div>
                    <div class="product-section-description-action">
                        <button type="submit" class="btn btn-secondary" name="signup">Add to Cart</button>
                        <button type="submit" class="btn btn-secondary" name="signup">Add to Wishlist</button>
                    </div>
                </div>

            </div>
            <div style="padding-left: 100px">
                <h4 style=" margin:0px">Similar Products:</h4>
            </div>
            <div class=" similar-product">
                <div class="catalog-item">
                    <img src="https://hcti.io/v1/image/a3abd534-a38d-47f8-819b-a33679090571" alt="Item" width="130" />
                    <div class="catalog-item-description">
                        <div class="catalog-item-description-name">
                            <p>Product Name</p>
                            <img src="../images/HeartIcon.png" alt="heart-icon" height="12" width="12" />
                        </div>

                        <div class="catalog-item-description-brand">
                            <p>Brand</p>
                            <img src="../images/PointerIcon.png" alt="heart-icon" height="12" width="13" />
                        </div>

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
                        <p>$34.99</p>
                    </div>
                </div>
                <div class="catalog-item">
                    <img src="https://hcti.io/v1/image/a3abd534-a38d-47f8-819b-a33679090571" alt="Item" width="130" />
                    <div class="catalog-item-description">
                        <div class="catalog-item-description-name">
                            <p>Product Name</p>
                            <img src="../images/HeartIcon.png" alt="heart-icon" height="12" width="12" />
                        </div>

                        <div class="catalog-item-description-brand">
                            <p>Brand</p>
                            <img src="../images/PointerIcon.png" alt="heart-icon" height="12" width="13" />
                        </div>

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
                        <p>$34.99</p>
                    </div>
                </div>
                <div class="catalog-item">
                    <img src="https://hcti.io/v1/image/a3abd534-a38d-47f8-819b-a33679090571" alt="Item" width="130" />
                    <div class="catalog-item-description">
                        <div class="catalog-item-description-name">
                            <p>Product Name</p>
                            <img src="../images/HeartIcon.png" alt="heart-icon" height="12" width="12" />
                        </div>

                        <div class="catalog-item-description-brand">
                            <p>Brand</p>
                            <img src="../images/PointerIcon.png" alt="heart-icon" height="12" width="13" />
                        </div>

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
                        <p>$34.99</p>
                    </div>
                </div>
            </div>
            <?php include("partials/footer.php") ?>
        </div>
</body>

</html>