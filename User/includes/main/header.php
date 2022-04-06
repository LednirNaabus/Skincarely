<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
  Skincarely
  </title>    
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Sripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Font Family -->
  <link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" >
  <!-- Font Awesome --> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
  <!-- Main style --> 
  <link rel="stylesheet" type="text/css"href="dist/css/main.css?version=1"> 
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> 
  <!-- Font awesome icons -->
  <script src="https://kit.fontawesome.com/d9fb1896a3.js" crossorigin="anonymous"></script>  
  <style>
        /* Hours wasted on styling the jumbotron: 2139218312 hours
        I hate CSS */
        .bg-img {
            background-image: url('dist/img/landing-cover.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            z-index: -1;
        }

        .bg-img .jumbotron {
            background: linear-gradient(0deg, #00000088 30%, #FFFFFF44 100%);
            color: #fff;
            z-index: 0;
        }
    </style>
</head>  
<body style="padding-top: 3.5rem;">
<div class="wrapper"> 
<?php  
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("location: login_page.php");
        exit;
    }
    include 'includes/main/navbar.php'; 
?>