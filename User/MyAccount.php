<?php
$pageName = "My Account";
include "includes/header.php";
include "db_connection.php";

//CHANGE CUSTOMER ID
$result= mysqli_query($link, "SELECT * FROM customers WHERE customer_id = 2");
$userInfo = mysqli_fetch_row($result);  
?>    
<div class="content-wrapper">
    <div class="row">
        <div class="sidebar col-2"> 
            <!-- Page Sidebar -->
            <aside class="main-sidebar sidebar-dark-primary"> 
                <div class="sidebar" >
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    <?php if($userInfo[8] == NULL){
                            echo '<img src="dist/img/user.png" class="img-circle" alt="User Image">' ;
                            }else{
                            echo '<img src="data:image;base64,',base64_encode($userInfo[8]),'alt="" class="img-circle">';
                            }  
                        ?> 
                    </div>
                    <div class="info">
                    <a href="#"><b>Kobe Sergio</b></a> 
                    <a href="#" class="nav-link" style="padding-top: 0px; padding-left: 0px;"> <i class="fa-solid fa-pen-to-square"></i> Edit Profile</a> 
                    </div>
                </div>  
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
                    <li class="nav-header"><b><i class="nav-icon fa-solid fa-user"></i>My Account</b></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><p>Profile</p></a>
                    </li>  
                    <li class="nav-item">
                        <a href="#" class="nav-link"><p>Bookmarks</p></a>
                    </li>  
                    <li class="nav-item">
                        <a href="#" class="nav-link"><p>Saved</p></a>
                    </li>  
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
                </div>
            </aside>  
            <!-- /.sidebar -->
        </div> 
        <!-- Content Header (Page header) -->
        <div class="col-10">
        <div class="row">
        <section class="content-header" >
            <div class="container-fluid">
                <div class="row"> 
                    <h1>My Account</h1> 
                </div> 
                <div class="row"> 
                    <p style="margin-top: 2px">Manage and protect your account here</p> 
                </div>
            </div><!-- /.container-fluid -->
        </section> 
        </div>
        <!-- Main content --> 
        <section class="content">   
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row"> 
                <div class="col-lg-6">  
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" class="form-control" name="CustomerUsername" id="Username" value="<?php echo $userInfo[1]; ?>" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" name="CustomerName" id="Name" value="<?php echo $userInfo[3]; ?>"  placeholder="Name">
                    </div>  
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" name="CustomerEmail" id="Email" value="<?php echo $userInfo[4]; ?>"  placeholder="Email">
                    </div>  
                    <div class="form-group">
                        <label for="Contact">Phone Number</label>
                        <input type="tel" class="form-control" name="CustomerPhoneNumber" id="Phone Number" value="<?php echo $userInfo[5]; ?>"  placeholder="Phone Number">
                    </div>   
                    <div class="form-group">
                        <label for="Birthdate">Birthdate</label>
                        <input type="date" class="form-control" name="CustomerBirthdate" id="Birthdate" value="<?php echo $userInfo[6]; ?>"  placeholder="Birthdate">
                    </div>   
                    <div class="row">
                        <div class="col-lg-12">  
                            <button type="submit" class="btn btn-primary float-right" style="padding: 0.375rem 2rem;">Update</button>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-6">
                <div class=" h-100 d-flex justify-content-center align-items-center">
                    <div>
                        <div class="image" style="text-align:center">
                        <?php if($userInfo[8] == NULL){ 
                        echo '<img src="dist/img/user.png" class="img-circle" alt="User Image">' ;
                        }else{
                        echo '<img src="data:image;base64,',base64_encode($userInfo[8]),'alt="" class="img-circle">';
                        } 
                        ?> 
                        </div>
                        <div class="row justify-content-center"> 
                        <input type="file" id="fileToUpload" name="fileToUpload" style="display: none;" />
                        <button type="button" onclick="document.getElementById('fileToUpload').click();" class="btn btn-outline-dark" style="padding: 0.375rem 2rem; margin: 1rem 0 1rem 0">Select Image</button>
                        </div>
                        <div class="row justify-content-center"> 
                        File size: maximum 1 MB <br>
                        File extension: .JPEG, .PNG
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </form>
        </section>
        <!-- /.content -->  
    </div>
    </div> 
</div> 
  
<?php include "includes/footer.php"; ?>    
<?php  
if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    $username = $_POST['CustomerUsername'];
    $name = $_POST['CustomerName'];
    $email = $_POST['CustomerEmail'];
    $phonenum = $_POST['CustomerPhoneNumber'];
    $birthdate = $_POST['CustomerBirthdate']; 
    $imageData = mysqli_real_escape_string($link, file_get_contents($_FILES['fileToUpload']['tmp_name']));
    $imageType = mysqli_real_escape_string($link, $_FILES['fileToUpload']['type']); 
    if(substr($imageType,0,5) == "image"){ 
    $query = "UPDATE customers SET customer_username ='$username', customer_name='$name', customer_email='$email', customer_contact='$phonenum', 
              customer_birthdate='$birthdate', customer_img ='$imageData' WHERE customer_id = 2";

    $sql = mysqli_query($link, $query); 
    if($sql){
        echo "<script type ='text/JavaScript'>";  
        echo "alert('Profile updated')";    
        echo "</script>"; 
        unset($_POST);
        echo "<script>window.location.href='MyAccount.php';</script>";
        }else{
        echo "<script type ='text/JavaScript'>";  
        echo "alert('Profile failed to update')";    
        echo "</script>"; 
        unset($_POST);
        }
    }else{
        echo "<script type ='text/JavaScript'>";  
        echo "alert('Upload must be an image')";   
        echo "</script>";  
        }
    }
?>