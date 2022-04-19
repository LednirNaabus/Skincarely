<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely | Dashboard</title>
    
    <?php include('merchant_links.php'); ?>
    <?php include('insights.php'); ?>

</head>
<body style="background-color: #f7f3f2;">

<?php include('navigation.php'); ?>

<!--------- CONTENT -------------------->

            <div class="container" style="font-family: Poppins;">
                <?php
                echo '<h1 class="display-1">Hey there, <strong>' . $_SESSION["welcomename"] . '</strong>.</h1>';
                ?>
                <br>
                <p>Welcome to your dashboard. You can access your business insights here and view your shop's ratings, followers, and engagements, or
                   view your list of products and corresponding reviews. You could also manage your shop profile. </p>
                <br>
                <p><a href="shop_verification.php" class="btn btn-primary btn-sm" role="button">View Shop Profile</a></p>
            </div>

            <br>

            <hr class="my-4">

            <br>

            <div class="container" style="font-family: Poppins;">
            <h1 class="display-4">Business Insights</h1>
            <br><br>
            <section id="counter" class="sec-padding">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 ">
                    <div class="count"> <span class="glyphicon glyphicon-user"></span>
                    <br>
                      <p class="number">126</p>
                      <h4>Shop Followers</h4> </div>
                  </div>
                  <div class="col-md-3 ">
                    <div class="count"> <span class="glyphicon glyphicon-heart"></span>
                    <br>
                      <p class="number">535</p>
                      <h4>Shop Reactions</h4> </div>
                  </div>
                  <div class="col-md-3 ">
                    <div class="count"> <span class="glyphicon glyphicon-tags"></span>
                    <br>
                      <p class="number">
                        <?php
                          include("connection.php");

                          $productref = $_SESSION["shopid"];
                          
                          $sql = "select * from items where shop_id = '$productref'";
                          $result = mysqli_query($con, $sql);  
                          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                          $count = mysqli_num_rows($result);
                          
                          echo $count;
                        ?>
                      </p>
                      <h4>Total Products</h4> </div>
                  </div>
                  <div class="col-md-3 ">
                    <div class="count"> <span class="glyphicon glyphicon-thumbs-up"></span>
                    <br>
                      <p class="number">777</p>
                      <h4>Product Likes</h4> </div>
                  </div>
                </div>
              </div>
            </section>
            </div>

            <br><br>

            <div class="container" style="font-family: Poppins;">
            <h1 class="display-4">Your Top Liked Products</h1>
            <br>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Product</th>
                  <th scope="col">Category</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Test</td>
                  <td>Test</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Test</td>
                  <td>Test</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Test</td>
                  <td>Test</td>
                </tr>
              </tbody>
            </table>
            </div>

            <br><br>
            
            <div class="container" style="font-family: Poppins;">
              <h1 class="display-4">Recent Reviews</h1>
              <br>

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="item active">
                              <div class="header-text hidden-xs">
                                  <div class="col-md-12 text-center">
                                    <figure class="text-center">
                                      <blockquote class="blockquote">
                                        <p>Review Text</p>
                                      </blockquote>
                                      <figcaption class="blockquote-footer">
                                        Product
                                      </figcaption>
                                    </figure>
                                  </div>
                              </div>
                    </div>
                    
                    <div class="item">
                              <div class="header-text hidden-xs">
                                  <div class="col-md-12 text-center">
                                    <figure class="text-center">
                                      <blockquote class="blockquote">
                                        <p>Review Text</p>
                                      </blockquote>
                                      <figcaption class="blockquote-footer">
                                        Product
                                      </figcaption>
                                    </figure>
                                  </div>
                              </div>
                    </div>

                    <div class="item">
                              <div class="header-text hidden-xs">
                                  <div class="col-md-12 text-center">
                                    <figure class="text-center">
                                      <blockquote class="blockquote">
                                        <p>Review Text</p>
                                      </blockquote>
                                      <figcaption class="blockquote-footer">
                                        Product
                                      </figcaption>
                                    </figure>
                                  </div>
                              </div>
                    </div>

                    <div class="item">
                              <div class="header-text hidden-xs">
                                  <div class="col-md-12 text-center">
                                    <figure class="text-center">
                                      <blockquote class="blockquote">
                                        <p>Review Text</p>
                                      </blockquote>
                                      <figcaption class="blockquote-footer">
                                        Product
                                      </figcaption>
                                    </figure>
                                  </div>
                              </div>
                    </div>

                    <div class="item">
                              <div class="header-text hidden-xs">
                                  <div class="col-md-12 text-center">
                                    <figure class="text-center">
                                      <blockquote class="blockquote">
                                        <p>Review Text</p>
                                      </blockquote>
                                      <figcaption class="blockquote-footer">
                                        Product
                                      </figcaption>
                                    </figure>
                                  </div>
                              </div>
                    </div>

                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" style="background-image:none !important; filter:none !important;"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" style="background-image:none !important; filter:none !important;"></span>
                </a>
              </div>
	          </div>

            <br><br>
            <br><br>

          
          <div class="container d-flex justify-content-center text-center" style="font-family: Poppins;">
            <div class="row">
                <div class="col-md-4">
                  <div class="card" style="width: 90%">
                    <img class="card-img-top" src="img/c1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">See how your shop is performing through collated insights, engagements, and analytics.</p>
                      <br>
                      <p class="text-center"><a href="merchant_businessinsights.php" class="btn btn-primary" style="width: 20rem;">See Business Insights</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card" style="width: 90%">
                    <img class="card-img-top" src="img/c2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Manage your shop's products and keep your customers updated of what you're offering. </p>
                      <br>
                      <p class="text-center"><a href="merchant_myproducts.php#productlist" class="btn btn-primary" style="width: 20rem;">Check List of Products</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card" style="width: 90%">
                    <img class="card-img-top" src="img/c3.jpg" alt="Card image cap">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Find out what your customers think of your goods and services through their product feedback.</p>
                      <br>
                      <p class="text-center"><a href="merchant_myproducts.php#reviews" class="btn btn-primary" style="width: 20rem;">Check Reviews</a></p>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <br><br>



          <?php include("merchant_script.php"); ?>

</body>
</html>