<?php
  
  // if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  //   header("location: landing_page.php");
  //   exit;
  // }

  // require_once "db_connection.php";

  // $username = $password = "";
  // $username_err = $password_err = $login_err = "";

  // if($_SERVER["REQUEST_METHOD"] == "POST") {
  //   //check if username and password field is empty
  //   if(empty(trim($_POST["user"]))) {
  //     $username_err = "Please enter your username.";
  //   } else {
  //     $username = trim($_POST["user"]);
  //   }

  //   if(empty(trim($_POST["passwd"]))) {
  //     $password_err = "Please enter your password.";
  //   } else {
  //     $password = trim($_POST["passwd"]);
  //   }

  //   //validate
  //   if(empty($username_err) && empty($password_err)) {
  //     $sql = "SELECT customer_id, customer_username, customer_password from customers WHERE customer_username = ?";
  //     if($stmt = mysqli_prepare($link, $sql)) {
  //       mysqli_stmt_bind_param($stmt, "s", $param_username);
  //       $param_username = $username;
  //       if(mysqli_stmt_execute($stmt)) {
  //         mysqli_stmt_store_result($stmt);
  //         if(mysqli_stmt_num_rows($stmt) == 1) {
  //           mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
  //           if(mysqli_stmt_fetch($stmt)) {
  //             if(password_verify($password, $hashed_password)) {
  //               session_start();
  //               $_SESSION["loggedin"] = true;
  //               $_SESSION['id'] = $id;
  //               $_SESSION['username'] = $username;

  //               header("Location: landing_page.php");
  //             } else {
  //               $login_err = "Invalid username or password.";
  //             }
  //           }
  //         } else {
  //           $login_err = "Invalid username or password.";
  //         }
  //       } else {
  //         echo "Error: Something went wrong. Please try again later.";
  //       }
  //       mysqli_stmt_close($stmt);
  //     }
  //   }
  //   mysqli_close($link);
  // }
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