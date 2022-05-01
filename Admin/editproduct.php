<?php
session_start();

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

<body style="background-color: #f7f3f2; font-family: Poppins">

  <?php include('navigation.php'); ?>

  
  <div class="container p-3 my-3 border" style="background-color: white; text-align:center;">

    <?php
              include("connection.php");

              $item = $_POST['itemid'];

              $sql = "SELECT * FROM items WHERE item_id = '$item'";
              $result = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
              $count = mysqli_num_rows($result); 
    ?>

    <h1><?php echo '<img style="height:300px;" src = "data:image/jpeg;base64,'.base64_encode($row['item_image']).'"/>'; ?></h1>

    <br>

    <h2><?php echo $row['item_name']; ?></h2>

    <br>
    <hr style="width: 50%; margin:auto;">
    <br>

    <p><?php echo $row['item_description']; ?></p>
    <p style="display: inline-block;"><?php echo "Price: " . $row['item_price']; ?></p> | <p style="display: inline-block;"><?php echo "Category: " . $row['item_category']; ?></p>
    <br>
    <br>
    <p>
    <a href="merchant_myproducts.php" style="color: white;"><button type="submit" class="btn btn-info btn-sm" style="background-color: #8C5652; border:none;">Back to Product List</button></a>
      <button style="background-color: #8C5652; color:white; border:none;" type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Edit Product</button>
    </p>
    <br>

    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header"> <h4 class="modal-title">Edit Product</h4> </div>

          <div class="modal-body" style="text-align: left;">
          <form action="product_edit.php" method="post" enctype="multipart/form-data">
          <input name="prodedit" value="<?php echo $item; ?>" style="width:0px; height:0px;" hidden>
                <div class="form-group">
                  <label for="productname">Product Name</label>
                  <input type="text" class="form-control" id="productname" name="productname" value="<?php echo $row['item_name']; ?>">
                </div>

                <div class="form-group">
                  <label for="productdescription">Product Description</label>
                  <textarea class="form-control" id="productdescription" name="productdescription"><?php echo $row['item_description']; ?></textarea>
                </div>

                <div class="form-group">
                  <label for="productimage">Product Image</label>
                  <input type="file" class="form-control-file" id="productimage" name="productimage">
                </div>

                <label for="productprice">Product Price</label><br>
                <div class="form-group input-group">
                  <span class="input-group-addon">PhP</span> 
                  <input type="text" class="form-control" id="productprice" name = "productprice" value="<?php echo $row['item_price']; ?>">
                </div>

                <label for="category">Product Category</label><br>
                <div class="form-group input-group">
                  <input type="text" class="form-control" id="productcategory" name = "productcategory" value="<?php echo $row['item_category']; ?>">
                </div>
          </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
          </form>
        </div>
        
      </div>
  </div>

  </div>



  <?php include("merchant_script.php"); ?>

</body>
</html>