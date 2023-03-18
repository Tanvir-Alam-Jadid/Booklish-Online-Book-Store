<?php
session_start();
error_reporting(0);
include('../database/dbconnect.php');

if(isset($_POST['Submit'])){
    $name=$_POST['name'];
    $e_mail=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];


    $query1=mysqli_query($con, "insert into help(name,email,subject,message) 
                                values ('$name','$e_mail','$subject','$message')" );
    if ($query1) { 
        echo "<script>alert('Message Sent Successfully');</script>";
        header('location:contact.php'); 
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <title>Contact US</title>
            <!--favicon-->
            <link rel="shortcut icon" type="image/png" href="../img/favicon/512 x 512.png"/>
            <!--favicon end-->
</head>

<body>
    <section id="header">
        <a href="../index.php"><img src="../img/Hlogo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="../index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li><a href="sorder.php">Special Order</a></li>
                <li><a href="../login/login.php">Login</a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>   
            </ul>
        </div>

    </section>

    <section id="contact-header" class="about-header">
        <h2><span>Come</span> visit our shop</h2>
        <p><span>▼</span> Support Us</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>Get in Touch</span>
            <h2>Visit Our Shop</h2>
            <h3>Head office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>GEC Circle, Chittagong</p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>booklish@gmail.com</p>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p>+880-1711223344</p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p>09.00am - 11.00pm</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1844.9278876376795!2d91.82045425788547!3d22.359073976880342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd9f3802e919b%3A0x85952e5d63503409!2sGec%20Chittagong!5e0!3m2!1sen!2sbd!4v1677654747390!5m2!1sen!2sbd" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="#" method="post">
            <span>LEAVE A MESSAGE</span>
            <h2>We Love to Hear From You</h2>
            <input type="text" name='name' placeholder="Your Name">
            <input type="text" name='email' placeholder="Email">
            <input type="text" name='subject' placeholder="Subject">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal" name='Submit'>Submit</button>
        </form>


        <div class="people">
            <div>
                <img src="../img/employee.png" alt="">
                <p><span>Asaduzzaman</span>Manager <br>Phone: +880-1845654898 <br>Email: asduzzman@gmail.com</p>
            </div>

            <div>
                <img src="../img/employee.png" alt="">
                <p><span>Anowar Uddin</span>Our Supplier <br>Phone: +880-1945654898 <br>Email: anuddin@gmail.com</p>
            </div>

            <div>
                <img src="../img/employee.png" alt="">
                <p><span>Mannan Hok</span>Seller<br>Phone: +880-1345654898 <br>Email: hoqmannan@gmail.com</p>
            </div>
        </div>
    </section>


    <?php
include('../footer/footer.php');
?>

</body>