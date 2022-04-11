<?php
include "includes/main/header.php";
include 'includes/connection/db_connection.php';
?>
<div class="wrapper">
    <div class="sidebar">
        <div class="card w-100">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="image" style="text-align:center">
                        <img src="dist/img/user.png" class="img-circle" alt="User Image">
                    </div>
                </div>
                <div class="row justify-content-center" style="padding-top:30px">
                    <h4><b>Skincarely Shop</b>
                        <h4>
                </div>
                <div class="row justify-content-center">
                    <p style="font-size: 15px">Your skincare essential</p>
                </div>
                <div class="row" style="padding:30px 0 0 15px">
                    <p style="font-size: 15px">Shop name</p>
                </div>
                <div class="row" style="padding-left: 15px">
                    <p style="font-size: 15px">Shop location</p>
                </div>
                <div class="row" style="padding-left:15px">
                    <p style="font-size: 15px">Shop contact number</p>
                </div>
                <div class="row" style="padding: 0 0 30px 15px">
                    <a href="#" class="nav-icon facebook">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="nav-icon facebook">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="nav-icon facebook">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.sidebar -->
    <!-- Content  -->
    <div class="col-9" style="margin-top:25px;">
        <div class="card">
            <div class="card-body w-100">
                <b>About Us</b>
                <br><br>
                <p>Classy footwear that are proudly made in the Philippines.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body w-100">
                <b>Overview</b>
                <div class="row">
                    <div class="col-6">
                        <ul style="list-style-type:none;">
                            <li class="mt-2"><span class="mr-20"><i class="fa-solid fa-phone"></i></span>(0927) 606-7569;(0999) 393-1866;(0917) 524-9592</li>
                            <li class="mt-2"><span class="mr-20"><i class="fa-solid fa-money-bill"></i></span>GCash; Bank Transfer</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul style="list-style-type:none;">
                            <li class="mt-2"><span class="mr-20"><i class="fa-solid fa-location-dot"></i></span>Mandaluyong</li>
                            <li class="mt-2"><span class="mr-20"><i class="fa-solid fa-tag"></i></span>Shoes; Clothing; Online Store</li>
                        </ul>
                    </div>
                </div>
                <b>Socials</b><br>
                <a href="logout.php" style="margin-left:40px"><i class="nav-icon fa-brands fa-twitter"></i> twitter.com/example</a>
                <a href="logout.php" style="margin-left:40px"><i class="nav-icon fa-brands fa-facebook"></i> facebook.com/example</a>
                <a href="logout.php" style="margin-left:40px"><i class="nav-icon fa-brands fa-instagram"></i> instagram.com/example</a>
                <a href="logout.php" style="margin-left:40px"><i class="nav-icon fa-brands fa-shopify"></i> shopify.com/example</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body w-100">
                <b>Delivery and Pick up</b>
                <br><br>
                <div class="row">
                    <div class="col-6" style="padding-left:20px;">
                        Pickup Areas:
                        <ul>
                            <li class="mt-2">(0927) 606-7569;(0999) 393-1866;(0917) 524-9592</li>
                            <li class="mt-2">GCash; Bank Transfer</li>
                        </ul>
                    </div>
                    <div class="col-6" style="padding-left:20px;">
                        Delivery Options:
                        <ul>
                            <li class="mt-2">Mandaluyong</li>
                            <li class="mt-2">Shoes; Clothing; Online Store</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body w-100">
                <b>Items</b>
                <br><br>
                <div class="row" style="padding: 0 40px 0px 40px;">
                    <div class="card w-25 mr-40 ml-40">
                        <div class="card-body" style="text-align:right">
                            <div class="row justify-content-center">
                                <div class="image" style="text-align:center">
                                    <img src="dist/img/user.png" class="img-circle" alt="User Image">
                                </div>
                            </div>
                            <div class="row justify-content-center" style="padding-top:30px">
                                <h4><b>Skincarely Product</b></h4>
                                <p>Description of the product</p>
                                <button class="btn btn-primary" type="button">View Product</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/main/footer.php"; ?>