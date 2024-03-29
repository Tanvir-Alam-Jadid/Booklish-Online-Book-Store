<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Payment</title>
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
                        <span>Bank</span>
                        <select class="bankpay">
                        <option>Select Your Bank</option>
                        <option>AB Bank</option>
                        <option>Agrani Bank</option>
                        <option>Al-Arafah Bank</option>
                        <option>Bank Asia</option>
                        <option>Brac Bank</option>
                        <option>City Bank</option>
                        <option>Dutch-Bangla Bank</option>
                        <option>Eastern Bank</option>
                        <option>EBL Bank</option>
                        <option>HSBC Bank</option>
                        <option>IFIC Bank</option>
                        <option>Islami Bank</option>
                        <option>Meghna Bank</option>
                        <option>One Bank</option>
                        <option>Pubali Bank</option>
                        <option>Standard Chartered Bank</option>
                        <option>UCS Bank</option>            
                    </select>
                        
                    </div>

                    <div class="inputbox">
                        <span>User ID</span>
                        <input type="text" placeholder="Enter Your User ID">
                    </div>

                    <div class="inputbox">
                        <span>Password</span>
                        <input type="password" placeholder="Enter Your Password">
                    </div>
                </div>

                
            </div>
            <input type="submit" value="Login" id="back-btn" class="normal">
            <input value="Go back" id="back-btn" class="normal" onclick="window.location.href='../pages/ptype.php';">
        </form>

    </div>

</body>

</html>