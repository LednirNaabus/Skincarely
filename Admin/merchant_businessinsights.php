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
      <li><a href="merchant_dashboard.php">Dashboard</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="merchant_businessinsights.php" class="active"> Business Insights <span></span></a>
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
      <li><a href="shop_verification.php">Shop Profile</a></li>
    </ul>
      
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-log-out" style="padding: 0 1rem 0;"></span> Logout </a></li>
    </ul>

  </div>

</nav>

<!--------- CONTENT -------------------->

<div class="container" style="font-family: Poppins;">
  <h1 class class="display-1">Business Insights</h1>
    <br>
    <p> View product ratings, shop followers, and other related engagements and analytics. </p>          
    <br>  
</div>

<br>

<hr class="my-4">

<br>

<div class="container" style="font-family: Poppins;">
  <h3 class class="display-3" id="ratings">Ratings</h3>
    <br>
</div>

<div class="container">
  <div class="row row-cols-1 row-cols-md-3 gx-3 gy-4">
    <div class="col ">
      <div class="card card-business shadow text-center">
        <div class="card-header">Ratings</div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-business shadow text-center">
        <div class="card-header">Popular Products</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item border list-group-item-action list-group-item-success">An item</li>
            <li class="list-group-item border list-group-item-action list-group-item-success">A second item</li>
            <li class="list-group-item border list-group-item-action list-group-item-danger">A third item</li>
          </ul>

      </div>
    </div>

    <div class="col">
      <div class="card card-business shadow">
        <div class="card-body">
        </div>
      </div>
    </div>

    <br><br>

<div class="container" style="font-family: Poppins;">
<br>
  <h3 class class="display-4" id="followers">Followers</h3>
</div>
    

    <div class="col ">
      <div class="card card-business shadow text-center">
        <div class="card-header">
          Followers
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-business shadow">
        <div class="card-body">
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-business shadow">
        <div class="card-body">
        </div>
      </div>
    </div>

  </div>
</div>

<br><br>

<div class="container" style="font-family: Poppins;">
<br>
  <h3 class class="display-4" id="pageengagement">Page Engagement</h3>
</div>

<!-- how many followers -->

<br><br>

<div class="container" style="font-family: Poppins;">
<br>
  <h3 class class="display-4" id="productengagement">Product Engagement</h3>
</div>

<!-- how many product likes per category -->

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