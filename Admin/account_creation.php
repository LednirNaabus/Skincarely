<?php
session_start();
?>

<?php

            include('connection.php'); 

            $firstname = $_POST['firstname']; 
            $lastname = $_POST['lastname']; 
            $username = $_POST['user']; 
            $email = $_POST['email'];  
            $password = $_POST['pass'];  
            $confirm = $_POST['confirmpass'];
            $name = $firstname . " " . $lastname;
            $created = date("Y-m-d");

            if($password!=$confirm)
            {
              echo "Password must be the same."; //create error message/prompt before continuing?
            }

            else
            {
                $check = "select * from vendors where vendor_username = '$username'";
                $result = mysqli_query($con, $check);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
    
                if($count == 1){  //create error message/prompt before continuing?
                    ob_start();
                    header("Location: signup.php");
                    ob_end_flush(); 
                }  
                
                else {  
                      $sql = "INSERT INTO vendors (vendor_username, vendor_password, vendor_name, vendor_email, vendor_created) VALUES ('$username', '$password', '$name', '$email', '$created')";
                      $_SESSION["welcomename"] = $name;

                      $sqlname = "SELECT * FROM vendors WHERE vendor_username = '$username';";
                      $resultname = mysqli_query($con, $sqlname);

                      if (mysqli_num_rows($resultname) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($resultname)) {
                              $_SESSION["id"] = $row["vendor_id"];
                          }
                      } 
                      
                      else {
                        echo "0 results";
                      }

              
                      if (mysqli_query($con, $sql)) {
                          ob_start();
                          header("Location: signin.php");
                          ob_end_flush(); 
                      } 
                      
                      else {
                          echo "Error: " . $sql . "<br>" . mysqli_error($con);
                      }
              
                      mysqli_close($con);
                      ob_start();
                      header("Location: merchant_dashboard.php");
                      ob_end_flush(); 
                  }     
            }

            
            
            
?>  