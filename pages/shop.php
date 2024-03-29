<?php
session_start();
error_reporting(0);
include('../database/dbconnect.php');
if (isset($_POST['search'])) {
    $books = $_POST['books'];
    $_SESSION['books'] = $books;
    header('location:searchfilter.php');
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Page</title>
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

    <section id="shop-header">
        <h2>Order Books Online From <span>Booklish</span> </h2>
        <p>Save your time & get free shipping up to 5 km!</p>
    </section>
   
    <div class="search-container">
            <div class="search_wrap search_wrap_3">
                <div class="search_box">
                    <form method="post">
                    <input class="input" list="books" type="text" name="books" placeholder="Search..." required>
                    <datalist id="books">
                        <option value="Bootstrapped">
                        <option value="Seeing Ghosts">
                        <option value="Justice On The Brink">
                        <option value="Split Tooth">
                        <option value="Hello Beautiful">
                    </datalist>
                    
                    <div id="sbutton" class="btn btn_common">
                        <button name="search" class="fas fa-search"></button>
                    </div>
                </form>
                </div>
            </div>
    </div>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            
            <?php
            $User_ID = $_SESSION['uid'];
            $ret1 = mysqli_query($con, "Select * From books ");
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

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#"><i class="fas fa-angle-right"></i></a>
    </section>

    <?php
include('../footer/footer.php');
?>

    <script src="script.js"></script>
</body>

</html>