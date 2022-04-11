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

            $checkname = $_SESSION["welcomename"];

            $getvendorid = "SELECT * FROM vendors WHERE vendor_name = '$checkname';";
            $resultvendorid = mysqli_query($con, $getvendorid);

            if (mysqli_num_rows($resultvendorid) > 0) {
                while($row = mysqli_fetch_assoc($resultvendorid)) {
                    $_SESSION["vendorid"] = $row["vendor_id"];
                }

            } else {
                echo "0 results";
            }

            $linkvs = $_SESSION["vendorid"];

            $sql = "INSERT INTO shops (vendor_id, shop_name, shop_description, shop_logo, shop_location, shop_socials, shop_contact) VALUES ('$linkvs', '$shopname', '$shopdescription', '$shoplogo', '$mainbranch', '$socials', '$contact')";

              if (mysqli_query($con, $sql)) {

                $sqlname = "SELECT * FROM shops WHERE vendor_id = '$linkvs';";
                $resultname = mysqli_query($con, $sqlname);

                if (mysqli_num_rows($resultname) > 0) {
                    while($row = mysqli_fetch_assoc($resultname)) {
                        $_SESSION["shopid"] = $row["shop_id"];
                    }

                    $shoplink = $_SESSION["shopid"];

                    

                    $sqllinkshop = "UPDATE vendors SET shop_id='$shoplink' WHERE vendor_id='$linkvs'";;
                    $resultlink = mysqli_query($con, $sqllinkshop);

                    if (mysqli_query($con, $sql)) {
                      ob_start();
                      header("Location: signin.php");
                      ob_end_flush();
                    } else {
                      ob_start();
                      header("Location: resetpassword.php");
                      ob_end_flush();
                    }

                  ob_start();
                  header("Location: merchant_shopprofile.php");
                  ob_end_flush(); 
                } else {
                    echo "0 results";
                }

        
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
              } 
            
?>  