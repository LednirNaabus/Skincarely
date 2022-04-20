<?php
  include 'includes/connection/db_connection.php';
  session_start();

  $username = ($_POST['user']);
  $password = ($_POST['passwd']);

  $sql = "SELECT * FROM customers WHERE customer_username = '$username'";

  $results = mysqli_query($link, $sql);
  $exists = mysqli_num_rows($results);

  $table_users = "";
  $table_passwd = "";
  $user_id = "";

  if($results != "") {
  while($row = mysqli_fetch_assoc($results)) {
    $table_users = $row["customer_username"];
    $table_passwd = $row["customer_password"];
    $user_id = $row["customer_id"];
  }

  if(($username == $table_users) && ($password == $table_passwd)) {
    $_SESSION['loggedin'] = true;
    $_SESSION['user'] = $username;
    $_SESSION['userID'] = $user_id;
    header("location: index.php");
  } else {
    Print '<script>alert("Incorrect Username or Password!");</script>';
    Print '<script>window.location.assign("login_page.php");</script>';
  }
}
?>