<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely | Shop Profile</title>
    
    <?php include('merchant_links.php'); ?>

</head>
<body style="background-color: #f7f3f2;">

<?php include('navigation.php'); ?>

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
          echo $_SESSION["shophours"];
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

  

<?php include("merchant_script.php"); ?>

</body>
</html>