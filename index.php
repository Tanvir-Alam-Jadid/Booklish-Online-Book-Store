<?php
session_start();
error_reporting(0);
include('database/dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="img/favicon/512 x 512.png"/>
    <!--favicon end-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <link rel="stylesheet" href="pages/style.css">
    </head>
    <body>
        
        <section id="header">
            <a href=""><img src="img/Hlogo.png" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="pages/shop.php">Shop</a></li>
                <li><a href="pages/about.php">About</a></li>
                <li><a href="pages/contact.php">Contact</a></li>
                <li><a href="pages/sorder.php">Special Order</a></li>
                <li><a href="login/login.php">Login</a></li>
                <li><a href="pages/cart.php"><i class="fa fa-shopping-bag"></i></a></li>
                
                
                </ul>
            </div>
        </section>

        <section id="middle">
            <h4>Gain-Knowledge</h4>
            <h2>Order Books Online From</h2>
            <h1>booklish</h1>
            <p>Save more time & get free shipping up to 5 km!</p>
            <button onclick="window.location.href='pages/shop.php';">Shop now</button>
        </section>

        <section id="feature" class="section-p1">
            <div class="feature-box">
                <img loading="lazy" src="img/features/f1.png" alt="">
                <h6>Free Shipping</h6>
            </div>
            <div class="feature-box">
                <img loading="lazy" src="img/features/f2.png" alt="">
                <h6>Online Order</h6>
            </div>
            
            <div class="feature-box">
                <img loading="lazy" src="img/features/f3.png" alt="">
                <h6>Save Money</h6>
            </div>

            <div class="feature-box">
                <img loading="lazy" src="img/features/f5.png" alt="">
                <h6>Happy Customer</h6>
            </div>

            <div class="feature-box">
                <img loading="lazy" src="img/features/f6.png" alt="">
                <h6>24/7 Support</h6>
            </div>
        </section>

        <section id="product1" class="section-p1">
            <h2>Featured Books</h2>
            <p>Available Books</p>
            <div class="pro-container">

            <?php
            $User_ID = $_SESSION['uid'];
            $ret1 = mysqli_query($con, "Select * From home2 ");
            $num = mysqli_num_rows($ret1);
            while ($result1 = mysqli_fetch_array($ret1)) {
            ?>

                <div class="pro" onclick="window.location.href='pages/sproduct.php?editid=<?php echo $result1['id']; ?>';">
                    <div class="image-wrapper">
                        <img loading="lazy" src="img/<?php echo $result1['img']; ?>" alt="">
                    </div>
                <div class="des">
                    <span>
                        <?php echo $result1['Author']; ?>
                    </span>
                    <h5>
                        <?php echo $result1['MName']; ?>
                    </h5>
                    <div class="star">
                        <i class="fas fa-star"><span>
                                <?php echo $result1['rating']; ?>
                            </span></i>

                    </div>

                    <h5><strike>৳ <?php echo $result1['Discount']; ?></strike></h5>
                    <h4>৳
                        <?php echo $result1['Price']; ?>
                        
                    </h4>
                </div>
                <a href="#"><i class="fa fa-cart-plus cart"></i></a>
                </div>
            <?php
            }
            ?>
                
            </div>
        </section>
        
        <section id="banner" class="section-m1"> 
            <h4>Free Shipping</h4>  
            <h2>Up to <span> 5 km </span> - Free Shipping</h2>
            <button class="normal" onclick="window.location.href='pages/shop.php';">Explore More</button>
        </section>

        <section id="product1" class="section-p1">
            <h2>Special Books</h2>
            <p>Available Books</p>
            <div class="pro-container">

            <?php
            $User_ID = $_SESSION['uid'];
            $ret1 = mysqli_query($con, "Select * From home1 ");
            $num = mysqli_num_rows($ret1);
            while ($result1 = mysqli_fetch_array($ret1)) {
            ?>

                <div class="pro" onclick="window.location.href='pages/sproduct.php?editid=<?php echo $result1['id']; ?>';">

                <div class="image-wrapper">
                        <img loading="lazy" src="img/<?php echo $result1['img']; ?>" alt="">
                    </div>
                    
                <div class="des">
                    <span>
                        <?php echo $result1['Author']; ?>
                    </span>
                    <h5>
                        <?php echo $result1['MName']; ?>
                    </h5>
                    <div class="star">
                        <i class="fas fa-star"><span>
                                <?php echo $result1['rating']; ?>
                            </span></i>

                    </div>

                    <h5><strike>৳ <?php echo $result1['Discount']; ?></strike></h5>
                    <h4>৳
                        <?php echo $result1['Price']; ?>
                        
                    </h4>
                </div>
                <a href="#"><i class="fa fa-cart-plus cart"></i></a>
                </div>
            <?php
            }
            ?>

            </div>
        </section>  

        <section id="sm-banner" class="section-p1">
            <div class="banner-box">
                <h4>special books</h4>
                <h2>get free delivary up to 5 km</h2>
                <span>Rare limited time stocks are available at booklish</span>
                <button class="white" onclick="window.location.href='pages/about.php';">Learn More</button>
            </div>
            <div class="banner-box banner-box2">
                <h4>be wise</h4>
                <h2>order books from booklish</h2>
                <span>Rare books from well known authors</span>
                <button class="white" onclick="window.location.href='pages/about.php';">Learn More</button>
            </div>
        </section>

        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our <span>special offers.</span>
            </p>
            </div> 
            <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal" onclick="window.location.href='login/login.php';">Sign Up</button>
            </div>
        </section>

        <?php
include('footer/indexfooter.php');
?>

        <script src="script.js"></script>
    </body>
</html>