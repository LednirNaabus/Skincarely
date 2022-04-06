<?php
    include 'includes/main/header.php';
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
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, alias eos accusamus odio, fugiat consequuntur dignissimos impedit, sunt et nostrum facilis inventore. Similique impedit soluta quas voluptatem incidunt quos voluptates.</p>
                <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, alias eos accusamus odio, fugiat consequuntur dignissimos impedit, sunt et nostrum facilis inventore. Similique impedit soluta quas voluptatem incidunt quos voluptates.</p>
                <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam harum reprehenderit earum perspiciatis error minus fuga ducimus quod! Dignissimos inventore perferendis odio soluta autem ullam eligendi excepturi architecto neque itaque!</p>
                <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>
        <hr>
        <!-- main content here -->
    </div>
</div>
</main>
<?php
    include 'includes/main/footer.php';
?>