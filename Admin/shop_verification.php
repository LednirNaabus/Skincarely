<?php
    session_start();      
    include('connection.php');  

            $sql = "SELECT * FROM shops WHERE vendor_id=".$_SESSION["vendorid"];
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