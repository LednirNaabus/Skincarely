<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely</title>
    <link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> 
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="css/style.css?version=2">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" style="padding: 0 1rem 0;"></span> Logout </a></li>
            </ul>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="wrapper">