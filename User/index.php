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
        <!-- main content here -->
        <div class="row">
            <div class="container">
                <div class="col-md-20">
                    <!-- for now, will list first few shops sa shops table -->
                    <h2>Featured Shops</h2>
                    <div class="row">
                        <?php
                            while($row = mysqli_fetch_array($result)) {
                                if($row['shop_id'] < 6) {
                                    echo '<div class="col-md-4">';
                                    echo '<p class="lead">'.$row['shop_name'].'</p>';
                                    echo '<p><a class="btn btn-primary" href="#" role="button">View</a></p>';
                                    echo '</div>';
                                }
                            }
                        ?>
                    </div>
                    <h2>Promoted</h2>
                    <div class="row">
                        
                    </div>
                    <h2>Recommended</h2>
                    <div class="row">
                        
                    </div>
                    <h2>New Shops to check out!</h2>
                    <div class="row">
                        
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