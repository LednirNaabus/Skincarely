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

$shopname = $_SESSION["shop"];
$shopid = $_SESSION["shopid"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely | My Products</title>
    
    <?php include('merchant_links.php'); ?>

    <?php include('merchant_myproducts_style.php'); ?>
</head>

<body style="background-color: #f7f3f2;">

  <?php include('navigation.php'); ?>

  <div class="container-fluid bgCenter bgImgCenter2 ">
    <h1 class="display-1 container welcomeTitle">My Products</h1>
      <br>
      <p class="container welcomeStatement"> Manage your shop's products and keep your customers updated of what you're offering. </p>          
      <br>  
      <p class="container" style="font-size:18px;"><button type="button" class="btn customBtn" data-toggle="modal" data-target="#myModal">Add Product to List</button></p>
  </div>

  <br>


  <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header"> <h4 class="modal-title">Add Product</h4> </div>

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
                  <div> 
                  <input type="radio" id="position1" name="category" value="Eye Makeup"> 
                  <label for="position1">Eye Makeup</label><br>

                  <input type="radio" id="position2" name="category" value="Face Makeup">
                  <label for="position1">Face Makeup</label><br>

                  <input type="radio" id="position3" name="category" value="Lip Makeup">  
                  <label for="position1">Lip Makeup</label><br>

                  <input type="radio" id="position4" name="category" value="Skincare">  
                  <label for="position1">Skincare</label><br>
                  </div>
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
    <h3 class class="display-3" id="productlist">List of Products</h3>
      <br>
      <form method="POST" style="display: inline-block;">
            <button class="btn customBtn" name = "all">All Products</button>
      </form>

      <form method="POST" style="display: inline-block;">
            <button class="btn customBtn" name = "lip"><i></i>Lip Makeup</button>
      </form>

      <form method="POST" style="display: inline-block;">
            <button class="btn customBtn" name = "eye"><i></i>Eye Makeup</button>
      </form>

      <form method="POST" style="display: inline-block;">
            <button class="btn customBtn" name = "face"><i></i>Face Makeup</button>
      </form>

      <form method="POST" style="display: inline-block;">
            <button class="btn customBtn" name = "skincare"><i ></i>Skincare</button>
      </form>
  </div>

  <br>

  <div class="container">
    <div class="row">
        <?php
              if(isset($_POST['all'])){
              include("connection.php");
              $sql = "SELECT * FROM items WHERE shop_id = '$shopid'";
              $result = mysqli_query($con,$sql);
              while($row = $result->fetch_assoc()) { 
                $_SESSION['itemid'] = $row['item_id'];
        ?>
    
        <div class="col-md-3 col-sm-6">
        <br>
            <div class="product-grid">
                <div class="product-image">
                    <a href="#"><?php echo '<img src = "data:image/jpeg;base64,'.base64_encode($row['item_image']).'"/>'; ?></a>  
                  <ul class="social">
                        <form action="editproduct.php" method="POST">
                        <input name="itemid" value="<?php echo $_SESSION['itemid']; ?>" style="width:0px; height:0px;" hidden>
                        <li><a href="editproduct.php" data-tip="View Product" style="color: white;"><button type="submit" style="background-color:transparent; border:none;"><i class="fa fa-search"></i></button></a></li>
                        <li><a href="editproduct.php" data-tip="Edit Product" style="color: white;"><button type="submit" style="background-color:transparent; border:none;"><i class="glyphicon glyphicon-pencil"></i></button></a></li>
                        <li><a href="product_delete.php" data-tip="Delete Product" style="color: white;"><i class="glyphicon glyphicon-trash"></i></a></li>
                        </form>
                    </ul>
                </div>
                <div class="product-content" style="padding-left: 15px; padding-right: 15px;">
                    <h3 class="title" style="font-weight: 700">
                      <?php echo '₱',$row['item_price']; ?>
                    </h3>
                    <h3 class="title" style="font-weight: 700">
                      <?php echo $row['item_name']; ?>
                    </h3>
                    <h4 class="title">
                      <?php echo $row['item_description']; ?>
                    </h4>
                    <br>
                </div>
            </div>
            <br>
        </div>

          <?php }} ?>

        <?php
              if(isset($_POST['eye'])){
              include("connection.php");
              $sql = "SELECT * FROM items WHERE shop_id = '$shopid' AND item_category = 'Eye Makeup'";
              $result = mysqli_query($con,$sql);
              while($row = $result->fetch_assoc()) { 
                $_SESSION['itemid'] = $row['item_id'];
        ?>
    
        <div class="col-md-3 col-sm-6">
        <br>
            <div class="product-grid">
                <div class="product-image">
                    <a href="#"><?php echo '<img src = "data:image/jpeg;base64,'.base64_encode($row['item_image']).'"/>'; ?></a>  
                  <ul class="social">
                        <form action="editproduct.php" method="POST">
                        <input name="itemid" value="<?php echo $_SESSION['itemid']; ?>" style="width:0px; height:0px;" hidden>
                        <li><a href="editproduct.php" data-tip="View Product" style="color: white;"><button type="submit" style="background-color:transparent; border:none;"><i class="fa fa-search"></i></button></a></li>
                        <li><a href="editproduct.php" data-tip="Edit Product" style="color: white;"><button type="submit" style="background-color:transparent; border:none;"><i class="glyphicon glyphicon-pencil"></i></button></a></li>
                        <li><a href="product_delete.php" data-tip="Delete Product" style="color: white;"><i class="glyphicon glyphicon-trash"></i></a></li>
                        </form>
                    </ul>
                </div>
                <div class="product-content" style="padding-left: 15px; padding-right: 15px;">
                    <h3 class="title" style="font-weight: 700">
                      <?php echo '₱',$row['item_price']; ?>
                    </h3>
                    <h3 class="title" style="font-weight: 700">
                      <?php echo $row['item_name']; ?>
                    </h3>
                    <h4 class="title">
                      <?php echo $row['item_description']; ?>
                    </h4>
                    <br>
                </div>
            </div>
            <br>
        </div>

          <?php }} ?>
        
        <?php
              if(isset($_POST['lip'])){
              include("connection.php");
              $sql = "SELECT * FROM items WHERE shop_id = '$shopid' AND item_category = 'Lip Makeup'";
              $result = mysqli_query($con,$sql);
              while($row = $result->fetch_assoc()) { 
                $_SESSION['itemid'] = $row['item_id'];
        ?>
    
        <div class="col-md-3 col-sm-6">
        <br>
            <div class="product-grid">
                <div class="product-image">
                    <a href="#"><?php echo '<img src = "data:image/jpeg;base64,'.base64_encode($row['item_image']).'"/>'; ?></a>  
                  <ul class="social">
                        <form action="editproduct.php" method="POST">
                        <input name="itemid" value="<?php echo $_SESSION['itemid']; ?>" style="width:0px; height:0px;" hidden>
                        <li><a href="editproduct.php" data-tip="View Product" style="color: white;"><button type="submit" style="background-color:transparent; border:none;"><i class="fa fa-search"></i></button></a></li>
                        <li><a href="editproduct.php" data-tip="Edit Product" style="color: white;"><button type="submit" style="background-color:transparent; border:none;"><i class="glyphicon glyphicon-pencil"></i></button></a></li>
                        <li><a href="product_delete.php" data-tip="Delete Product" style="color: white;"><i class="glyphicon glyphicon-trash"></i></a></li>
                        </form>
                    </ul>
                </div>
                <div class="product-content" style="padding-left: 15px; padding-right: 15px;">
                    <h3 class="title" style="font-weight: 700">
                      <?php echo '₱',$row['item_price']; ?>
                    </h3>
                    <h3 class="title" style="font-weight: 700">
                      <?php echo $row['item_name']; ?>
                    </h3>
                    <h4 class="title">
                      <?php echo $row['item_description']; ?>
                    </h4>
                    <br>
                </div>
            </div>
            <br>
        </div>

          <?php }} ?>

        <?php
              if(isset($_POST['face'])){
              include("connection.php");
              $sql = "SELECT * FROM items WHERE shop_id = '$shopid' AND item_category = 'Face Makeup'";
              $result = mysqli_query($con,$sql);
              while($row = $result->fetch_assoc()) { 
                $_SESSION['itemid'] = $row['item_id'];
        ?>
    
        <div class="col-md-3 col-sm-6">
        <br>
            <div class="product-grid">
                <div class="product-image">
                    <a href="#"><?php echo '<img src = "data:image/jpeg;base64,'.base64_encode($row['item_image']).'"/>'; ?></a>  
                  <ul class="social">
                        <form action="editproduct.php" method="POST">
                        <input name="itemid" value="<?php echo $_SESSION['itemid']; ?>" style="width:0px; height:0px;" hidden>
                        <li><a href="editproduct.php" data-tip="View Product" style="color: white;"><button type="submit" style="background-color:transparent; border:none;"><i class="fa fa-search"></i></button></a></li>
                        <li><a href="editproduct.php" data-tip="Edit Product" style="color: white;"><button type="submit" style="background-color:transparent; border:none;"><i class="glyphicon glyphicon-pencil"></i></button></a></li>
                        <li><a href="product_delete.php" data-tip="Delete Product" style="color: white;"><i class="glyphicon glyphicon-trash"></i></a></li>
                        </form>
                    </ul>
                </div>
                <div class="product-content" style="padding-left: 15px; padding-right: 15px;">
                    <h3 class="title" style="font-weight: 700">
                      <?php echo '₱',$row['item_price']; ?>
                    </h3>
                    <h3 class="title" style="font-weight: 700">
                      <?php echo $row['item_name']; ?>
                    </h3>
                    <h4 class="title">
                      <?php echo $row['item_description']; ?>
                    </h4>
                    <br>
                </div>
            </div>
            <br>
        </div>

          <?php }} ?>

          <?php
              if(isset($_POST['skincare'])){
              include("connection.php");
              $sql = "SELECT * FROM items WHERE shop_id = '$shopid' AND item_category = 'Skincare'";
              $result = mysqli_query($con,$sql);
              while($row = $result->fetch_assoc()) { 
                $_SESSION['itemid'] = $row['item_id'];
        ?>
    
        <div class="col-md-3 col-sm-6">
        <br>
            <div class="product-grid">
                <div class="product-image">
                    <a href="#"><?php echo '<img src = "data:image/jpeg;base64,'.base64_encode($row['item_image']).'"/>'; ?></a>  
                  <ul class="social">
                        <form action="editproduct.php" method="POST">
                        <input name="itemid" value="<?php echo $_SESSION['itemid']; ?>" style="width:0px; height:0px;" hidden>
                        <li><a href="editproduct.php" data-tip="View Product" style="color: white;"><button type="submit" style="background-color:transparent; border:none;"><i class="fa fa-search"></i></button></a></li>
                        <li><a href="editproduct.php" data-tip="Edit Product" style="color: white;"><button type="submit" style="background-color:transparent; border:none;"><i class="glyphicon glyphicon-pencil"></i></button></a></li>
                        <li><a href="product_delete.php"  data-tip="Delete Product" style="color: white;"><i class="glyphicon glyphicon-trash"></i></a></li>
                        </form>
                    </ul>
                </div>
                <div class="product-content" style="padding-left: 15px; padding-right: 15px;">
                    <h3 class="title" style="font-weight: 700">
                      <?php echo '₱',$row['item_price']; ?>
                    </h3>
                    <h3 class="title" style="font-weight: 700">
                      <?php echo $row['item_name']; ?>
                    </h3>
                    <h4 class="title">
                      <?php echo $row['item_description']; ?>
                    </h4>
                    <br>
                </div>
            </div>
            <br>
        </div>

          <?php }} ?>

    </div>

  </div>

  <br><br>


  <!-- <div class="container mb-5 h-100 d-flex flex-column">
    <div class="row h-25 bg-danger">
      <div class="col border">
        1 of 3
      </div>
      <div class="col-11">
        2 of 3 (wider)
      </div>
    </div>
    <div class="row flex-grow-1 bg-primary">
      <div class="col">
        1 of 3
      </div>
      <div class="col-11">
        2 of 3 (wider)
      </div>
    </div>
    <div class="row">
      <div class="col">
        1 of 3
      </div>
      <div class="col-11">
        2 of 3 (wider)
      </div>
    </div>
  </div> -->


  <?php include("merchant_script.php"); ?>

</body>
</html>