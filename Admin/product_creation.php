<?php
session_start();    
?>
<?php      

            $host = "localhost";  
            $user = "root";  
            $password = '';  
            $db_name = "skincarely";  
              
            $con = mysqli_connect($host, $user, $password, $db_name);  
            if(mysqli_connect_errno()) {  
                die("Failed to connect with MySQL: ". mysqli_connect_error());  
            }  

            $productname = $_POST['productname']; 
            $productdescription = $_POST['productdescription']; 

            $productimage = addslashes(file_get_contents($_FILES['productimage']['tmp_name']));

            $productprice = $_POST['productprice'];   
            $productcategory = $_POST['category'];  

            $linkitem = $_SESSION["shopid"];

            $sql = "INSERT INTO items (shop_id, item_name, item_description, item_image, item_price, item_category) VALUES ('$linkitem', '$productname', '$productdescription', '$productimage', '$productprice', '$productcategory')";

              if (mysqli_query($con, $sql)) {
                  ob_start();
                  header("Location: merchant_myproducts.php");
                  ob_end_flush(); 
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
              } 
?>  