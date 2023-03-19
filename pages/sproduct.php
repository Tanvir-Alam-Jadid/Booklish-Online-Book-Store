<?php
session_start();
error_reporting(0);
include('../database/dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booklish</title>
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
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="sorder.php">Special Order</a></li>
                <li><a href="../login/login.php">Login</a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
            </ul>
        </div>
    </section>

    <section id="prodetails" class="section-p1">
        <?php
            $BOOK_ID = $_GET['editid'];
            $ret1 = mysqli_query($con, "Select * From books where id='$BOOK_ID'");
            $result1 = mysqli_fetch_array($ret1);

             /*add to cart */

        if (isset($_POST['addtocart'])) {
            $query1 = mysqli_query($con, "insert into cart(id) 
                                        values ('$BOOK_ID')");

            if ($query1) {
                echo '<script type ="text/JavaScript"> 
                                                alert("Succesfully Added to Cart. Press "Nothing" to Do Nothing")
                                            </script> ';
            } else {
                echo '<script>alert("Something Went Wrong. Please try again.");</script>';
            }
        }

        ?>

        <div class="single-pro-image">
            <img src="../img/<?php echo $result1['img']; ?>" width="100%" id="MainImg" alt="">


            <div class="small-img-group">
                <div class="small-img-column">
                    <img src="../img/<?php echo $result1['img']; ?>" width="100%" class="small-img" alt="">
                </div>
                
                <div class="small-img-column">
                    <img src="../img/small product/Hardcover.jpg" width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-column">
                    <img src="../img/small product/reading.jpg" width="100%" class="small-img" alt="">
                </div>

            </div>
        </div>

        <div class="single-pro-details">
            <h6>Shop / <?php echo $result1['MName']; ?></h6>
            <h4><?php echo $result1['MName']; ?></h4>
            <h5><strike>Regular Price: ৳ <?php echo $result1['Discount']; ?></strike></h5>
            <h2>Discount Price: ৳ <?php echo $result1['Price']; ?></h2>
                
            <!-- <select>
                    <option>Select Amount</option>
                    <option>1pcs</option>
                    <option>2pcs</option>
                    <option>3pcs</option>
            </select> -->

            <form method="post">
                <button name='addtocart' class="normal">Add to Cart</button>
            </form>
            <h4>Book Overview</h4>
            <span><?php echo $result1['Details']; ?></span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Books</h2>
        <p>Available Books</p>
        <div class="pro-container">

        <?php
            $User_ID = $_SESSION['uid'];
            $ret1 = mysqli_query($con, "Select * From featured ");
            $num = mysqli_num_rows($ret1);
            while ($result1 = mysqli_fetch_array($ret1)) {
            ?>

                <div class="pro" onclick="window.location.href='sproduct.php?editid=<?php echo $result1['id']; ?>';">

                <div class="image-wrapper">
                        <img loading="lazy" src="../img/<?php echo $result1['img']; ?>" alt="">
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

    <?php
include('../footer/footer.php');
?>


    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");


        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }

        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }

        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
    </script>

    <script src="script.js"></script>
</body>

</html>