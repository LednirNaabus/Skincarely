<?php
include "includes/main/header.php";
include 'includes/connection/db_connection.php';
$liked = false;
$result = mysqli_query($link, "SELECT * FROM items WHERE item_id = " . $_GET['item_id']);
$itemInfo = mysqli_fetch_array($result);
$result = mysqli_query($link, "SELECT * FROM shops WHERE shop_id = " . $itemInfo['shop_id']);
$shopInfo = mysqli_fetch_array($result);

$likes = explode('|', $itemInfo['item_reactions']);
foreach ($likes as $like) {
    if ($like == $_SESSION['userID']) {
        $liked = true;
    }
}

?>
<div class="my-5 mx-5">
    <div class="card py-3 px-3 my-2 mx-2">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="col-12">
                        <img src="dist/img/user.png" class="product-image" alt="Product Image">
                    </div>
                    <div class="col-12 product-image-thumbs">
                        <div class="product-image-thumb active"><img src="dist/img/user.png" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="dist/img/user.png" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="dist/img/user.png" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="dist/img/user.png" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="dist/img/user.png" alt="Product Image"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3"><?php echo $itemInfo['item_name'] ?></h3>
                    <p><?php echo $itemInfo['item_description'] ?></p>
                    <hr>
                    <h4>Price:</h4>
                    <div class="bg-gray py-2 px-3 mt-2">
                        <h2 class="mb-0">
                            Php. <?php echo $itemInfo['item_price'] ?>
                        </h2>
                    </div>
                    <div class="mt-4">
                        <form action="" method="POST">
                            <?php if ($liked) { 
                                echo '<button type="submit" class="btn btn-primary"><i class="fas fa-heart fa-lg mr-2"></i>
                                    Remove from Wishlist</button>';
                            } else {
                                echo '<button type="submit" class="btn btn-primary"><i class="fas fa-heart fa-lg mr-2"></i>
                                    Add to Wishlist</button>';
                            } ?>
                        </form>
                        Likes : <?php echo count($likes)-1 ?>
                    </div>
                    <nav class="w-100 mt-5">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link" id="product-desc-tab" data-toggle="tab" href="#shop" role="tab" aria-controls="product-desc" aria-selected="false">About the shop</a>
                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#shop_overview" role="tab" aria-controls="product-comments" aria-selected="false">Shop Overview</a>
                            <a class="nav-item nav-link active" id="product-rating-tab" data-toggle="tab" href="#shop_options" role="tab" aria-controls="product-rating" aria-selected="true">Shop Options</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                            <b>About Us</b>
                            <br><br>
                            <p><?php echo $shopInfo['shop_description'] //Shop description 
                                ?></p>
                        </div>
                        <div class="tab-pane fade" id="shop_overview" role="tabpanel" aria-labelledby="shop_overview-tab">
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
                            <a href="https://www.<?php echo $socials[0] ?>"><i class="nav-icon fa-brands fa-twitter"></i> <?php echo $socials[0] ?></a>
                            <br> <a href="https://www.<?php echo $socials[1] ?>"><i class="nav-icon fa-brands fa-facebook"></i> <?php echo $socials[1] ?></a>
                            <br> <a href="https://www.<?php echo $socials[2] ?>"><i class="nav-icon fa-brands fa-instagram"></i> <?php echo $socials[2] ?></a>

                        </div>
                        <div class="tab-pane fade active show" id="shop_options" role="tabpanel" aria-labelledby="shop_options-tab">
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
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include "includes/main/footer.php"; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $follower_id = $_SESSION['userID'];
    $like = $itemInfo['item_reactions'];
    if (!$liked) {
        $like .= "|" . $follower_id;
        $liking = mysqli_query($link, "UPDATE items SET item_reactions = '$like' WHERE item_id = " . $_GET['item_id']);
        if ($liking) { 
            unset($_POST);
            echo "<script>window.location.href='';</script>";
        }
    } else {
        $unlike = trim($like, "|" . $follower_id);
        $unliking = mysqli_query($link, "UPDATE items SET item_reactions = '$unlike' WHERE item_id = " . $_GET['item_id']);
        if ($unliking) {
            unset($_POST);
            echo "<script>window.location.href='';</script>";
        }
    }
}
?>