<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="adminlogin.css">
	<title>Admin Login Page</title>
	<!--favicon-->
    <link rel="shortcut icon" type="image/png" href="../img/favicon/512 x 512.png"/>
    <!--favicon end-->
</head>

<body>
	<section id="middle"> 
        <img width="70%" height="70%" src="../img/adminlogin.svg" alt="">
        <form action="valid.php" method="post">
            <div class="login-box">
                <h1>Admin <span>Login</span> </h1>
    
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Username"
                            name="username" value="">
                </div>
    
                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password"
                            name="password" value="">
                </div>
    
                <input class="button" type="submit"
                        name="login" value="Sign In">
            </div>
        </form>
    </section>
</body>

</html>
