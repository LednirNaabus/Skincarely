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

    //$shoplogo = addslashes(file_get_contents($_FILES['shoplogo']['tmp_name']));

    $mainbranch = $_POST['mainbranch']; 
    $_SESSION["shophours"] = $_POST['openinghours'] . " - " . $_POST['closinghours'];  
    $contact = $_POST['landline'] . " / " . $_POST['mobile'];  
    $socials = $_POST['socials'];

    

    $linkvs = $_SESSION["id"];

              $sql = "UPDATE shops SET shop_name='$shopname', shop_description='$shopdescription', shop_location='$mainbranch', shop_socials='$socials', shop_contact='$contact' WHERE vendor_id='$linkvs'";

              if (mysqli_query($con, $sql)) {
                  ob_start();
                  header("Location: merchant_shopprofile.php");
                  ob_end_flush();
                } else {
                  echo "Failed.";
                }
                
              mysqli_close($con);

            
          
        
?>  