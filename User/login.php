<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
    header("Location: login_page.php");
    exit;
}

require_once "db_connection.php";

?>