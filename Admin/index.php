<?php
session_unset(); 
include('shared/header.php');
?>
<div class="navbar">
    <a style="margin-left:70px;" href="index.php">Skincarely.ph © 2021. All rights reserved. Version 1.0</a>
</div>
<div class="main" style="margin-bottom: 0px;">
    <div class="grid-container">
        <div class="grid-item" style="text-align:left;">
            <h1 style="font-family: Poppins; text-align:left; font-size:100px; margin-bottom:0%; margin-left:50px;">SKINCARELY</h1>
            <h4 style="font-family: Poppins; text-align:left; font-size:40px; margin-top:0%; margin-left:55px">Skin and Beauty</h4>
            <hr style="width:90%; margin-left:60px;"> <br> <br>
            <button class="startbutton"><a href="signup.php" style="text-decoration: none; color:white">Get Started</a></button>
            <button class="startbutton"><a href="signin.php" style="text-decoration: none; color:white">Sign In</a></button>
        </div>
    </div>
</div>
<?php include('shared/footer.php'); ?>
