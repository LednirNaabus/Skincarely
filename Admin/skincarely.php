<?php
// Starting session
session_start();
 
// Removing session data
//if(isset($_SESSION["welcomename"])){
//    unset($_SESSION["welcomename"]);
//}

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely</title>

    <link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" >

    <style>
        body{
            background-color: #F3F2F0;
        }
        .navbar {
        overflow: hidden;
        background-color: #F3F2F0;
        position: fixed;
        top: 0;
        width: 100%;
        font-family: Poppins;
        font-size: 10px;
        z-index: 1;
        }

        .navbar a {
        float: left;
        display: block;
        color: #6F645E;
        text-align: center;
        padding: 18px 16px;
        text-decoration: none;
        font-size: 15px;
        }

        .navbar a:hover {
        background: #ddd;
        color: black;
        }

        .main {
        padding-top: 50px;
        height: 1500px;
        background-color: #F3F2F0;
        }

        .startbutton {
            background-color: #8C5652;
            padding: 13px 15px;
			border: 1px solid #dadce0;
			font-size: 16px;
			margin-bottom: 24px;
            font-family: Poppins;
            margin-left:63px; 
            width:40%; 
            display:inline;
        }

        .grid-container {
        display: grid;
        grid-template-columns: auto auto;
        padding: 10px;
        
        }
        .grid-item {
        background-color: #F3F2F0;
        border: 1px solid #F3F2F0;
        padding: 20px;
        font-size: 20px;
        text-align: center;
        color: #2E2C2B;
        }

        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        .slideshow-container {
        max-width: 500px;
        position: relative;
        margin: auto;
        }

        .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
        background-color: #717171;
        }

        html {
        scroll-behavior: smooth;
        }
        
        .hpcontainer {
        position: relative;
        text-align: center;
        color: white;
            }

        .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        }

        .hpsection {
            font-family: Poppins; 
            text-align:center; 
            font-size:50px; 
            margin-bottom:0%;
        }

        .hpsub {
            font-family: Poppins; 
            text-align:center; 
            font-size:20px; 
            margin-top:0%;
        }

    </style>
</head>
<body>

<div class="navbar">
    <a href="skincarely.php" style="text-align: left; font-family: Calistoga; padding-right: 20px; font-size:17px">SKINCARELY</a>
    <a href="skincarely.php">Home</a>
    <a href="#about">About</a>
    <a href="#team">Meet the Team</a>
    <a href="#contact">Contact</a>
</div>

<div class="main">
    <div class="grid-container">
        <div class="grid-item" style="text-align:left;">
            <h1 style="font-family: Poppins; text-align:left; font-size:100px; margin-bottom:0%; margin-left:50px;">SKINCARELY</h1>
            <h4 style="font-family: Poppins; text-align:left; font-size:40px; margin-top:0%; margin-left:55px">Skin and Beauty</h4>
            <hr style="width:90%; margin-left:60px;"> <br> <br>
            <button class="startbutton"><a href="sellerSignUp.php" style="text-decoration: none; color:white">Get Started</a></button>
            <button class="startbutton"><a href="sellerLogin.php" style="text-decoration: none; color:white">Sign In</a></button>
        </div>

        <div class="grid-item">
            <div class="slideshow-container">
                <div class="mySlides">
                <img src="ss1.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                <img src="ss2.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                <img src="ss3.jpg" style="width:100%">
                </div>
            </div>
            <br>
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                </div>

                <script>
                    let slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        let i;
                        let slides = document.getElementsByClassName("mySlides");
                        let dots = document.getElementsByClassName("dot");
                        if (n > slides.length) {slideIndex = 1}    
                        if (n < 1) {slideIndex = slides.length}
                        for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                    }
                </script>
            </div>
    </div>

    <div class="grid-item" style="text-align:center; margin: 10px" id="about">
        <div class="hpcontainer">
            <img src="img1.jpg" alt="Snow" style="width:80%;">
                
            <div class="centered"><h1 class="hpsection">About</h1> <br>
                    <p class="hpsub">Skincarely is your one-stop window shop. 
                    Here, you can take a look at the plethora of local shops here in the country and view the products that they offer. BLAH BLAH.</p>
            </div>
        </div>      
    </div>

    <div class="grid-item" style="text-align:center; margin: 10px" id="team">
        <div class="hpcontainer">
            <img src="img2.jpg" alt="Snow" style="width:80%;">
                
            <div class="centered">
                <h1 class="hpsection">Meet the Team</h1> <br>
                <p class="hpsub">Name, Name, Name, etc.</p>
            </div>
        </div>      
    </div>
            

    <div class="grid-item" style="text-align:center; margin: 10px" id="contact">
            <h1 class="hpsection">Contact</h1> <br>
            <p class="hpsub">Any recommendations to make our site better? Contact us now!</p>
            <br>
            <form action="skincarely.php">
                <input type="email" id="email" name="email" placeholder="Your Email" style="outline:0%; border-width: 0 0 2px; border-color:#6F645E; width:35%; background-color: #F3F2F0; font-family: Poppins;">
                <input type="submit" value="&#187">
            </form>
            <br><br><br><br><br><br><br><br>
    </div>
</div>



</body>
</html>
