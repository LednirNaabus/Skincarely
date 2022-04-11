<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely | Business Insights</title>
    
    <?php include('merchant_links.php'); ?>

</head>
<body style="background-color: #f7f3f2;">

<?php include('navigation.php'); ?>

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

<?php include("merchant_script.php"); ?>

</body>
</html>