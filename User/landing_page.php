<?php 
    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("location: login_page.php");
        exit;
    }
    //TO DO:
    // LANDING PAGE
?>

<?php
    include 'includes/landing/head.php';
?>
<?php
echo "Hi " . htmlspecialchars($_SESSION["user"]);
?>
<a href="logout.php" class="link">Logout</a>
<?php
    include 'includes/landing/footer.php';
?>