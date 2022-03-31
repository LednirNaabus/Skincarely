<?php 
    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("location: login_page.php");
        exit;
    }
?>


<?php
    include 'includes/landing/head.php';
?>
<?php
echo "Hi " . htmlspecialchars($_SESSION["user"]);
?>
<?php
    include 'includes/landing/footer.php';
?>