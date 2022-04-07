<?php
session_start();
$_SESSION["username"] = $_POST['user'];
?>

<?php      
    include('connection.php');  
    
    $email = $_POST['email'];  
    $username = $_POST['user'];  
    
      
            $sql = "select * from vendors where vendor_username = '$username' and vendor_email = '$email'";
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  

        if($count == 1){  
            ob_start();
            header("Location: resetpassword.php");
            ob_end_flush(); 
        }  
        else{  
            ob_start();
            header("Location: check.php");
            ob_end_flush(); 
        }     
          
?>  