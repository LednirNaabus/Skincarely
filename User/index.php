<?php
    include 'includes/main/header.php';
    include 'includes/connection/db_connection.php';
?> 
<main role="main" style="background-color: #F7F3F2;">
    <div class="bg-img">
        <div class="jumbotron">
            <div class="container">
                <?php
                    echo '<h1 class="display-3"> Welcome, <strong>' . htmlspecialchars($_SESSION["user"]) .  '</strong></h1>';
                ?>
                <p>Skincarely is catered to beauty and skincare businesses in the Philippines. Want to enlist your business now?</p>
                <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
            </div>
        </div>
    </div>
    <!-- /.main -->
    <!-- featured vendors/items/shops here -->
    <div class="container">
        <div class="row">
            <h1 class="display-4">Discover products you'll love</h1>
            <p>Browse and search for a specific make up or lipstick you like at exclusive prices.</p>
        </div>
        <!-- <div class="row">
            <div class="input-group mb-3">
                <input type="text" placeholder="Search..." class="form-control" aria-label="Search">
                <span class="input-group-append">
                        <button class="btn btn-primary" type="button">Search</button>
                </span>
            </div>
        </div> -->
        <div class="row">
            <form action="search.php" method="get">
                <div class="input-group mb-3">
                    <input type="text" name="query" id="" placeholder="Search... " class="form-control" aria-label="Search">
                    <span class="input-group-append">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <hr>
        <h1>Explore Shops</h1>
        <div class="card ">
            <div class="card-header"> 
                <ul class="nav nav-tabs card-header-tabs pull-right"  id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="featured-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="promoted-tab" data-toggle="tab" href="#promoted" role="tab" aria-controls="promoted" aria-selected="false">Promoted</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false">New</a>
                    </li>
                </ul>
            </div>
            <?php
                //featured shop query
                $shop_query = mysqli_query($link, "SELECT * FROM shops");
                $item_query = mysqli_query($link, "SELECT * FROM items ORDER BY item_id DESC LIMIT 5");

                $shop = mysqli_fetch_array($shop_query);
            ?>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                        <!-- featured shop -->
                        <!-- aka oldest sa `shops` table -->
                        <div class="card">
                            <?php
                                if($shop != null) {
                                    echo '<a href="merchant_portal.php?shop_id='.$shop["shop_id"].'"><img src="data:image/jpeg;base64,'.base64_encode($shop["shop_logo"]).'" class="card-img-top" /></a>';
                                    // $_SESSION['shopid'] = $shop["shop_id"];
                                } else {
                                    echo '<p class="card-text"> There is nothing yet. Why don\'t you create a <a href="../Admin/signup.php">vendor account</a> to host a shop?</p>';
                                }
                            ?>
                            <div class="card-body">
                                <p class="card-text"><?php 
                                    if($shop != null) {
                                        echo $shop["shop_name"];
                                    }
                                ?></p>
                                <p class="card-text"><small class="text-muted"><?php 
                                    if($shop != null) {
                                        echo $shop["shop_description"].' | '.$shop["shop_mainbranch"];
                                    }
                                ?></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="promoted" role="tabpanel" aria-labelledby="promoted-tab">
                        <!-- promoted -->
                        <!-- shops with most reactions are promoted -->
                        <!--
                        
                        To do here:
                        - create query to select shop with most reactions
                        -->
                        <div class="card">
                            <img src="dist/img/login-img.jpg" alt="..." class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Promoted shop name</p>
                                <p class="card-text"><small class="text-muted">Updated 3 mins ago.</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                        <!-- new shop -->
                        <!-- display newest from `shops` -->
                        <div class="card">
                            <?php
                                if($shop != null) {
                                    $shop_query = mysqli_query($link, "SELECT * FROM shops ORDER BY shop_id DESC");
                                    $new_shops = mysqli_fetch_array($shop_query);
                                    echo '<a href="merchant_portal.php?shop_id='.$new_shops[0].'"><img src="data:image/jpeg;base64,'.base64_encode($new_shops[3]).'" class="card-img-top" /></a>';
                                    //[0] = shop_id
                                } else {
                                    echo '<p class="card-text"> There is nothing yet. Why don\'t you create a <a href="../Admin/signup.php">vendor account</a> to host a shop?</p>';
                                }
                            ?>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php
                                        if($new_shops != null) {
                                            echo $new_shops[2];
                                        }
                                    ?>
                                </p>
                                <p class="card-text"><small class="text-muted">
                                    Uploaded: <?php 
                                        if($new_shops != null) {
                                            echo $new_shops[14];
                                        }
                                    ?>
                                </small></p>
                            </div>
                        </div>
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
                    
                        if($item_query != null) {
                            while($row = $item_query->fetch_assoc()) {
                                if($row["shop_id"] == $shop["shop_id"]) {
                                    Print '<div class="col">
                                                    <div class="card">';
                                        echo '<a href="#"><img src="data:image/jpeg;base64,' .base64_encode($row["item_image"]).'" class="card-img-top"></a>';
                                        Print '<div class="card-body">
                                                    <p class="card-text"><small class="text-muted">' .$row["item_name"] . '</small></p></div></div></div>';
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
                <h2>Popular by Location</h2>
                <!--

                To do:
                - Display shops that are most popular by location
                - still waiting for shop_reactions function

                    -->
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>Recommended</h2>
            </div>
        </div>
    </div>
</main>
<?php
    include 'includes/main/footer.php';
?>