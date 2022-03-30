<?php      

include('connection.php'); 

            $host = "localhost";  
            $user = "root";  
            $password = '';  
            $db_name = "skincarely";  
              
            $con = mysqli_connect($host, $user, $password, $db_name);  
            if(mysqli_connect_errno()) {  
                die("Failed to connect with MySQL: ". mysqli_connect_error());  
            }  

            $firstname = $_POST['firstname']; 
            $lastname = $_POST['lastname']; 
            $username = $_POST['user']; 
            $email = $_POST['email'];  
            $password = $_POST['pass'];  
            $name = $firstname . " " . $lastname;
            $created = date("Y-m-d");
            
            $sql = "INSERT INTO vendors (vendor_username, vendor_password, vendor_name, vendor_email, vendor_created) VALUES ('$username', '$password', '$name', '$email', '$created')";
            
            if (mysqli_query($con, $sql)) {
                ob_start();
                header("Location: sellerLogin.php");
                ob_end_flush(); 
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
            
            mysqli_close($con);
?>  