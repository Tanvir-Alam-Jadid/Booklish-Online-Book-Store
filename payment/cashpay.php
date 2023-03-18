<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Payment</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="../img/favicon/512 x 512.png"/>
    <!--favicon end-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="pay.css">
</head>

<body>

    <div class="container">
        <form action="">

            <div class="row">

                <div class="col">

                    <h3 class="title">Billing Address</h3>

                    <div class="inputbox">
                        <span>Full Name</span>
                        <input type="text" placeholder="Your Name">
                    </div>

                    <div class="inputbox">
                        <span>Email</span>
                        <input type="email" placeholder="example@example.com">
                    </div>

                    <div class="inputbox">
                        <span>Address</span>
                        <input type="text" placeholder="Home - Street- Locality">
                    </div>

                    <div class="felx">
                        <div class="inputbox">
                            <span>Phone Number</span>
                            <input type="text" placeholder="+8801*******">
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="Proceed to Checkout" id="submit-btn" class="normal" >
            <input value="Go back" id="back-btn" class="normal" onclick="window.location.href='../pages/ptype.php';">
        </form>

    </div>

</body>

</html>