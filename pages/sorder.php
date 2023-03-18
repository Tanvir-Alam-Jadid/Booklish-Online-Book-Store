<?php
session_start();
error_reporting(0);
include('../database/dbconnect.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $bookname=$_POST['bookname'];
    $address=$_POST['address'];
    $number=$_POST['number'];
    $bdetail=$_POST['bdetail'];

    $query1=mysqli_query($con, "insert into sporders(name, email, bookname, address, number, bdetail) 
                                values ('$name','$email','$bookname','$address', '$number', '$bdetail')" );
    if ($query1) { 
        echo "<script>alert('Request Sent Successfully');</script>";
        header('location:sorder.php'); 
    }
    else{
    $msg="Something Went Wrong. Please try again.";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Order</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="../img/favicon/512 x 512.png"/>
    <!--favicon end-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">
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
                <li><a class="active" href="sorder.php">Special Order</a></li>
                <li><a href="../login/login.php">Login</a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
                
            </ul>
        </div>
    </section>


    <section class="sorder">
        <div class="order-container">
            <div class="title">Orders</div>
            <div class="content">
                <form action="#" method="post">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text" name='name' placeholder="Enter your name" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="text" name='email' placeholder="Enter your email" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Book Name</span>
                            <input type="text" name='bookname' placeholder="Book name" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Address</span>
                            <input type="text" name='address' placeholder="Address" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="text" name='number' placeholder="Enter your number" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Book Detials</span>
                            <textarea name="bdetail" id="" cols="30" rows="10" placeholder=" Book Detials"></textarea>
                        </div>

                    </div>
                    <div class="button">
                        <input type="submit" name='submit' value="Confirm Order">
                    </div>

                    <h6 style="font-size:16px;margin-top:15px;margin-bottom:2px;color:red" align="center"> <?php if($msg){
                            echo $msg;
                        }  ?> </h6>

                </form>
            </div>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="feature-box">
            <img src="../img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="feature-box">
            <img src="../img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>

        <div class="feature-box">
            <img src="../img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>

        <div class="feature-box">
            <img src="../img/features/f5.png" alt="">
            <h6>Happy Customer</h6>
        </div>

        <div class="feature-box">
            <img src="../img/features/f6.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>


    <section id="banner" class="section-m1">
        <h4>Free Shipping</h4>
        <h2>Up to <span> 5 km </span> - Free Shipping</h2>
        <button class="normal" onclick="window.location.href='shop.php';">Explore More</button>
    </section>

    <?php
include('../footer/footer.php');
?>

    <script src="script.js"></script>
</body>

</html>