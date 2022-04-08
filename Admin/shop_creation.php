<?php
session_start();
?>
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


            $shopname = $_POST['shopname']; 
            $shopdescription = $_POST['shopdescription']; 

            $shoplogo = addslashes(file_get_contents($_FILES['shoplogo']['tmp_name']));

            $mainbranch = $_POST['mainbranch'];   
            $contact = $_POST['landline'] . " / " . $_POST['mobile'];  
            $socials = $_POST['socials'];

            $_SESSION["shophours"] = $_POST['openinghours'] . " - " . $_POST['closinghours'];
            $_SESSION["shop"] = $shopname;
            $linkvs = $_SESSION["id"];

            $sql = "INSERT INTO shops (vendor_id, shop_name, shop_description, shop_logo, shop_location, shop_socials, shop_contact) VALUES ('$linkvs', '$shopname', '$shopdescription', '$shoplogo', '$mainbranch', '$socials', '$contact')";

              if (mysqli_query($con, $sql)) {
                  ob_start();
                  header("Location: merchant_shopprofile.php");
                  ob_end_flush(); 
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
              } 
            
?>  