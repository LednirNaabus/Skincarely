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

            $edit = $_POST["prodedit"];

            $productname = $_POST['productname']; 
            $productdescription = $_POST['productdescription']; 

            $productimage = addslashes(file_get_contents($_FILES['productimage']['tmp_name']));

            $productprice = $_POST['productprice'];   
            $productcategory = $_POST['productcategory'];  

            $linkitem = $_SESSION["shopid"];

            $sql = "UPDATE items SET item_name='$productname', item_category='$productcategory', item_image='$productimage', item_price='$productprice', item_description='$productdescription' WHERE item_id='$edit'";

              if (mysqli_query($con, $sql)) {
                  ob_start();
                  header("Location: merchant_myproducts.php");
                  ob_end_flush(); 
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
              } 
?>  