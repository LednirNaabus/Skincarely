<?php
$pageName='Quotations';
include('header.php'); 
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
                    <img src="dist/img/user.png" class="img-circle" alt="User Image">
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
            <div class="row">
                <div class="col-lg-6">  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
                    </div>  
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                    </div>  
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
                    </div>  
                    <div class="form-group">
                        <label for="exampleInputPassword1">Shop Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Shop Name">
                    </div>  
                    <div class="form-group">
                        <label for="exampleInputPassword1">Birthdate</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Birthdate">
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
                        <img src="dist/img/user.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="row justify-content-center"> 
                        <button type="button" class="btn btn-outline-dark" style="padding: 0.375rem 2rem; margin: 1rem 0 1rem 0">Select Image</button>
                        </div>
                        <div class="row justify-content-center"> 
                        File size: maximum 1 MB <br>
                        File extension: .JPEG, .PNG
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->  
    </div>
    </div> 
</div> 
  
<?php
include('footer.php');
?> 
  
<script>
$(document).ready(function () {
  $('body').on('click', '#selectAll', function () {
    if ($(this).hasClass('allChecked')) {
        $('input[type="checkbox"]', '#inbox').prop('checked', false);
    } else {
        $('input[type="checkbox"]', '#inbox').prop('checked', true);
    }
    $(this).toggleClass('allChecked');
  })
});
</script>