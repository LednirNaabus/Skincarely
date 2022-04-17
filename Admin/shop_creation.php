<?php
session_start();
?>
<?php

include('connection.php'); 

            $shopname = $_POST['shopname']; 
            $shopmotto = $_POST['shopmotto']; 
            $shopdescription = $_POST['shopdescription']; 
            $shopmainbranch = $_POST['mainbranch']; 

            $ob = array();

            if(isset($_POST["otherbranch"]))
            {
                foreach ($_POST['otherbranch'] as $otherbranch)
                array_push($ob, $otherbranch);
            }

            $shopotherbranch = implode(" / ",$ob);
            
            $pu = array();

            if(isset($_POST["pickup"]))
            {
                foreach ($_POST['pickup'] as $pickup)
                array_push($pu, $pickup);
            }

            $shoppickup = implode(" / ",$pu);

            $dl = array();

            if(isset($_POST["delivery"]))
            {
                foreach ($_POST['delivery'] as $delivery)
                array_push($dl, $delivery);
            }

            $shopdelivery = implode(" / ",$dl);

            $pm = array();

            if(isset($_POST["payment"]))
            {
                foreach ($_POST['payment'] as $payment)
                array_push($pm, $payment);
            }

            $shoppayment = implode(" / ", $pm);
            

            $shoplogo = addslashes(file_get_contents($_FILES['shoplogo']['tmp_name']));

            $shopcontact = $_POST['landline'] . " / " . $_POST['mobile'];  
            $shopsocials = "facebook.com/" . $_POST['socials1'] . " | " . "twitter.com/" . $_POST['socials2'] . " | " . "instagram.com/" . $_POST['socials3'];

            $_SESSION["shop"] = $shopname; $checkname = $_SESSION["welcomename"];

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

            $sql = "INSERT INTO shops (vendor_id, shop_name, shop_logo, shop_motto, shop_description, shop_mainbranch, shop_otherbranch, shop_pickupareas, shop_delivery, shop_payment, shop_socials, shop_contact) VALUES ('$linkvs', '$shopname', '$shoplogo', '$shopmotto', '$shopdescription', '$shopmainbranch', '$shopotherbranch', '$shoppickup', '$shopdelivery', '$shoppayment', '$shopsocials', '$shopcontact')";

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

                    if (mysqli_query($con, $sqllinkshop)) {
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