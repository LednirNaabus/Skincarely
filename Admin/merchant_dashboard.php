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

            <div class="container-fluid bgCenter bgImgCenter">
                <h1 class="container welcomeTitle">
                <?php
                echo ' Hey there, <strong>' . $_SESSION["welcomename"] . '</strong>.
                </h1>';?>
                <br>
                <p class="container welcomeStatement">Welcome to your dashboard. You can access your business insights here and view your shop's ratings, followers, and engagements, or
                   view your list of products and corresponding reviews. You could also manage your shop profile. </p>
                <br>
                <p class="container" style="font-size:18px;"><a href="shop_verification.php" class="btn customBtn" role="button">View Shop Profile</a></p>
            </div>

            <br>


            <br>

            <div class="container businessContainer" style="font-family: Poppins; padding: 0;">
            <h1 class="display-4 businessTitle">Business Insights</h1>
            <br><br>
            <section id="counter" class="sec-padding">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 ">
                    <div class="count border"> <span class="glyphicon glyphicon-user"></span>
                    <br>
                      <p class="number">
                      <?php
                          include("connection.php");

                          $ref = $_SESSION["vendorid"];

                          $sql = "select * from vendors where vendor_id = '$ref'";
                          $result = mysqli_query($con, $sql);  
                          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                          $count = mysqli_num_rows($result);

                          if($row["shop_id"] == "0")
                          {
                            echo "0";
                          }

                          else
                          {
                              $productref = $row["shop_id"];

                              $followersql = "select * from shops where shop_id = '$productref'";
                              $followerresult = mysqli_query($con, $followersql);  
                              $followerrow = mysqli_fetch_array($followerresult, MYSQLI_ASSOC);  
                              $followercount = mysqli_num_rows($followerresult);

                              $followers = explode('|', $followerrow['shop_reactions']);
                              $followers_total = count($followers) - 1;
                              echo $followers_total;
                              
                             
                          }     
                        ?>
                      </p>
                      <h4>Shop Followers</h4> </div>
                  </div>
                  <div class="col-md-3 ">
                    <div class="count border"> <span class="glyphicon glyphicon-heart"></span>
                    <br>
                      <p class="number">535</p>
                      <h4>Shop Reactions</h4> </div>
                  </div>
                  <div class="col-md-3 ">
                    <div class="count border"> <span class="glyphicon glyphicon-tags"></span>
                    <br>
                      <p class="number">
                        <?php
                          include("connection.php");

                          $ref = $_SESSION["vendorid"];

                          $sql = "select * from vendors where vendor_id = '$ref'";
                          $result = mysqli_query($con, $sql);  
                          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                          $count = mysqli_num_rows($result);

                          if($row["shop_id"] == "0")
                          {
                            echo "0";
                          }

                          else
                          {
                              $productref = $row["shop_id"];

                              $sqll = "select * from items where shop_id = '$productref'";
                              $resultt = mysqli_query($con, $sqll);  
                              $roww = mysqli_fetch_array($resultt, MYSQLI_ASSOC);  
                              $count = mysqli_num_rows($resultt);
                              
                              echo $count;

                          }     
                        ?>
                      </p>
                      <h4>Total Products</h4> </div>
                  </div>
                  <div class="col-md-3 ">
                    <div class="count border"> <span class="glyphicon glyphicon-thumbs-up"></span>
                    <br>
                      <p class="number">777</p>
                      <h4>Product Likes</h4> </div>
                  </div>
                </div>
              </div>
            </section>
            </div>

            <br><br>
            <br><br>
          
          <div class="container d-flex justify-content-center text-center" style="font-family: Poppins;">
            <div class="row d-flex justify-content-between text-center">
                <div class="col-md-4" style="min-width: 260px; display: flex; justify-content: center">
                  <div class="card" style="width: 90%; min-width: 260px;">
                    <img class="card-img-top" src="img/c2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Manage your shop's products and keep your customers updated of what you're offering. </p>
                      <br>
                      <p class="text-center"><a href="shop_verification.php" class="btn customBtn">Check List of Products</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="min-width: 260px; display: flex; justify-content: center">
                  <div class="card" style="width: 90%; min-width: 260px;">
                    <img class="card-img-top" src="img/c3.jpg" alt="Card image cap">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Find out what your customers think of your goods and services through their product feedback.</p>
                      <br>
                      <p class="text-center"><a href="shop_verification.php" class="btn customBtn">Check Reviews</a></p>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <br><br>



          <?php include("merchant_script.php"); ?>


</body>
</html>