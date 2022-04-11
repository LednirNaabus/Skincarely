<?php
session_start();    
?>
<?php      

            include('connection.php');

            $itemid = $_SESSION['itemid'];

            $phpdatabase = "DELETE FROM items WHERE item_id='$itemid'";
            
              if (mysqli_query($con, $phpdatabase)) {
                  ob_start();
                  header("Location: merchant_myproducts.php");
                  ob_end_flush(); 
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
              } 
?>  