<?php
require 'config.php';
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $type = $_POST["type"];
    $info = $_POST["info"];
    $number = $_POST["number"];
    $numlength = strlen((string)$number);             
    if(strlen($name) > 10){
        echo
        "<script> alert('Name length should be less than 10 letters'); </script>";
    }
    else{
        if(strlen($info) > 20 || strlen($info) < 8){
            echo
            "<script> alert('INFO length should be less than 20 and more than 8letters'); </script>";
        }
        else{
            if($numlength == 11){
                $query = "INSERT INTO orders VALUES('','$name','$type','$info','$number')";
                mysqli_query($conn, $query);
                echo
                "<script> alert('Registration Successful'); </script>";
                }
            else{
                echo
                "<script> alert('NUmber should be 11 digits long'); </script>";
            }
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
    <script src="valid.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="https://www.whatsapp.com/?lang=ru" target="_blank"><img class="whatsapp" href="https://www.whatsapp.com/?lang=ru" src="img/w.png"></a>
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
        <br>
        <br>
        <br>
        <div class="containerq">
            <div class="1" style="width:100%">
                <div class="content">
                    <div class="info">
                        <h2>Best deeler in <br><span>Qazaqstan</span><br><span>Be Mobile</span></h2>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p>TOPCar is a company that specializes in selling high-quality cars to customers looking for reliable and stylish vehicles. We have a wide range of cars to choose from, including sedans, SUVs, trucks, and sports cars. Our inventory is constantly being updated with the latest models from top manufacturers, so you can be sure to find the perfect car for your needs.</p>
                </div>
            </div>
            <div class="form" id ="form">
                <h2>Choose your car</h2>
                <form class="" action="" method="post" autocomplete="off" >
                    <select id="type" class="button" style="margin-left: 5%;"name="type" required value="">
                        <option value="NEW">BRAND New</option>
                        <option value="FOREIGN">Foreign</option>
                        <option value="MILLAGE">Millage</option>
                    </select>
                    <input type="text" name="name" id = "name" required value="" placeholder="  Write your name"class="search"> <br>
                    <input type="text" name="info" id = "info" required value=""placeholder=" Write CAR'S BRAND AND MODEL" class="search">> <br>
                    <input type="number" name="number" id = "number" required value="" placeholder="  Write your number" class="search"> <br>
                    <button type="submit" name="submit" class="submit-btn">SEND Request</button>
                    <div id="error"></div>
                </form>
            </div>
        </div>
    </section>
    <br>
        <div class="containers" style="margin-left:4%">
            <div class="d">
                <img src="img/l.jpg" alt="" class="img1">
                <h2>Find your new car</h2>
            </div>
            <div class="d">
                <img src="img/c.jpg" alt="" class="img2">
                <h2>Auto loan 8%</h2>
            </div>
            <div class="d">
                <img src="img/m.jpg" alt="" class="img2">
                <h2>Sell your car at the market price</h2>
            </div>
            <div class="d">
                <img src="img/CAT.png" alt="" style="width:80%;height:55%">
                <h2>Buy your brand new Car</h2>
            </div>
            <div class="d">
                <img src="img/r.png" alt="" class="img3">
                <h2>Register</h2>
            </div>
        </div>
            <div style="border-bottom:solid;border-bottom-color:azure;margin-bottom:10px;margin-top:10px;margin-left:9%;margin-right:10%">
        </div>
        <div class="containers" style="margin-left:4%">
            <div class="containerf">
                <div class="card">
                    <img src="img/4.jpg" alt="Card Image">
                    <p>YOUR TEXT HERE</p>
                </div>
                <div class="card">
                    <img src="img/4.jpg" alt="Card Image">
                    <p>YOUR TEXT HERE</p>
                </div>
            </div>
            <div class="containerf">
                <div class="card">
                    <img src="img/4.jpg" alt="Card Image">
                    <p>YOUR TEXT HERE</p>
                </div>
                <div class="card last">
                    <img src="img/4.jpg" alt="Card Image">
                    <p>YOUR TEXT HERE</p>
                </div>
            </div>
        </div>
        <div class="containers" style="margin-left:4%">
            <div class="containerf">
                <div class="card">
                    <img src="img/4.jpg" alt="Card Image">
                    <p>YOUR TEXT HERE</p>
                </div>
                <div class="card">
                    <img src="img/4.jpg" alt="Card Image">
                    <p>YOUR TEXT HERE</p>
                </div>
            </div>
            <div class="containerf">
                <div class="card">
                    <img src="img/4.jpg" alt="Card Image">
                    <p>YOUR TEXT HERE</p>
                </div>
                <div class="card  last">
                    <img src="img/4.jpg" alt="Card Image">
                    <p>YOUR TEXT HERE</p>
                </div>
            </div>
        </div>
        <p></p>
        <p class="credit">Credit 0% <br>for 2years</p>
        <div style="border-bottom:solid;border-bottom-color:azure;margin-bottom:10px;margin-top:10px;margin-left:9%;">
        </div>
        <div class="containeri">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="r1">
                    <input type="radio" name="radio-btn" id="r2">
                    <input type="radio" name="radio-btn" id="r3">
                    <input type="radio" name="radio-btn" id="r4">
                    <div class="slide first">
                        <img src="img/Сamry1.jpg" alt="" class="cars">
                    </div>
                    <div class="slide">
                        <img src="img2/1.jpg" alt="" class="cars">
                    </div>
                    <div class="slide">
                        <img src="img2/lexus.jpg" alt="" class="cars">
                    </div>
                    <div class="slide">
                        <img src="img2/duster.jpg" alt="" class="cars">
                    </div>
                    <div class="nava-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>
            </div>
            <div class="nava-manual">
                <label for="r1" class="manual-btn"></label>
                <label for="r2" class="manual-btn"></label>
                <label for="r3" class="manual-btn"></label>
                <label for="r4" class="manual-btn"></label>
            </div>
        </div>
        <div style="border-bottom:solid;border-bottom-color:azure;margin-bottom:10px;margin-top:10px;margin-left:2%;"></div>
        <div class="containeri">
            <a class="dg-widget-link" href="http://2gis.kz/almaty/profiles/9429940000799989,70000001044642729,70000001042393451/center/76.66845560073854,43.207463218362534/zoom/18?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":1000,"height":650,"borderColor":"#a3a3a3","pos":{"lat":43.207463218362534,"lon":76.66845560073854,"zoom":18},"opt":{"city":"almaty"},"org":[{"id":"9429940000799989"},{"id":"70000001044642729"},{"id":"70000001042393451"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;"></noscript>
            <div class="desc">
                <h1>Our contacts</h1>
                <p>
                    <h2>Telephone number</h2>
                    <h3>+7 747 754 87 33</h3>
                    <h3>+7 702 345 33 66</h3>
                    <h3>+7 707 744 44 00</h3>
                </p>
                <p>
                    <h2>Email address</h2>
                    <h3>TopCar@gmail.com</h3>
                    <h3>TopCar@mail.com</h3>
                </p>
                <p>
                    <h2>Social Medias</h2>
                    <img src="" alt="">
                </p>
            </div>
        </div>
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
    <script>
                    const toTop = document.querySelector(".whatsapp");

                    window.addEventListener("scroll", () =>{
                     if (window.pageYOffset > 130) {
                     toTop.classList.add("active");
                    } else {
                     toTop.classList.remove("active");
                           }
                    })
    </script>
</body>
</html>
