<?php
include "includes/main/header.php";
include 'includes/connection/db_connection.php';
$id_exists = false;
?>
<div class="wrapper">
    <div class="sidebar">
        <div class="card w-100">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="image" style="text-align:center">
                        <?php if ($shopInfo[8] == NULL) {
                            echo '<img src="dist/img/user.png" class="img-circle" alt="User Image">';
                        } else {
                            echo '<img src="data:image;base64,', base64_encode($userInfo[3]), 'alt="" class="img-circle">';
                        }
                        ?>
                    </div>
                </div>
                <?php
                    if(!empty($_GET['shop_id'])) {
                        $shop_id = $_GET['shop_id'];
                        $_SESSION['shopid'] = $shop_id;
                        $id_exists = true;

                        $query = mysqli_query($link, "SELECT * FROM shops WHERE shop_id='$shop_id'");

                        $count = mysqli_num_rows($query);

                        if($count > 0) {
                            while($row = mysqli_fetch_array($query)) {
                                $shop_name = $row['shop_name'];
                                $shop_desc = $row['shop_description'];
                                $shop_location = $row['shop_mainbranch'];
                                $shop_contact = $row['shop_contact'];

                                $vendor_query = mysqli_query($link, "SELECT * FROM vendors WHERE shop_id='$shop_id'");
                                $count_vendor = mysqli_num_rows($vendor_query);

                                if($count_vendor > 0) {
                                    while($vendor_row = mysqli_fetch_array($vendor_query)) {
                                        $vendor_id = $vendor_row['vendor_id'];
                                        $vendor_name = $vendor_row['vendor_name'];
                                        $vendor_email = $vendor_row['vendor_email'];
                                    }
                                }
                            }
                        }
                    } else {
                        $id_exists = false;

                        echo "Error: Shop not found. Try again later.";
                    }

                    if($id_exists) {
                        echo '<div class="row justify-content-center" style="padding-top: 30px;">';
                        echo '<h4>'.$shop_name.'</h4></div>';
                        echo '<div class="row justify-content-center">
                                <p style="font-size: 15px;">'.$shop_desc.' </p>
                              </div>';
                        echo '<div class="row" style="padding: 30px 0 0 15px;">
                                <p style="font-size: 15px";> <strong> Look for: </strong> ' . $vendor_name . '</p></div>';
                        echo '<div class="row" style="padding-left: 15px;">
                                <p style="font-size: 15px;"> <strong> Contact: </strong> ' . $vendor_email . '</p></div>';
                    }
                ?>
                <!-- <div class="row justify-content-center" style="padding-top:30px">
                    <h4><b>Skincarely Shop</b>
                        <h4>
                </div>
                <div class="row justify-content-center">
                    <p style="font-size: 15px"><?php echo $shopInfo[4] //Shop description ?></p>
                </div>
                <div class="row" style="padding:30px 0 0 15px">
                    <p style="font-size: 15px"><?php echo $shopInfo[5] //Shop location ?></p>
                </div>
                <div class="row" style="padding-left: 15px">
                    <p style="font-size: 15px">Joined Skincarely since: <?php echo $shopInfo[9] //Shop added ?></p>
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
                </div> -->
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus efficitur tempor. Praesent condimentum quam ac viverra volutpat. Cras luctus ipsum urna, sit amet condimentum leo luctus at. Vestibulum interdum odio nec nisl sollicitudin ullamcorper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce scelerisque arcu dolor, in vestibulum ante tincidunt non. Nam tincidunt est non arcu posuere dapibus. Integer tristique magna eu nibh accumsan bibendum. Suspendisse nec nibh felis.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body w-100">
                <b>Overview</b>
                <div class="row">
                    <div class="col-6">
                        <ul style="list-style-type:none;">
                            <li class="mt-2"><span class="mr-20"><i class="fa-solid fa-phone"></i></span>(0927) 606-7569</li>
                            <li class="mt-2"><span class="mr-20"><i class="fa-solid fa-money-bill"></i></span>Lorem ipsum dolor sit amet; Lorem ipsum dolor</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul style="list-style-type:none;">
                            <li class="mt-2"><span class="mr-20"><i class="fa-solid fa-location-dot"></i></span>Lorem ipsum</li>
                            <li class="mt-2"><span class="mr-20"><i class="fa-solid fa-tag"></i></span>dolor sit amet</li>
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
                            <li class="mt-2">Lorem ipsum </li>
                            <li class="mt-2">dolor sit amet</li>
                        </ul>
                    </div>
                    <div class="col-6" style="padding-left:20px;">
                        Delivery Options:
                        <ul>
                            <li class="mt-2">Lorem ipsum dolor sit amet</li>
                            <li class="mt-2">Lorem ipsum dolor sit amet</li>
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
                                <b>Skincarely Product</b>
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