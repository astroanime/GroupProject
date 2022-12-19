<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopCar.kz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section style="background-image: url(img/3.jpg);
    overflow: hidden;">
        <input type="checkbox" id="check" style="display:none;">
        <header>
            <h2><a href="#" class=" logo">Logo</a></h2>
            <div class="navbar" style="margin-left:7%">
                <a href="home.php">Home</a>
                <a href="NewCars.html">New Cars</a>
                <a href="AutoNews.html">AutoNews</a>
                <a href="AutoCredit.html">Auto credit</a>
                <a href="SELL.html">Sell u car</a>
                <a href="registration.php">Register</a>
                <a href="login.php">Login</a>
            </div>
            <label for="check">
                <div class="container">
                    <img src="img/car.png" alt="car" style="height:70px;width:70px;border-radius:25%;" class="list">
                    <img src="img/close.png" alt="close" style="height:70px;width:70px;border-radius:25%;" class="=close">
                </div>
            </label>
        </header>
    <h1>Welcome <?php echo $row["name"]; ?></h1>
    <a href="logout.php">Logout</a>
<footer class="footer"> 
        <div class="containerr"> 
            <div class="row"> 
                <div class="footer-col"> 
                    <h4>About us</h4> 
                    <ul> 
                        <li><a href="SELL.html">The TOPCar</a></li> 
                        <li><a href="#new">OUR Contacts</a></li> 
                        <li><a href="#information">Services</a></li>  
                    </ul> 
                </div> 
                <div class="footer-col"> 
                    <h4>Main Pages</h4> 
                    <ul> 
                        <li><a href="NewCars.html">New Cars</a></li> 
                        <li><a href="AutoNews.html">Auto News</a></li> 
                        <li><a href="#form">Choose your dream Car</a></li> 
                    </ul> 
                </div> 
                <div class="footer-col"> 
                    <h4>BE With Us be Top</h4> 
                    <ul> 
                        <li><a href="registration.php">Register</a></li> 
                        <li><a href="login.php">Login</a></li> 
                        <li><a href="https://go.2gis.com/jqla1a">COme to see us</a></li>
                    </ul> 
                </div> 
            </div> 
        </div> 
    </footer>
</body>
</html>
