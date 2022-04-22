<?php
include "includes/main/header.php";
include 'includes/connection/db_connection.php';
// $liked = false;
// $result = mysqli_query($link, "SELECT * FROM items WHERE item_id = " . $_GET['item_id']);
// $itemInfo = mysqli_fetch_array($result);
// $result = mysqli_query($link, "SELECT * FROM vendors WHERE shop_id = " . $itemInfo['shop_id']);
// $shopInfo = mysqli_fetch_array($result);

// $likes = explode('|', $itemInfo['item_reactions']);
// foreach ($likes as $like) {
//     if ($like == $_SESSION['userID']) {
//         $liked = true;
//     }
// }
// 
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
                    <h3 class="my-3">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                    <hr>
                    <h4>Price:</h4>
                    <div class="bg-gray py-2 px-3 mt-2">
                        <h2 class="mb-0">
                            $80.00
                        </h2>
                        <h4 class="mt-0">
                            <small>Ex Tax: $80.00 </small>
                        </h4>
                    </div>
                    <div class="mt-4"> 
                        <div class="btn btn-primary btn-lg btn-flat">
                            <i class="fas fa-heart fa-lg mr-2"></i>
                            Add to Wishlist
                        </div>
                    </div>
                    <nav class="w-100 mt-5">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="false">About the shop</a>
                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Shop Overview</a>
                            <a class="nav-item nav-link active" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="true">Shop Options</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus. </div>
                        <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
                        <div class="tab-pane fade active show" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
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
    $follow = $shopInfo['shop_reactions'];
    if (!$following) {
        $follow .= "|" . $follower_id;
        $followed = mysqli_query($link, "UPDATE shops SET shop_reactions = '$follow' WHERE shop_id = " . $_GET['shop_id']);
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