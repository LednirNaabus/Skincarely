<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely | Sign Up</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" >
    <!-- Font awesome icons -->
    <script src="https://kit.fontawesome.com/d9fb1896a3.js" crossorigin="anonymous"></script>

    <link href="css/style.css" rel="stylesheet" >

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color: #f7f3f2;">

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container-fluid">

    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <a class="navbar-brand mt-2 mt-lg-0" href="#">
      <i class="fas fa-crow fa-1x me-3" style="padding: 0 1rem 0;"></i>
      Skincarely
      </a>

      <ul class="nav navbar-nav">
      <li class="active"><a href="merchant_dashboard.php">Dashboard</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="merchant_businessinsights.php"> Business Insights <span></span></a>
        <ul class="dropdown-menu">
          <li><a href="merchant_businessinsights.php#ratings">Ratings</a></li>
          <li><a href="merchant_businessinsights.php#followers">Followers</a></li>
          <li><a href="merchant_businessinsights.php#pageengagement">Page Engagement</a></li>
          <li><a href="merchant_businessinsights.php#productengagement">Product Engagement</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="merchant_myproducts.php"> My Products <span></span></a>
        <ul class="dropdown-menu">
        <li><a href="merchant_myproducts.php#productlist">Product List</a></li>
          <li><a href="merchant_myproducts.php#reviews">Reviews</a></li>
        </ul>
      </li>
      <li><a href="merchant_shopprofile.php">Shop Profile</a></li>
    </ul>
      
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="skincarely.php"><span class="glyphicon glyphicon-log-out" style="padding: 0 1rem 0;"></span> Logout </a></li>
    </ul>

  </div>

</nav>

<!--------- CONTENT -------------------->

            <div class="container" style="font-family: Poppins;">
                <?php
                echo '<h1 class="display-1">Hey there, <strong>' . $_SESSION["welcomename"] . '</strong>.</h1>';
                ?>
                <br>
                <p>Welcome to your dashboard. You can access your business insights here and view your shop's ratings, followers, and engagements, or
                   view your list of products and corresponding reviews. You could also manage your shop profile. </p>
                <br>
                <p><a href="merchant_dashboard.php" class="btn btn-primary btn-sm" role="button">View Shop Profile</a></p>
            </div>

            <br>

            <hr class="my-4">

            <br>

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
                                      <h1 class="display-4">Review</h1>
                                      <br>
                                      <h3>Product Name</h3>
                                      <br>
                                  </div>
                              </div>
                    </div>
                    
                    <div class="item">
                              <div class="header-text hidden-xs">
                                  <div class="col-md-12 text-center">
                                      <h1 class="display-4">Review</h1>
                                      <br>
                                      <h3>Product Name</h3>
                                      <br>
                                  </div>
                              </div>
                    </div>

                    <div class="item">
                              <div class="header-text hidden-xs">
                                  <div class="col-md-12 text-center">
                                      <h1 class="display-4">Review</h1>
                                      <br>
                                      <h3>Product Name</h3>
                                      <br>
                                  </div>
                              </div>
                    </div>

                    <div class="item">
                              <div class="header-text hidden-xs">
                                  <div class="col-md-12 text-center">
                                      <h1 class="display-4">Review</h1>
                                      <br>
                                      <h3>Product Name</h3>
                                      <br>
                                  </div>
                              </div>
                    </div>

                    <div class="item">
                              <div class="header-text hidden-xs">
                                  <div class="col-md-12 text-center">
                                      <h1 class="display-4">Review</h1>
                                      <br>
                                      <h3>Product Name</h3>
                                      <br>
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

          <div class="container" style="font-family: Poppins;">
            <div class="row">
                <div class="col-md-4">
                  <div class="card" style="width: 28rem;">
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
                  <div class="card" style="width: 28rem;">
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
                  <div class="card" style="width: 28rem;">
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



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html>