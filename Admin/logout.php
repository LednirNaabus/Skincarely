<?php
session_unset();

session_destroy();

            ob_start();
            header("Location: index.php");
            ob_end_flush(); 
?>