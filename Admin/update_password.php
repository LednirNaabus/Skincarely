<?php
session_start();
?>

<?php      
    include('connection.php');  
    
    $password = $_POST['pass'];  
    $confirmpassword = $_POST['confirmpass'];  

    $user = $_SESSION['username'];


    if($password == $confirmpassword)
    {
        $sql = "UPDATE vendors SET vendor_password='$confirmpassword' WHERE vendor_username='$user'";

        if (mysqli_query($con, $sql)) {
            ob_start();
            header("Location: signin.php");
            ob_end_flush();
          } else {
            ob_start();
            header("Location: resetpassword.php");
            ob_end_flush();
          }
          
        mysqli_close($con);

    }

    else
    {
        ob_start();
        header("Location: resetpassword.php");
        ob_end_flush();
    }

            
          
        
?>  