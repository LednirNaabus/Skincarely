<?php
include "includes/main/header.php";
include 'includes/connection/db_connection.php';
$id_exists = true;
$following = false;
$result = mysqli_query($link, "SELECT * FROM shops WHERE shop_id = " . $_GET['shop_id']);
$shopInfo = mysqli_fetch_array($result);
$result = mysqli_query($link, "SELECT * FROM vendors WHERE shop_id = " . $_GET['shop_id']);
$vendorInfo = mysqli_fetch_array($result);

$followers = explode('|', $shopInfo['shop_reactions']);
foreach ($followers as $follower) {
    if ($follower == $_SESSION['userID']) {
        $following = true;
    }
}
?>
<div class="wrapper">
    <div class="sidebar">
        <div class="card w-100 mb-2">
            <div class="card-body" style="text-align: center;">
                <div class="row justify-content-center">
                    <div class="image" style="text-align:center">
                        <?php if ($shopInfo['shop_logo'] == NULL) {
                            echo '<img src="dist/img/user.png" class="img-circle" alt="User Image">';
                        } else {
                            echo '<img src="data:image;base64,' . base64_encode($shopInfo['shop_logo']) . '" alt="" style="height:175px"class="img-circle">';
                        }
                        ?>
                    </div>
                </div>
                <div class="row justify-content-center" style="padding-top:30px">
                    <h4><b><?php echo $shopInfo['shop_name'] //Shop name 
                            ?></b>
                        <h4>
                </div>
                <div class="row justify-content-center">
                    <p style="font-size: 15px"><?php echo $shopInfo['shop_motto'] //Shop motto 
                                                ?></p>
                </div>
                <div class="row" style="padding:15px 0 0 15px">
                    <p style="font-size: 15px">Followers: <?php
                                                            echo count($followers) - 1 //Shop followers 
                                                            ?></p>
                </div>
                <div class="row" style="padding-left: 15px">
                    <p style="font-size: 15px"><?php echo $shopInfo['shop_mainbranch'] //Shop location 
                                                ?></p>
                </div>
                <div class="row" style="padding-left: 15px">
                    <p style="font-size: 15px">Look for: <?php echo $vendorInfo['vendor_name'] //Vendor Name 
                                                            ?></p>
                </div>
                <div class="row" style="padding-left: 15px">
                    <p style="font-size: 15px">Vendor Contact: <?php echo $vendorInfo['vendor_email']  //Vendor email 
                                                                ?></p>
                </div>
                <div class="row" style="padding-left: 15px">
                    <p style="font-size: 15px">Skincarely Member since: <?php echo date("Y-m-d", strtotime($shopInfo['date_added'])) //Shop added 
                                                                        ?></p>
                </div>
                <form action="" method="POST">
                    <?php if ($following) {
                        echo '<button type="submit" class="btn btn-primary">Unfollow</button>';
                    } else {
                        echo '<button type="submit" class="btn btn-primary">Follow</button>';
                    } ?>
                </form>
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
                <p><?php echo $shopInfo['shop_description'] //Shop description 
                    ?></p>
            </div>
        </div>
        <div class="card">
            <div class="card-body w-100">
                <b>Overview</b>
                <div class="row">
                    <div class="col-6">
                        <ul style="list-style-type:none;">
                            <li class="mt-2"><span class="mr-20"><i class="fa-solid fa-phone"></i></span><?php echo $shopInfo['shop_contact'] //Shop contact 
                                                                                                            ?></li>
                            <li class="mt-2"><span class="mr-20"><i class="fa-solid fa-money-bill"></i></span><?php echo $shopInfo['shop_payment'] //Shop payment 
                                                                                                                ?></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul style="list-style-type:none;">
                            <li class="mt-2"><span class="mr-20"><i class="fa-solid fa-location-dot"></i></span><?php echo $shopInfo['shop_mainbranch'] //Shop location 
                                                                                                                ?></li>
                            <li class="mt-2"><span class="mr-20"><i class="fa-solid fa-tag"></i></span>$$$</li>
                        </ul>
                    </div>
                </div>
                <b>Socials</b><br>
                <?php
                $socials = explode(" | ",  $shopInfo['shop_socials']);
                ?>
                <a href="https://www.<?php echo $socials[0] ?>" style="margin-left:40px"><i class="nav-icon fa-brands fa-twitter"></i> <?php echo $socials[0] ?></a>
                <a href="https://www.<?php echo $socials[1] ?>" style="margin-left:40px"><i class="nav-icon fa-brands fa-facebook"></i> <?php echo $socials[1] ?></a>
                <a href="https://www.<?php echo $socials[2] ?>" style="margin-left:40px"><i class="nav-icon fa-brands fa-instagram"></i> <?php echo $socials[2] ?></a>
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
                            <?php
                            $pickups = explode(" / ",  $shopInfo['shop_pickupareas']);
                            foreach ($pickups as $loc) {
                                echo '<li class="mt-2">' . $loc . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-6" style="padding-left:20px;">
                        Delivery Options:
                        <ul>
                            <?php
                            $delops = explode(" / ",  $shopInfo['shop_delivery']);
                            foreach ($delops as $ops) {
                                echo '<li class="mt-2">' . $ops . '</li>';
                            }
                            ?>
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
                    <?php
                    $result = mysqli_query($link, "SELECT * FROM items WHERE shop_id = " . $_GET['shop_id']);
                    if ($result != null) {
                        while ($itemInfo = mysqli_fetch_array($result)) {
                    ?>
                            <div class="card w-25 mr-40 ml-40">
                                <a style="color:black" href="item_portal.php?item_id=<?php echo $itemInfo['item_id'] ?>">
                                    <div class="card-body" style="text-align:center">
                                        <div class="row justify-content-center">
                                            <div class="image" style="text-align:center">
                                                <?php if ($itemInfo['item_image'] == NULL) {
                                                    echo '<img src="dist/img/user.png" class="img-circle" alt="User Image">';
                                                } else {
                                                    echo '<img src="data:image;base64,' . base64_encode($itemInfo["item_image"]) . '" class="img-circle" style="max-width: 200px;"alt="User Image">';
                                                } ?></div>
                                        </div>
                                        <br>
                                        <br>
                                        <p><b><?php echo $itemInfo['item_name']; ?></b></p>
                                        <p><?php echo $itemInfo['item_category']; ?></p>
                                        <p><?php echo $itemInfo['item_description']; ?></p>
                                    </div>
                                </a>
                            </div>

                    <?php }
                    } else {
                        echo "<p> No items added yet.</p>";
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "includes/main/footer.php"; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $follower_id = $_SESSION['userID'];
    $follow = $shopInfo['shop_reactions'];
    $shop_id = $shopInfo['shop_id'];
    $shop_name = $shopInfo['shop_name'];
    if (!$following) {
        $follow .= "|" . $follower_id;
        $followed = mysqli_query($link, "UPDATE shops SET shop_reactions = '$follow' WHERE shop_id = " . $_GET['shop_id']);
        $customer_shops_following = mysqli_query($link, "UPDATE customers SET following_shops=CONCAT(following_shops, ', $shop_name') WHERE customer_id = ".$_SESSION['userID']);
        if ($followed) {
            unset($_POST);
            echo "<script>window.location.href='';</script>";
        }
    } else {
        $unfollow = trim($follow, "|" . $follower_id);
        $unfollowed = mysqli_query($link, "UPDATE shops SET shop_reactions = '$unfollow' WHERE shop_id = " . $_GET['shop_id']);
        if ($unfollowed) {
            unset($_POST);
            echo "<script>window.location.href='';</script>";
        }
    }
}
?>