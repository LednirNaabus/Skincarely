<?php
session_start();

include('connection.php'); 

$linkpls = $_SESSION["id"];

$sqlprod = "SELECT * FROM shops WHERE vendor_id = '$linkpls';";
      $resultprod = mysqli_query($con, $sqlprod);

      if (mysqli_num_rows($resultprod) > 0) {
          while($row = mysqli_fetch_assoc($resultprod)) {
              $_SESSION["shopid"] = $row["shop_id"];
          }

      } else {
          echo "0 results";
      }

      $shopname = $_SESSION["shop"];

$shopid = $_SESSION["shopid"];
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

  <style>
    .product-grid{font-family:Raleway,sans-serif;text-align:center;padding:0 0 72px;border:1px solid rgba(0,0,0,.1);overflow:hidden;position:relative;z-index:1}
.product-grid .product-image{position:relative;transition:all .3s ease 0s}
.product-grid .product-image a{display:block}
.product-grid .product-image img{width:100%;height:auto}
.product-grid .pic-1{opacity:1;transition:all .3s ease-out 0s}
.product-grid:hover .pic-1{opacity:1}
.product-grid .pic-2{opacity:0;position:absolute;top:0;left:0;transition:all .3s ease-out 0s}
.product-grid:hover .pic-2{opacity:1}
.product-grid .social{width:150px;padding:0;margin:0;list-style:none;opacity:0;transform:translateY(-50%) translateX(-50%);position:absolute;top:60%;left:50%;z-index:1;transition:all .3s ease 0s}
.product-grid:hover .social{opacity:1;top:50%}
.product-grid .social li{display:inline-block}
.product-grid .social li a{color:#fff;background-color:#333;font-size:16px;line-height:40px;text-align:center;height:40px;width:40px;margin:0 2px;display:block;position:relative;transition:all .3s ease-in-out}
.product-grid .social li a:hover{color:#fff;background-color:#ef5777}
.product-grid .social li a:after,.product-grid .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;letter-spacing:1px;line-height:20px;padding:1px 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-20px;z-index:-1}
.product-grid .social li a:hover:after,.product-grid .social li a:hover:before{opacity:1}
.product-grid .product-discount-label,.product-grid .product-new-label{color:#fff;background-color:#ef5777;font-size:12px;text-transform:uppercase;padding:2px 7px;display:block;position:absolute;top:10px;left:0}
.product-grid .product-discount-label{background-color:#333;left:auto;right:0}
.product-grid .rating{color:#FFD200;font-size:12px;padding:12px 0 0;margin:0;list-style:none;position:relative;z-index:-1}
.product-grid .rating li.disable{color:rgba(0,0,0,.2)}
.product-grid .product-content{background-color:#fff;text-align:center;padding:12px 0;margin:0 auto;position:absolute;left:0;right:0;bottom:-27px;z-index:1;transition:all .3s}
.product-grid:hover .product-content{bottom:0}
.product-grid .title{font-size:13px;font-weight:400;letter-spacing:.5px;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
.product-grid .title a{color:#828282}
.product-grid .title a:hover,.product-grid:hover .title a{color:#ef5777}
.product-grid .price{color:#333;font-size:17px;font-family:Montserrat,sans-serif;font-weight:700;letter-spacing:.6px;margin-bottom:8px;text-align:center;transition:all .3s}
.product-grid .price span{color:#999;font-size:13px;font-weight:400;text-decoration:line-through;margin-left:3px;display:inline-block}
.product-grid .add-to-cart{color:#000;font-size:13px;font-weight:600}
@media only screen and (max-width:990px){.product-grid{margin-bottom:30px}
}
  </style>

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
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="merchant_myproducts.php" class="active"> My Products <span></span></a>
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
  <h1 class class="display-1">My Products</h1>
    <br>
    <p> Manage your shop's products and keep your customers updated of what you're offering. </p>          
    <br>  
    <p><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add Product</button></p>
</div>

<br>

<hr class="my-4">

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Product</h4>
        </div>
        <div class="modal-body">

            <form action="product_creation.php" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="productname">Product Name</label>
                <input type="text" class="form-control" id="productname" name="productname">
              </div>

              <div class="form-group">
                <label for="productdescription">Product Description</label>
                <textarea class="form-control" id="productdescription" name="productdescription"></textarea>
              </div>

              <div class="form-group">
                <label for="productimage">Product Image</label>
                <input type="file" class="form-control-file" id="productimage" name="productimage">
              </div>

              <label for="productprice">Product Price</label><br>
              <div class="form-group input-group">
                <span class="input-group-addon">PhP</span> 
                <input type="text" class="form-control" id="productprice" name = "productprice">
              </div>

              <label for="category">Product Category</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="eyemakeup" name="productcategory">
                <label class="form-check-label" for="eyemakeup">Eye Makeup</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="facemakeup" name="productcategory">
                <label class="form-check-label" for="facemakeup">Face Makeup</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="lipmakeup" name="productcategory">
                <label class="form-check-label" for="lipmakeup">Lip Makeup</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="skincare" name="productcategory">
                <label class="form-check-label" for="skincare">Skincare</label>
              </div>
              
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>

<br>

<div class="container" style="font-family: Poppins;">
  <h3 class class="display-3" id="ratings">List of Products</h3>
    <br>
    <form method="POST">
    <select class="form-select" id="filter">
      <option disabled selected>Filter Products by Category</option>
      <option name="all">All Products</option>
      <option name="eye">Eye Makeup</option>
      <option name="face">Face Makeup</option>
      <option name="lip">Lip Makeup</option>
      <option name="skin">Skincare</option>
    </select>
</form>
</div>

<br>

<div class="container">
    <div class="row">
<?php

      include("connection.php");
      $sql = "SELECT * FROM items WHERE shop_id = '$shopid'";
      $result = mysqli_query($con,$sql);
      while($row = $result->fetch_assoc()) { 
?>
    
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image" style="height: 250px;">
                    <a href="#"><?php echo '<img src = "data:image/jpeg;base64,'.base64_encode($row['item_image']).'"/>'; ?></a>  
                  <ul class="social">
                        <li><a href="" data-tip="View Product"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Edit Product"><i class="glyphicon glyphicon-pencil"></i></a></li>
                        <li><a href="" data-tip="Delete Product"><i class="glyphicon glyphicon-trash"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">
                      <?php echo $row['item_name']; ?>
                    </a></h3>
                    <h4 class="title">
                      <?php echo $row['item_description']; ?>
                    </h4>
                    <br>
                </div>
            </div>
        </div>


<?php 
        }
?>

  </div>
</div>

<br><br>

<div class="container" style="font-family: Poppins;">
  <h3 class class="display-3" id="ratings">Reviews</h3>
    <br>
</div>
  

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