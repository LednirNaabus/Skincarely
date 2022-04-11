<?php
    include 'includes/main/header.php';
    include 'includes/connection/db_connection.php';

    // -- `shops` table --
    //featured shops
    $featured_shops = mysqli_query($link, "SELECT * FROM shops");
    //new shops
    $new_shops = mysqli_query($link, "SELECT * FROM shops ORDER BY shop_id DESC");

    // -- `items` table --
    $items_featured = mysqli_query($link, "SELECT * FROM items LIMIT 3");
?> 
<main role="main" style="background-color: #F7F3F2;">
    <div class="bg-img">
        <div class="jumbotron">
            <div class="container">
                <?php
                    echo '<h1 class="display-3"> Welcome, <strong>' . htmlspecialchars($_SESSION["user"]) .  '</strong></h1>';
                ?>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde tenetur sunt est odit fuga officia, voluptate consectetur, voluptas et hic odio laudantium maiores eum accusantium nesciunt ipsa aliquid animi repellat.</p>
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
        <div class="row">
            <div class="input-group mb-3">
                <input type="text" placeholder="Search..." class="form-control" aria-label="Search">
                <span class="input-group-append">
                        <button class="btn btn-primary" type="button">Search</button>
                </span>
            </div>
        </div>
        <hr>
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
                $featured = mysqli_fetch_row($featured_shops);
                $new = mysqli_fetch_row($new_shops);
            ?>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                        <!-- featured shop -->
                        <!-- oldest sa `shops` table -->
                        <div class="card">
                            <?php
                                if($featured != null) {
                                    echo '<a href="merchant_portal.php"><img src="data:image/jpeg;base64,'.base64_encode($featured[3]).'" class="card-img-top" /></a>';
                                } else {
                                    echo '<p class="card-text"> There is nothing yet. Why don\'t you create a <a href="../Admin/signup.php">vendor account</a> to host a shop?</p>';
                                }
                            ?>
                            <div class="card-body">
                                <p class="card-text"><?php 
                                    if($featured != null) {
                                        echo $featured[2];
                                    }
                                ?></p>
                                <p class="card-text"><small class="text-muted"><?php 
                                    if($featured != null) {
                                        echo 'From '. $featured[5];
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
                                if($new != null) {
                                    echo '<a href="merchant_portal.php"><img src="data:image/jpeg;base64,'.base64_encode($new[3]).'" class="card-img-top" /></a>';
                                } else {
                                    echo '<p class="card-text"> There is nothing yet. Why don\'t you create a <a href="../Admin/signup.php">vendor account</a> to host a shop?</p>';
                                }
                            ?>
                            <div class="card-body">
                                <p class="card-text">
                                    <?php
                                        if($new != null) {
                                            echo $new[2];
                                        }
                                    ?>
                                </p>
                                <p class="card-text"><small class="text-muted">
                                    Uploaded: <?php 
                                        if($new != null) {
                                            echo $new[9];
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
                <h2>New items from featured shop</h2>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <?php
                        while($item = mysqli_fetch_array($items_featured)) {
                            Print '<div class="col">
                                        <div class="card">';
                            echo '<a href="#"><img src="data:image/jpeg;base64,' .base64_encode($item[5]).'" class="card-img-top"></a>';
                            Print '<div class="card-body">
                                        <p class="card-text"><small class="text-muted">' .$item[2] . '</small></p></div></div></div>';
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