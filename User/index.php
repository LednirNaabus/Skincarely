<?php
include 'includes/main/header.php';
include 'includes/connection/db_connection.php';
?>
<main role="main" style="background-color: #F7F3F2;">
    <div class="bg-img">
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <h1 class="display-4">Discover products you'll love</h1>
                    <p>Browse and search for a specific make up or lipstick you like at exclusive prices.</p>
                </div>
                <div class="row">
                    <form action="search.php" method="get">
                        <div class="input-group mb-3">
                            <input type="text" name="query" id="" placeholder="Search item... " class="form-control" aria-label="Search">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.main -->
    <!-- featured vendors/items/shops here -->
    <div class="container">
        <?php
        echo '<h1 class="display-3"> Welcome, ' . htmlspecialchars($_SESSION["user"]) .  '</h1>';
        ?>
        <hr>
        <h1>Explore Shops</h1>
        <div class="card ">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs pull-right" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="promoted-tab" data-toggle="tab" href="#promoted" role="tab" aria-controls="promoted" aria-selected="false">Promoted</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false">New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="search-tab" data-toggle="tab" href="#search-shops" role="tab" aria-controls="search" aria-selected="false">Search</a>
                    </li>
                </ul>
            </div>
            <?php
            //featured shop query
            $shop_query = mysqli_query($link, "SELECT * FROM shops");
            $item_query = mysqli_query($link, "SELECT * FROM items ORDER BY item_id DESC LIMIT 5");

            $shop = mysqli_fetch_array($shop_query);

            $get_shops_following = mysqli_query($link, "SELECT following_shops FROM customers WHERE customer_id=" . $_SESSION['userID']);

            $cf = mysqli_fetch_array($get_shops_following);

            $following = explode(',', $cf['following_shops']);
            $is_following = false;
            $shop_followers = explode("|", $shop['shop_reactions']);

            foreach ($shop_followers as $shop_follow_count) {
                if ($shop_follow_count == $_SESSION['userID']) {
                    $is_following = true;
                }
            }

            ?>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                        <!-- featured shop -->
                        <!-- aka oldest sa shops table -->
                        <div class="card">
                            <?php
                            if ($shop != null) {
                                echo '<a href="merchant_portal.php?shop_id=' . $shop["shop_id"] . '"><img src="data:image/jpeg;base64,' . base64_encode($shop["shop_logo"]) . '" class="card-img-top" /></a>';
                                // $_SESSION['shopid'] = $shop["shop_id"];
                            } else {
                                echo '<p class="card-text"> There is nothing yet. Why don\'t you create a <a href="../Admin/signup.php">vendor account</a> to host a shop?</p>';
                            }
                            ?>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php
                                        if ($shop != null) {
                                            echo $shop["shop_name"];
                                        }
                                    ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="float-left">
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <?php
                                                if ($shop != null) {
                                                    echo $shop["shop_description"] . ' | ' . $shop["shop_mainbranch"];
                                                }
                                            ?>
                                        </small>
                                    </p>
                                </div>
                                <div class="float-right">
                                    <?php

                                    $tmp = array($cf[0]);
                                    // print_r($tmp);
                                    // echo $tmp[0];
                                    $test = explode(",", $tmp[0]);
                                    // echo $test[1]; // Will print out the first shop_name in the array following_shops (in this case "Pink Eme")
                                    if ($is_following) {
                                        echo '<span class="badge bg-success" style="color: #FFF;">Following</span>';
                                    } else {
                                        echo '<span class="badge bg-secondary" style="color: #FFF;">Not Following</span>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="promoted" role="tabpanel" aria-labelledby="promoted-tab">
                        <!-- promoted -->
                        <!-- shops with most reactions are promoted -->
                        <!--
                        
                        To do here:
                        - select shop with most reactions
                        -->
                        <div class="card">
                            <?php
                            if ($shop != null) {
                                $promoted_query = mysqli_query($link, "SELECT * FROM shops ORDER BY LENGTH(shop_reactions) DESC LIMIT 1");

                                // count shop with most shop_reactions
                                // display shop with most shop_reaction
                                while ($row = $promoted_query->fetch_assoc()) {
                                    $exploded = explode('|', $row['shop_reactions']);
                                    $featured_num_followers = count($exploded) - 1;
                                    $featured_shopname = $row['shop_name'];
                                    $featured_shopbranch = $row['shop_mainbranch'];
                                    echo '<a href="merchant_portal.php?shop_id=' . $row["shop_id"] . '"><img src="data:image/jpeg;base64,' . base64_encode($row["shop_logo"]) . '" class="card-img-top" /></a>';
                                }
                            } else {
                                echo '<p class="card-text"> There is nothing yet. Why don\'t you create a <a href="../Admin/signup.php">vendor account</a> to host a shop?</p>';
                            }
                            ?>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php
                                        
                                    ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="float-left">
                                    <small class="text-muted">
                                        <?php //shop info
                                            echo $featured_shopname . ' | ' . $featured_shopbranch;
                                        ?>
                                    </small>
                                </div>
                                <div class="float-right">
                                    <?php
                                        echo '<span class="badge bg-info float-right" style="color: #FFF;">' . $featured_num_followers . ' followers</span>';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                        <!-- new shop -->
                        <!-- display newest from shops -->
                        <div class="card">
                            <?php
                            if ($shop != null) {
                                $shop_query = mysqli_query($link, "SELECT * FROM shops ORDER BY shop_id DESC");
                                $new_shops = mysqli_fetch_array($shop_query);
                                echo '<a href="merchant_portal.php?shop_id=' . $new_shops[0] . '"><img src="data:image/jpeg;base64,' . base64_encode($new_shops[3]) . '" class="card-img-top" /></a>';
                                //[0] = shop_id
                            } else {
                                echo '<p class="card-text"> There is nothing yet. Why don\'t you create a <a href="../Admin/signup.php">vendor account</a> to host a shop?</p>';
                            }
                            ?>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php
                                    if ($new_shops != null) {
                                        echo $new_shops[2];
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="card-body">
                                <div class="float-left">
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Founded:
                                            <?php
                                                if ($new_shops != null) {
                                                    echo $new_shops[14];
                                                }
                                            ?>
                                        </small>
                                    </p>
                                </div>
                                <div class="float-right">
                                    <?php

                                    if ($is_following) {
                                        echo '<span class="badge bg-success" style="color: #FFF;">Following</span>';
                                    } else {
                                        echo '<span class="badge bg-secondary" style="color: #FFF;">Not Following</span>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="search-shops" role="tabpanel" aria-labelledby="search-tab">
                        <form action="search_shop.php" method="get">
                            <div class="input-group mb-3">
                                <input type="text" name="query" id="" placeholder="Search a Shop... " class="form-control" aria-label="Search">
                                <span class="input-group-append">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- show items by featured shop -->
                <h2>New items from <?php echo $shop[2]; ?> shop</h2>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <?php
                    if ($item_query != null) {
                        while ($row = mysqli_fetch_array($item_query)) {
                            if ($row["shop_id"] == $shop["shop_id"]) {
                                print '<div class="col">
                                                    <div class="card">';
                                echo '<a href="item_portal.php?item_id=' . $row["item_id"] . '"><img src="data:image/jpeg;base64,' . base64_encode($row["item_image"]) . '" class="card-img-top"></a>';
                                print '<div class="card-body">
                                                    <p class="card-text"><small class="text-muted">' . $row["item_name"] . '</small></p></div></div></div>';
                            }
                        }
                    } else {
                        echo '<div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-text"> Nothing here yet. </p>
                                        </div>
                                    </div>
                                  </div>';
                    }

                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>Following</h2>
                <?php 
                
                // //for followers count
                $following_tmp = explode(', ', $cf['following_shops']); //
                $shopidString = "";
                foreach ($following_tmp as $f) {
                    $shopidString .= $f . ",";
                }
                
                $shopidString = substr($shopidString, 1, -1);
                $shop_tmp = mysqli_query($link, "SELECT * FROM shops WHERE shop_id in ($shopidString)");
                
                if($shop_tmp) {
                    while($following_shops = mysqli_fetch_array($shop_tmp)) {
                        $explode = explode('|', $following_shops['shop_reactions']);
                        $total_followers = count($explode) - 1;
                        echo '<div class="card">
                                <div class="card-body">';
                        echo        '<p class="card-text">'.$following_shops['shop_name'] . '</p>
                                </div>';
                        echo '<div class="card-footer">
                                <span class="badge bg-info float-right" style="color: #FFF;">'. $total_followers . ' followers </span>
                                </div>
                                </div>';
                    }
                } else {
                    echo '<div class="card">
                            <div class="card-body">
                                <p class="card-text"> Nothing here yet. </p>
                            </div>
                          </div>';
                }


                ?>
            </div>
        </div>
    </div>
</main>
<?php
include 'includes/main/footer.php';
?>