<?php
session_start();
error_reporting(0);
include('../database/dbconnect.php');

if (isset($_POST['Login'])) {
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];
  $query = mysqli_query($con, "select UserID from signup where  email='$Email' && pass='$Password' ");
  $ret = mysqli_fetch_array($query);
  if ($ret > 0) {
    $_SESSION['uid'] = $ret['UserID'];
    header('location:../pages/shop.php');
  } else {
    $msg = "Invalid Details.";
  }
}

if (isset($_POST['signup'])) {
  $uname = $_POST['username'];
  $e_mail = $_POST['email'];
  $psw = $_POST['password'];

  $query1 = mysqli_query($con, "insert into signup(username,email,pass) 
                                values ('$uname','$e_mail','$psw')");
  if ($query1) {
    echo "<script>alert('Signed Up Successfully');</script>";
    header('location:login.php');
  } else {
    $msg = "Something Went Wrong. Please try again.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="login.css" />
    <title>Sign in / Sign up</title>
        <!--favicon-->
        <link rel="shortcut icon" type="image/png" href="../img/favicon/512 x 512.png"/>
        <!--favicon end-->
</head>

<body>

    <section id="header">
     <a href="../index.php"><img src="../img/Hlogo.png" class="logo" alt="" /></a>

      <div>
        <ul id="navbar">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../pages/shop.php">Shop</a></li>
        <li><a href="../pages/about.php">About</a></li>
        <li><a href="../pages/contact.php">Contact</a></li>
        <li><a href="../pages/sorder.php">Special Order</a></li>
        <li><a class="active" href="login.php">Login</a></li>
        <li><a href="../pages/cart.php"><i class="fa fa-shopping-bag"></i></a></li>
        </ul>
      </div>
    </section>

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form" method="post">
            <h2 class="title">Sign in</h2>

            <h6 style="font-size:16px;margin-top:15px;margin-bottom:2px;color:red" align="center"> <?php if ($msg) {
                                                                                                    echo $msg;
                                                                                                  }  ?> </h6>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name='Email' placeholder="Email" />
          </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name='Password' placeholder="Password" />
            </div>

            <input type="submit" value="Login" name='Login' class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>

            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

          <form class="sign-up-form" method="post">
            <h2 class="title">Sign up</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name='username' placeholder="Username" />
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name='email' placeholder="Email" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name='password' placeholder="Password" />
            </div>

            <input type="submit" class="btn" name="signup" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>

            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Sign up to unlock more features and information. Stay connected with us.
            </p>
            <button class="normal" id="sign-up-btn">Sign up</button>
          </div>
          <img src="../img/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p class="another">
              Already has an account? Sign-in to to your account to access your data.
            </p>
            <button class="normal" id="sign-in-btn">Sign in</button>
          </div>
          <img src="../img/login.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <section id="banner" class="section-m1">
      <h4>Free Shipping</h4>
      <h2>Up to <span> 5 km </span> - Free Shipping</h2>
      <button class="normal" onclick="window.location.href='shop.php';">Explore More</button>
    </section>

    <section id="feature" class="section-p1">
      <div class="feature-box">
        <img src="../img/features/f1.png" alt="" />
        <h6>Free Shipping</h6>
      </div>
      <div class="feature-box">
        <img src="../img/features/f2.png" alt="" />
        <h6>Online Order</h6>
      </div>

      <div class="feature-box">
        <img src="../img/features/f3.png" alt="" />
        <h6>Save Money</h6>
      </div>

      <div class="feature-box">
        <img src="../img/features/f5.png" alt="" />
        <h6>Happy Customer</h6>
      </div>

      <div class="feature-box">
        <img src="../img/features/f6.png" alt="" />
        <h6>24/7 Support</h6>
      </div>
    </section>

    <?php
  include('../footer/footer.php');
  ?>

    <script src="login.js"></script>
</body>
</html>
