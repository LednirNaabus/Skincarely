if vendor_id has an entry in the shop table, then go to merchant shop profile,
if there is not, then proceed to create

<?php
session_start();
$vendorverif = $_SESSION["id"];
?>

<?php      
    include('connection.php');  

            $sql = "select * from shops where vendor_id = '$vendorverif'";
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  

        if($count == 1){  
            ob_start();
            header("Location: merchant_shopprofile.php");
            ob_end_flush(); 
        }  
        else{  
            ob_start();
            header("Location: createshop.php");
            ob_end_flush(); 
        }     
          
?>  