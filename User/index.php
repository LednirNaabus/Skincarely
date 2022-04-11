<?php
    include 'includes/main/header.php';
    include 'includes/connection/db_connection.php';

    $result = mysqli_query($link, "SELECT * FROM shops");
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
                $row = mysqli_fetch_row($result);
            ?>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                        <!-- featured shop -->
                        <div class="card">
                            <?php
                                if($row != null) {
                                    echo '<a href="merchant_portal.php"><img src="data:image/jpeg;base64,'.base64_encode($row[3]).'" class="card-img-top" /></a>';
                                }
                            ?>
                            <div class="card-body">
                                <p class="card-text"><?php 
                                    if($row != null) {
                                        echo $row[2];
                                    }
                                ?></p>
                                <p class="card-text"><small class="text-muted"><?php 
                                    if($row != null) {
                                        echo $row[5];
                                    }
                                ?></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="promoted" role="tabpanel" aria-labelledby="promoted-tab">
                        <!-- promoted -->
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
                        <!--

                            To do here:
                            - create query to select the most recent added shop to the `shops` table
                        -->
                        <div class="card">
                            <img src="dist/img/img1.webp" alt="..." class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">New Shop name</p>
                                <p class="card-text"><small class="text-muted">Updated 3 mins ago.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>Recommended</h2>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="dist/img/c1.jpg" alt="C1" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">By:</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    <div class="card">
                            <img src="dist/img/c2.jpg" alt="C2" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">By:</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    <div class="card">
                            <img src="dist/img/c3.jpg" alt="C3" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text"><small class="text-muted">By:</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
    include 'includes/main/footer.php';
?>