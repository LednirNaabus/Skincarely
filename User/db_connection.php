<?php

$host = "localhost";
$user = "root";
$pw = '';
$db = "skincarely";

$con = mysqli_connect($host,$user,$pw,$db);
if(mysqli_connect_errno()) {
    die("Failed to connect with MySQL: ".mysqli_connect_error());
}

$f_name = $_POST['fn'];
$l_name = $_POST['ln'];
$user_name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$name = $f_name . " " . $l_name;
$created = date("Y-m-d");

$sql = "INSERT INTO customers (customer_username, customer_password, customer_name, customer_email, customer_created) VALUES ('$user_name', '$pass', '$name', '$email', '$created')";

if(mysqli_query($con, $sql)) {
    ob_start();
    header("Location: login_page.php");
    ob_end_flush();
} else {
    echo "Error: " .$sql. "<br>" .mysqli_error($con);
}

mysqli_close($con);

?>