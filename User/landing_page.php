<?php 
    session_start();

    // if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    //     header("location: login.php");
    //     exit;
    // }
?>


<?php
    include 'includes/landing/head.php';
?>
<?php
echo "Hi " . htmlspecialchars($_SESSION["username"]);
?>
<?php
    include 'includes/landing/footer.php';
?>