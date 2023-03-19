<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'booklish';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM help ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminpanel.css">
    <title>Document</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="../img/favicon/512 x 512.png"/>
    <!--favicon end-->
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="library-outline"></ion-icon></ion-icon></span>
                        <span class="title">Booklish</span>
                    </a>
                </li>

                <li>
                    <a href="adminpanel.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="adminpanelso.php">
                        <span class="icon"><ion-icon name="bag-add"></ion-icon></span>
                        <span class="title">Special Order</span>
                    </a>
                </li>

                <li>
                    <a href="adminpanelhelp.php">
                        <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                        <span class="title">Help Message</span>
                    </a>
                </li>

                <li>
                    <a href="/Booklish/index.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign out</span>
                    </a>
                </li>

            </ul>
        </div>

        <!--main-->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!-- userIMG-->
                <div class="user">
                    <img src="../img/user_dp/userphoto.png">
                </div>
            </div>

            <!-- Detail list-->
            <div class="details">
                <div class="recentorders">
                    <div class="cardheader">
                        <h2>
                            Help Messages
                        </h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td> 
                                <td>Email</td> 
                                <td>Subject</td>
                                <td>Message</td> 
                            </tr>
                        </thead>
                        <tbody>
            <?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
                <tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['subject'];?></td>
				<td><?php echo $rows['message'];?></td>
			</tr>
        </tbody>
			<?php
				}
			?>
                    </table>
                </div>
            </div>



        </div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script>
    // Menu Toggle
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick = function(){
        navigation.classList.toggle('active');
        main.classList.toggle('active')
    }
    



    //add hovers class in selected list item
    let list = document.querySelectorAll(".navigation li");
    function activeLink(){
        list.forEach((item) =>
        item.classList.remove('hovered'));
        this.classList.add('hovered');
    }
    list.forEach((item) =>
    item.addEventListener('mouseover',activeLink));
</script>
</body>
</html>