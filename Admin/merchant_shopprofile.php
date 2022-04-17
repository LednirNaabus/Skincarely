<?php
session_start();

include('connection.php'); 

$linkpls = $_SESSION["vendorid"];

$sqlprod = "SELECT * FROM shops WHERE vendor_id = '$linkpls';";
$resultprod = mysqli_query($con, $sqlprod);

      if (mysqli_num_rows($resultprod) > 0) {
          while($row = mysqli_fetch_assoc($resultprod)) {
              $_SESSION["shopid"] = $row["shop_id"];
          }

      } else {
          echo "0 results";
      }

$shopid = $_SESSION["shopid"];

unset($_SESSION['shoplogo']);
unset($_SESSION['shopmotto']);
unset($_SESSION['shopdescription']);
unset($_SESSION['shopmainbranch']);
unset($_SESSION['shopotherbranch']);
unset($_SESSION['shoppickup']);
unset($_SESSION['shoppayment']);
unset($_SESSION['shopsocials']);
unset($_SESSION['shopcontact']);
unset($_SESSION['shopdelivery']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely | Shop Profile</title>
    
    <?php include('merchant_links.php'); ?>
    <?php include('merchant_myproducts_style.php'); ?>

</head>
<body style="background-color: #f7f3f2;">

<?php include('navigation.php'); ?>

<!--------- CONTENT -------------------->

<div class="container" style="font-family: Poppins;">
  <h1 class class="display-1">Shop Profile</h1>
    <br>
    <p> View and manage your shop profile.</p>          
    <br>  
    <p><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Edit Shop</button></p>
</div>

<br>

<hr class="my-4">

<br>

<!-- Edit Shop Profile (Modal) -->

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Shop Details</h4>
      </div>
      <div class="modal-body">

      <?php
        include('connection.php');      
            $sql = "SELECT * FROM shops WHERE shop_id = '$shopid';";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {

                  $_SESSION["shopname"] = $row['shop_name'];
                  $_SESSION["shoplogo"] = $row['shop_logo'];
                  $_SESSION["shopmotto"] = $row['shop_motto'];
                  $_SESSION["shopdescription"] = $row['shop_description'];
                  $_SESSION["shopmainbranch"] = $row['shop_mainbranch'];
                  $_SESSION["shopotherbranch"] = $row['shop_otherbranch'];
                  $_SESSION["shoppickup"] = $row['shop_pickupareas'];
                  $_SESSION["shopdelivery"] = $row['shop_delivery'];
                  $_SESSION["shoppayment"] = $row['shop_payment'];
                  $_SESSION["shopsocials"] = $row['shop_socials'];
                  $_SESSION["shopcontact"] = $row['shop_contact'];

                }
            } else {
                echo "0 results";
            }
        ?>

      <form action="update_shop.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="shopname">Shop Name</label>
          <textarea class="form-control" id="shopname" name = "shopname" rows="1"><?php echo $_SESSION["shopname"]; ?></textarea>
        </div>
        <div class="form-group">
          <label for="shopmotto">Shop Motto</label>
          <textarea class="form-control" id="shopmotto" name = "shopmotto" rows="1"><?php echo $_SESSION["shopmotto"]; ?></textarea>
        </div>
        <div class="form-group">
          <label for="shopdescription">Shop Description</label>
          <textarea class="form-control" id="shopdescription" rows="3" name = "shopdescription"><?php echo $_SESSION["shopdescription"]; ?></textarea>
        </div>
        <div class="form-group">
          <label for="shoplogo">Shop Logo</label>
          <input type="file" class="form-control-file" id="shoplogo" name="shoplogo">
        </div>
        <div class="form-group">
          <label for="mainbranch">Main Branch</label>
          <textarea class="form-control" id="mainbranch" name = "mainbranch" rows="1"><?php echo $_SESSION["shopmainbranch"]; ?></textarea>
        </div>
        <div class="form-group">
          <label for="otherbranch">Other Branches</label>
          <textarea class="form-control" id="otherbranch" name = "otherbranch" rows="1"><?php echo $_SESSION["shopotherbranch"]; ?></textarea>
        </div>
        <div class="form-group">
          <label for="pickup">Pickup Areas</label>
          <textarea class="form-control" id="pickup" name = "pickup" rows="1"><?php echo $_SESSION["shoppickup"]; ?></textarea>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="delivery">Delivery Modes</label><br>
            <textarea class="form-control" id="delivery" name = "delivery" rows="1"><?php echo $_SESSION["shopdelivery"]; ?></textarea>
          </div>
          <div class="form-group col-md-6">
            <label for="payment">Payment Modes</label><br>
            <textarea class="form-control" id="payment" name = "payment" rows="1"><?php echo $_SESSION["shoppayment"]; ?></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="landline">Landline No.</label>
            <textarea class="form-control" id="landline" name = "landline" rows="1"><?php $string1 = $_SESSION["shopcontact"]; $landline = strtok($string1, '/'); echo $landline;  ?></textarea>
          </div>
          <div class="form-group col-md-6">
            <label for="mobile">Mobile No.</label>
            <textarea class="form-control" id="mobile" name = "mobile" rows="1"><?php $string3 = $_SESSION["shopcontact"]; $arr = explode("/", $string3, 2); $mobile = $arr[1]; echo $mobile ?></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="socials">Social Media Links</label>
          <textarea class="form-control" id="socials" rows="3"><?php echo $_SESSION["shopsocials"]; ?></textarea>
        </div>
      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
      </form>
    </div>

  </div>
</div>

<!-- Merchant Shop Profile Proper -->
    
<div class="container p-5 my-3 border rounded" style="font-family: Poppins;">
  <h1 class="text-center">
      <?php
          include('connection.php');  
          
          $linkpls = $_SESSION["vendorid"];

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
      <h3>Shop Motto</h3>
      <p>
      <?php
          include('connection.php');      
          
          $sql = "SELECT * FROM shops WHERE shop_name = '$shopname';";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) 
          {

              while($row = mysqli_fetch_assoc($result)) 
              {
                echo $row['shop_motto'];
              }
          } 
          
          else 
          {
              echo "No motto found.";
          }
      ?>
      </p>
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
      <h3>Shop Main Branch</h3>
      <p>
      <?php
          include('connection.php');      
          
          $sql = "SELECT * FROM shops WHERE shop_name = '$shopname';";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) 
          {

              while($row = mysqli_fetch_assoc($result)) 
              {
                echo $row['shop_mainbranch'];
              }
          } 
          
          else 
          {
              echo "No main branch found.";
          }
      ?>
      </p>
      <h3>Shop Other Branches</h3>
      <p>
      <?php
          include('connection.php');      
          
          $sql = "SELECT * FROM shops WHERE shop_name = '$shopname';";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) 
          {

              while($row = mysqli_fetch_assoc($result)) 
              {
                echo $row['shop_otherbranch'];
              }
          } 
          
          else 
          {
              echo "No other branches found.";
          }
      ?>
      </p>
      <h3>Shop Pickup Areas</h3>
      <p>
      <?php
          include('connection.php');      
          
          $sql = "SELECT * FROM shops WHERE shop_name = '$shopname';";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) 
          {

              while($row = mysqli_fetch_assoc($result)) 
              {
                echo $row['shop_pickupareas'];
              }
          } 
          
          else 
          {
              echo "No pickup areas found.";
          }
      ?>
      </p>
      <h3>Shop Delivery Modes</h3>
      <p>
      <?php
          include('connection.php');      
          
          $sql = "SELECT * FROM shops WHERE shop_name = '$shopname';";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) 
          {

              while($row = mysqli_fetch_assoc($result)) 
              {
                echo $row['shop_delivery'];
              }
          } 
          
          else 
          {
              echo "No delivery modes found.";
          }
      ?>
      </p>
      <h3>Shop Payment Modes</h3>
      <p>
      <?php
          include('connection.php');      
          
          $sql = "SELECT * FROM shops WHERE shop_name = '$shopname';";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) 
          {

              while($row = mysqli_fetch_assoc($result)) 
              {
                echo $row['shop_payment'];
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
    </div>

    <div id="products" class="tab-pane fade">
      <h3>Products</h3>
      
          <div class="row">

          <?php
                include("connection.php");
                $sql = "SELECT * FROM items WHERE shop_id = '$shopid'";
                $result = mysqli_query($con,$sql);
                while($row = $result->fetch_assoc()) { 
                  $_SESSION['itemid'] = $row['item_id'];
          ?>
    
          <div class="col-md-3 col-sm-6">
          <br>
            <div class="product-grid">
                <div class="product-image" style="height: 233px;">
                    <a href="#"><?php echo '<img src = "data:image/jpeg;base64,'.base64_encode($row['item_image']).'"/>'; ?></a>  
                  <ul class="social">
                        <li><a href="merchant_myproducts.php" data-tip="View Product"><i class="fa fa-search"></i></a></li>
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
            <br>
        </div>

          <?php } ?>
  </div>
  
    </div>
    <div id="photos" class="tab-pane fade">
      <h3>Featured Photos</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>


<!-- also, verif if there is a shop created for the vendor already or wala pa - change create shop button accordingly -->

  

<?php include("merchant_script.php"); ?>

</body>
</html>