<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: signin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: signin.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's fashion homepage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header>
        <a href="#" class="logo"><img src="images\logo.png"alt=""></a>
        <ul class="navmenu">
            <li><a href="homepage.php">HOME</a></li>
            <li><a href="shop.php">SHOP</a></li>
            <li><a href="#">PRODUCT</a></li>
            <li><a href="#">PAGE</a></li>
            <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="homepage.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
        </ul>
        <div class="nav-icon">
            <a href="#"><i class="bx bx-search"></i></a>
            <a href="#"><i class="bx bx-user"></i></a>
            <a href="#"><i class="bx bx-cart"></i></a>

            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <section class="main-home">
        <div class="main-text">
            <h5>Summer Collection</h5>
            <h1>New Summer <br> Collection 2023</h1>
            <p>There's Nothing Like Trend </p>

            <a href="shop.php" class="main-btn">Shop Now <i class="bx bx-right-arrow-alt"></i></a>
        </div>
    </section>
    <section class="trending-products" id="trending">
        <div class="center-text">
            <h2>Our Trending <span>Products</span></h2>
        </div>

        <div class="products">
            <div class="row">
                <a href="orders\order1.html"><img src="images\image1.png"alt=""></a>
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>White Printed</h4>
                    <p>Rs.999/-</p>
                </div>
            </div>

            <div class="row">
                <a href="orders\order2.html"><img src="images\image2.png"alt=""></a>
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>Round neck T-shirt</h4>
                    <p>Rs.999/-</p>
                </div>
            </div>

            <div class="row">
                <a href="orders\order3.html"><img src="images\image3.png"alt=""></a>
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>Casual T-shirt</h4>
                    <p>Rs.999/-</p>
                </div>
            </div>

            <div class="row">
                <a href="orders\order4.html"><img src="images\image4.png"alt=""></a>
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>Yellow-Casual T-shirt</h4>
                    <p>Rs.999/-</p>
                </div>
            </div>

            <div class="row">
                <a href="orders\order5.html"><img src="images\image5.png"alt=""></a>
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>Hoody Half Sleeves</h4>
                    <p>Rs.999/-</p>
                </div>
            </div>

            <div class="row">
                <a href="orders\order6.html"><img src="images\image6.png"alt=""></a>
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4> White T-shirt</h4>
                    <p>Rs.999/-</p>
                </div>
            </div>

            <div class="row">
                <a href="orders\order7.html"><img src="images\image7.png"alt=""></a>
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4>Neavy-Blue T-shirt</h4>
                    <p>Rs.999/-</p>
                </div>
            </div>

            <div class="row">
                <a href="orders\order8.html"><img src="images\image8.png"alt=""></a>
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bx-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <div class="price">
                    <h4> Greyish Casual T-shirt</h4>
                    <p>Rs.999/-</p>
                </div>
            </div>
            
        </div>
    </section>
    <script src="java.js"></script>

    <section class="contact">
        <div class="contact-info">
            <p><i class='bx bxs-contact'></i> Contact no: +91-8888888888</p>
            <p><i class='bx bxl-gmail'></i> Gmail: mensfashion@gmail.com</p>
            <br>
            <p>we are also available on</p><br>
            <i class='bx bxl-instagram' ></i>
            <i class='bx bxl-facebook-square' ></i>
            <i class='bx bxl-meta' ></i>
            <i class='bx bxl-twitter' ></i>
        </div>
    </section>
</body>
</html>