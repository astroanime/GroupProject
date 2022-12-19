<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];             
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username or Email Has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
        $query = "INSERT INTO users VALUES('','$name','$username','$email','$password')";
        mysqli_query($conn, $query);
        echo
        "<script> alert('Registration Successful'); </script>";
        }
        else{
        echo
        "<script> alert('Password Does Not Match'); </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopCar.kz</title>
    <script></script>
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
        <div class="form-holder">
            <h2>Registration</h2>
            <form class="" action="" method="post" autocomplete="off" >
                <label for="name">Name : </label>
                <input type="text" name="name" id = "name" required value=""> <br>
                <label for="username">Username : </label>
                <input type="text" name="username" id = "username" required value=""> <br>
                <label for="email">Email : </label>
                <input type="email" name="email" id = "email" required value=""> <br>
                <label for="password">Password : </label>
                <input type="password" name="password" id = "password" required value=""> <br>
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
                <div class="container">
                    <button type="submit" name="submit" class="submit-btn">Register</button>
                    <button class="submit-btn"><a href="login.php" style="color:white">Login</a></button>
                </div>
                <div id="error"></div>
            </form>
        </div>
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
