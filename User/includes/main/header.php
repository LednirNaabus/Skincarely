<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
  Skincarely
  </title> 
  <!-- Bootstrap -->
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
  <!-- Deleted JQuery JScript tag, already declared at footer -->
  <!-- Deleted Bootstrap JScript tag, no need unless used -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <!-- Font Family -->
  <link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" >
  <!-- Font Awesome --> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- No need for Ionicons --> 
  <!-- Main style --> 
  <link rel="stylesheet" type="text/css"href="dist/css/main.css?version=2"> 
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> 
  <!-- Deleted fontawesome kit js, no need for js + Font awesome icons already declared -->  
</head>  
<body>
<?php  
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("location: login_page.php");
        exit;
    }
?> 
  <?php include 'includes/main/navbar.php'; ?> 