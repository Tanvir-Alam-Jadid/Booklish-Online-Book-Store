<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <title>Payment Methods</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="../img/favicon/512 x 512.png"/>
    <!--favicon end-->
</head>

<body>
    <section id="header">
        <a href="/Booklish/index.php"><img src="../img/Hlogo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="../index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="sorder.php">Special Order</a></li> 
                <li><a href="../login/login.php">Login</a></li>
                <li><a class="active" href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>

            </ul>
        </div>

    </section>

    <section id="pay-header" class="about-header">
        <h2><span>Choose</span> your payment method &nbsp;<i class="fas fa-money-bill"></i></h2>
        <p></p>
    </section>


    <div class="wrapper">
        <div class="table basic">
            <div class="price-section">
                <div class="price-area">
                    <div class="inner-area">
                        <img src="../img/payment options/bankpay.png" alt="">
                    </div>
                </div>
            </div>
            <div class="package-name"></div>
            <div class="btn"><button onclick="window.location.href='../payment/bankpay.php';">Purchase</button></div>
        </div>

        <div class="table premium">
            <div class="price-section">
                <div class="price-area">
                    <div class="inner-area">
                        <img src="../img/payment options/mobilebanking.png" alt="">
                    </div>
                </div>
            </div>
            <div class="package-name"></div>
            <div class="btn"><button onclick="window.location.href='../payment/mblpay.php';">Purchase</button></div>
        </div>


        <div class="table ultimate">
            <div class="price-section">
                <div class="price-area">
                    <div class="inner-area">
                        <img src="../img/payment options/cardpayment.png" alt="">
                    </div>
                </div>
            </div>
            <div class="package-name"></div>
            <div class="btn"><button onclick="window.location.href='../payment/cardpay.php';">Purchase</button></div>
        </div>

        <div class="table cash">
            <div class="price-section">
                <div class="price-area">
                    <div class="inner-area">
                        <img src="../img/payment options/cashondelivery.png" alt="">
                    </div>
                </div>
            </div>
            <div class="package-name"></div>
            <div class="btn"><button onclick="window.location.href='../payment/cashpay.php';">Purchase</button></div>
        </div>
    </div>

    <section id="banner" class="section-m1">
        <h4>Free Shipping</h4>
        <h2>Up to <span> 5 km </span> - Free Shipping</h2>
        <button class="normal">Explore More</button>
    </section>

    <?php
include('../footer/footer.php');
?>

</body>

</html>