<?php
session_start();
?>

<?php      
    include('connection.php');  

    $shopname = $_POST['shopname']; 
    $shopmotto = $_POST['shopmotto']; 
    $shopdescription = $_POST['shopdescription']; 
    $shopmainbranch = $_POST['mainbranch']; 
    $shopotherbranch = $_POST['otherbranch']; 
    $shoppickup = $_POST['pickup']; 
    $shopdelivery = $_POST['delivery']; 
    $shoppayment = $_POST['payment']; 

    $shoplogo = addslashes(file_get_contents($_FILES['shoplogo']['tmp_name']));
    $img = $_FILES['shoplogo']['tmp_name'];

    $contact = $_POST['landline'] . " / " . $_POST['mobile'];  
    $socials = $_POST['socials'];

    if($img != null) {
      $img_d = addslashes(file_get_contents($img));
      $q = "UPDATE shops SET shop_name='$shopname', shop_logo='$img_d', shop_motto='$shopmotto', shop_description='$shopdescription', shop_mainbranch='$shopmainbranch', shop_otherbranch='$shopotherbranch', shop_pickupareas='$shoppickup', shop_delivery='$shopdelivery', shop_payment='$shoppayment', shop_contact='$contact', shop_socials='$socials' WHERE shop_id='$linkvs'";
    } else {
      echo "<script type ='text/JavaScript'>";
      echo "alert('Upload must be an image')";
      echo "</script>";
    }

    $linkvs = $_SESSION["shopid"];

              $sql = "UPDATE shops SET shop_name='$shopname', shop_logo='$img_d', shop_motto='$shopmotto', shop_description='$shopdescription', shop_mainbranch='$shopmainbranch', shop_otherbranch='$shopotherbranch', shop_pickupareas='$shoppickup', shop_delivery='$shopdelivery', shop_payment='$shoppayment', shop_contact='$contact', shop_socials='$socials' WHERE shop_id='$linkvs'";

              if (mysqli_query($con, $sql)) {
                  ob_start();
                  header("Location: merchant_shopprofile.php");
                  ob_end_flush();
                } else {
                  echo "Failed.";
                }
                
              mysqli_close($con);

            
          
        
?>  