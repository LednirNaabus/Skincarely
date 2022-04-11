<?php
session_start();
?>

<?php      
    include('connection.php');  
    
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
            $sql = "select * from vendors where vendor_username = '$username' and vendor_password = '$password'";
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  

        if($count == 1){  
            ob_start();
            header("Location: merchant_dashboard.php");
            ob_end_flush(); 
        }  
        else{  
            ob_start();
            header("Location: signin.php");
            ob_end_flush(); 
        }     

        $sqlname = "SELECT * FROM vendors WHERE vendor_username = '$username';";
        $resultname = mysqli_query($con, $sqlname);

        if (mysqli_num_rows($resultname) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($resultname)) {
                $_SESSION["welcomename"] = $row["vendor_name"];
                $_SESSION["vendorid"] = $row["vendor_id"];
            }

        } else {
            echo "0 results";
        }
          
        
?>  