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
      <li><a href="merchant_dashboard.php">Dashboard</a></li>
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
      <li class="active"><a href="merchant_shopprofile.php">Shop Profile</a></li>
    </ul>
      
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-log-out" style="padding: 0 1rem 0;"></span> Logout </a></li>
    </ul>

  </div>

</nav>

<!--------- CONTENT -------------------->

<div class="container" style="font-family: Poppins;">
  <h1 class class="display-1">Shop Profile</h1>
    <br>
    <p> View and manage your shop profile. </p>          
    <br>  
    <p><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Edit Shop</button></p>
</div>

<br>

<hr class="my-4">

<br>

<!-- edit modal -->

<!-- dito lalabas how the shop looks like -->
    
<div class="container p-5 my-3 border rounded" style="font-family: Poppins;">
  <h1 class="text-center">
      <?php
          include('connection.php');  
          
          $linkpls = $_SESSION["id"];

          $sqlshop = "SELECT * FROM shops WHERE vendor_id = '$linkpls';";
                $resultshop = mysqli_query($con, $sqlshop);

                if (mysqli_num_rows($resultshop) > 0) {
                    while($row = mysqli_fetch_assoc($resultshop)) {
                        $_SESSION["shop"] = $row["shop_name"];
                    }

                } else {
                    echo "0 results";
                }

                $shopname = $_SESSION["shop"];
          
          $sql = "SELECT * FROM shops WHERE shop_name = '$shopname';";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) 
          {

              while($row = mysqli_fetch_assoc($result)) 
              {
                echo '<img src = "data:image/jpeg;base64,'.base64_encode($row['shop_logo']).'" height = "100" width = "100" class = "rounded"/>';
              }
          } 
          
          else 
          {
              echo "No shop found.";
          }
      ?>
  </h1>
  <h1 class="text-center">
  <u><?php echo $shopname;?></u>
  </h1>
</div>

<div class="container p-5 my-3 border rounded" style="font-family: Poppins;">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#about">About Shop</a></li>
    <li><a data-toggle="tab" href="#products">Products</a></li>
    <li><a data-toggle="tab" href="#photos">Photos</a></li>
  </ul>

  <div class="tab-content m-5">
    <div id="about" class="tab-pane fade in active">
      <h3>Shop Description</h3>
      <p>
      <?php
          include('connection.php');      
          
          $sql = "SELECT * FROM shops WHERE shop_name = '$shopname';";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) 
          {

              while($row = mysqli_fetch_assoc($result)) 
              {
                echo $row['shop_description'];
              }
          } 
          
          else 
          {
              echo "No description found.";
          }
      ?>
      </p>
      <h3>Shop Location</h3>
      <p>
      <?php
          include('connection.php');      
          
          $sql = "SELECT * FROM shops WHERE shop_name = '$shopname';";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) 
          {

              while($row = mysqli_fetch_assoc($result)) 
              {
                echo $row['shop_location'];
              }
          } 
          
          else 
          {
              echo "No location found.";
          }
      ?>
      </p>
      <h3>Shop Socials</h3>
      <p>
      <?php
          include('connection.php');      
          
          $sql = "SELECT * FROM shops WHERE shop_name = '$shopname';";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) 
          {

              while($row = mysqli_fetch_assoc($result)) 
              {
                echo $row['shop_socials'];
              }
          } 
          
          else 
          {
              echo "No socials found.";
          }
      ?>
      </p>
      <h3>Shop Contact</h3>
      <p>
      <?php
          include('connection.php');      
          
          $sql = "SELECT * FROM shops WHERE shop_name = '$shopname';";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) 
          {

              while($row = mysqli_fetch_assoc($result)) 
              {
                echo $row['shop_contact'];
              }
          } 
          
          else 
          {
              echo "No contact found.";
          }
      ?>
      </p>
      <h3>Shop Hours</h3>
      <p>
        <?php
          //echo $_SESSION["shophours"];
          //find a way to access this if its not in db?
        ?>
      </p>
    </div>
    <div id="products" class="tab-pane fade">
      <h3>Products</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="photos" class="tab-pane fade">
      <h3>Featured Photos</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>


<!-- also, verif if there is a shop created for the vendor already or wala pa - change create shop button accordingly -->

  

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