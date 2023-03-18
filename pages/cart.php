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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <title>Cart</title>
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

    <section id="cart-header" class="about-header">
        <h2><span>Add</span> to your cart &nbsp;<i class="fa fa-shopping-bag"></i></h2>
    </section>

    <?php
    $ret2 = mysqli_query($con, "Select cart.*,books.* From cart 
                                    INNER JOIN books ON cart.id=books.id");
    ?>

    <form action="#" method="post">
        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                        <!-- <td>Quantity</td> -->
                    </tr>
                </thead>


                <tbody>
                    <?php
                        if(isset($_GET['delid'])){
                            $eid=$_GET['delid'];
                            $query=mysqli_query($con,"delete from cart
                            where cart_id='$eid'");
                            echo "<script>alert('Record Deleted successfully');</script>";
                            echo "<script>window.location.href='cart.php'</script>";
                        }
                        $total=0;
                    while ($result1 = mysqli_fetch_array($ret2)) {
                    ?>
                    <tr>
                        <td><a href="cart.php?delid=<?php echo $result1['cart_id'];?>" onclick="return confirm('Do you really want to delete');" style="color:red"><i class="fal fa-times-circle"></i></a></td>
                        <td><img src="../img/<?php echo $result1['img']; ?>"></td>
                        <td><?php echo $result1['MName']; ?></td>
                        <td>৳<?php echo $result1['Price']; 
                               $pro=$result1['Price'];
                               $total= $total + $pro; ?></td>
                        <!-- <td><input type="number" value="1"></td> -->
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </form>

    <!-- <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="fal fa-times-circle"></i></a></td>
                    <td><img src="../img/products/slow-down.jpg" alt=""></td>
                    <td>Slow Down</td>
                    <td>৳1540</td>
                    <td><input type="number" value="1"></td>
                    <td>৳1540</td>
                </tr>

                <tr>
                    <td><a href="#"><i class="fal fa-times-circle"></i></a></td>
                    <td><img src="../img/products/vegetarian-salad-dinner.jpg" alt=""></td>
                    <td>Vegetarian Salad for Dinner</td>
                    <td>৳980</td>
                    <td><input type="number" value="1"></td>
                    <td>৳980</td>
                </tr>

                <tr>
                    <td><a href="#"><i class="fal fa-times-circle"></i></a></td>
                    <td><img src="../img/products/over-and-under-the-snow.jpg" alt=""></td>
                    <td>Over & Under the Snow</td>
                    <td>৳1230</td>
                    <td><input type="number" value="1"></td>
                    <td>৳1230</td>
                </tr>
            </tbody>
        </table>
    </section> -->


    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>৳<?php echo $total;?></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>৳<?php echo $total;?></strong></td>
                </tr>
            </table>
            <button class="normal" onclick="window.location.href='ptype.php';">Proceed to Checkout</button>
        </div>
    </section>

    <script>
		var modal = document.getElementById('id01');
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>


<?php
include('../footer/footer.php');
?>

</body>

</html>