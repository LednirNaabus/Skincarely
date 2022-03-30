<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'skincarely');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$f_name = $_POST['fn'];
$l_name = $_POST['ln'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = $f_name . " " . $l_name;
$created = date("Y-m-d");

$sql = "INSERT INTO customers (customer_username, customer_password, customer_name, customer_email, customer_created) VALUES ('$username', '$password', '$name', '$email', '$created')";

if(mysqli_query($link, $sql)) {
    ob_start();
    header("Location: login_page.php");
    ob_end_flush();
} else {
    echo "Error: " .$sql. "<br>" . mysqli_error($link);
}

mysqli_close($link);
?>