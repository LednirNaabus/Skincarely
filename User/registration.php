<?php
  require_once "includes/connection/db_connection.php";
  $username = $password = $confirm_password = $first_name = $last_name = $email = $full_name = "";
  $username_err = $password_err = $confirm_password_err = $first_name_err = $last_name_err = $email_err = "";
  $date_created = date("Y-m-d");

  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    //check if input field for first name and last name is empty
    if(empty(trim($_POST['fn']))) {
      $first_name_err = "Please enter your first name.";
    } else {
      $first_name = trim($_POST['fn']);
    }

    if(empty(trim($_POST['ln']))) {
      $last_name_err = "Please enter your last name.";
    } else {
      $last_name = trim($_POST['ln']);
    }

    //validate name
    if(empty($first_name_err) && empty($last_name_err)) {
      $full_name = $first_name . " " . $last_name;
      $sql = "SELECT customer_id FROM customers where customer_name = ?";
      if($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $param_fullname);
        $param_fullname = $full_name;
        if(mysqli_stmt_execute($stmt)) {
          mysqli_stmt_store_result($stmt);
          $full_name = $param_fullname;
        }
        mysqli_stmt_close($stmt);
      }
    }

    //validate username
    if(empty(trim($_POST['username']))) {
      $username_err = "Please enter a valid username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST['username']))) {
      $username_err = "Username should contain numbers and letters.";
    } else {
      // prepare select statement
      $sql = "SELECT customer_id FROM customers WHERE customer_username = ?";

      if($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = trim($_POST['username']);
        if(mysqli_stmt_execute($stmt)) {
          mysqli_stmt_store_result($stmt);
          if(mysqli_stmt_num_rows($stmt) == 1) {
            $username_err = "Username already taken.";
          } else {
            $username = trim($_POST['username']);
          }
        } else {
          echo "Error.";
        }
        mysqli_stmt_close($stmt);
      }
    }

    //validate email
    if(empty(trim($_POST['email']))) {
      $email_err = "Please enter your email.";
    } else {
      $sql = "SELECT customer_id FROM customers where customer_email = ?";
      
      if($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        $param_email = trim($_POST['email']);
        if(mysqli_stmt_execute($stmt)) {
          mysqli_stmt_store_result($stmt);
          if(mysqli_stmt_num_rows($stmt) == 1) {
            $email_err = "Email already taken.";
          } else {
            $email = trim($_POST['email']);
          }
        } else {
          echo "Error.";
        }
        mysqli_stmt_close($stmt);
      }
    }

    //validate password and password confirmation
    if(empty(trim($_POST['password']))) {
      $password_err = "Please enter your password.";
    } elseif(strlen(trim($_POST['password']) < 7)) {
      $password_err = "Password must be atleast 7 characters.";
    } else {
      $password = trim($_POST['password']);
    }

    if(empty(trim($_POST['confirm_password']))) {
      $confirm_password_err = "Please confirm your password.";
    } else {
      $confirm_password = trim($_POST['confirm_password']);
      if(empty($password_err) && ($password != $confirm_password)) {
        $confirm_password_err = "Password confirmation did not match.";
      }
    }

    // check the input errors beofre inserting into database
    if(empty($username_err) && empty($email_err) && empty($first_name_err) && empty($last_name_err) && empty($password_err) && empty($confirm_password_err)) {
      //prepare insert statement 
      $sql = "INSERT INTO customers (customer_username, customer_password, customer_name, customer_email, customer_created) VALUES (?,?,?,?,?)";

      if($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_password, $param_fullname, $param_email, $param_date_created);
        //set parameters
        $param_username = $username;
        //$param_password = password_hash($_POST['password'], PASSWORD_DEFAULT);// pang-encrypt
        $param_password = $password;
        $param_fullname = $full_name;
        $param_email = $email;
        $param_date_created = $date_created;

        if(mysqli_stmt_execute($stmt)) {
          //redirect to registration success
          header("Location: login_page.php");
        } else {
          echo "Error.";
        }
        mysqli_stmt_close($stmt);
      }
    }
    mysqli_close($link);
  } //end if
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely | Login</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Sripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" >
    <!-- Font awesome icons -->
    <script src="https://kit.fontawesome.com/d9fb1896a3.js" crossorigin="anonymous"></script>
</head>
<body> 
<section class="vh-100" style="background-color: #f7f3f2;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="dist/img/img1.webp"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 800px;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                  <div class="d-flex align-items-center mb-4 pb-3">
                  <i class="fas fa-crow fa-2x me-3" style="color: #AC7672;"></i>
                    <span class="h1 fw-bold mb-0">Skincarely</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create an account</h5>

                  <div class="row">
                      <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="fn" class="form-label">First Name</label>
                            <input type="text" name="fn" class="form-control  <?php echo(!empty($first_name_err)) ? 'is-invalid' : '';?>" value="<?php echo $first_name; ?>"/>
                          </div>
                      </div>
                      <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="ln" class="form-label">Last Name</label>
                            <input type="text" name="ln" class="form-control <?php echo(!empty($last_name_err)) ? 'is-invalid' : '';?>" value="<?php echo $last_name; ?>"/>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-6 mb-4">
                          <div class="form-outline">
                              <label for="username" class="form-label">Username</label>
                              <input type="text" name="username" class="form-control <?php echo(!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>"/>
                          </div>
                      </div>
                      <div class="col-md-6 mb-4">
                          <div class="form-outline">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" name="email" class="form-control <?php echo(!empty($email_err)) ? 'is-invalid' : '';?>" value="<?php echo $email; ?>"/>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="form-outline mb-4">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control <?php echo(!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>"/>
                      </div>
                      <div class="form-outline mb-4">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control <?php echo(!empty($confirm_password_err)) ? 'is-invalid' : '';?>" value="<?php echo $confirm_password; ?>" />
                      </div>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-block" type="submit" style="background-color: #AC7672; color: #fff;">Register</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="login_page.php" style="color: #393f81;">Login here</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
</html>