<?php
    require_once "db_connection.php";

    $username = $pass = $confirm_pw = $email = $first_name = $last_name = $full_name = "";
    $username_err = $pass_err = $confirm_pw_err = $email_err = $fname_err = $lname_err = $name_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty(trim($_POST['username']))) {
            $username_err = "Please enter a username.";
        } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
            $username_err = "Username can only contain letters and numbers.";
        } else {
            $sql = "SELECT customer_id from customers WHERE customer_username = ?";

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
                    echo "Error. Something went wrong. Try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }

        if(empty(trim($_POST['fn'])) && empty(trim($_POST['ln']))) {
            $fname_err = "Please enter your first name.";
            $lname_err = "Please enter your last name.";
        } else {
            $full_name = $_POST['fn'] . " " . $_POST['ln'];
            $sql = "SELECT customer_id from customers WHERE customer_name = ?";
            if($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_name);
                $param_name = trim($full_name);

                if(mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1) {
                        $name_err = "User already exists in database.";
                    } else {
                        $full_name = trim($full_name);
                    }
                } else {
                    echo "Error. Something went wrong. Try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }

        if(empty(trim($_POST['email']))) {
            if(empty(trim($_POST['email']))) {
                $email_err = "Please enter a valid email.";
            }
        } else {
            $sql = "SELECT customer_id from customers WHERE customer_email = ?";
            if($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_email);
                $param_email = trim($_POST['email']);

                if(mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1) {
                        $email_err = "Email is already taken.";
                    } else {
                        $email = trim($_POST['email']);
                    }
                } else {
                    echo "Error. Something went wrong. Try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }

        //validate password
        if(empty(trim($_POST['password']))) {
            $pass_err = "Please enter a valid password.";
        } elseif(strlen(trim($_POST['password'])) < 6) {
            $pass_err = "Password must have atleast 6 characters.";
        } else {
            $pass = trim($_POST['password']);
        }

        //validate confirm pw
        if(empty(trim($_POST['confirm_password']))) {
            $confirm_pw_err = "Please confirm your password.";
        } else {
            $confirm_pw = trim($_POST['confirm_password']);
            if(empty($pass_err) && ($pass != $confirm_pw)) {
                $confirm_pw_err = "Password does not match.";
            }
        }

        if(empty($username_err) && empty($pass_err) && empty($confirm_pw_err) && empty($email) && empty($full_name)) {
            $sql = "INSERT INTO customers (customer_username, customer_password, customer_name,customer_email, customer_created) VALUES (?,?,?,?,?)";

            if($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password, $param_name, $param_email, $param_date);

                $param_username = $username;
                $param_password = password_hash($password, PASSWORD_DEFAULT);
                $param_email = $email;
                $param_date = date("Y-m-d");

                if(mysqli_stmt_execute($stmt)) {
                    header("Location: login_page.php");
                } else {
                    echo "Error. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }
        mysqli_close($link);
    }
?>

<?php
    include 'includes/login/head.php';

?>
<section class="vh-100" style="background-color: #f7f3f2;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="img/img1.webp"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" novalidate>
                  <div class="d-flex align-items-center mb-4 pb-3">
                  <i class="fas fa-crow fa-2x me-3" style="color: #AC7672;"></i>
                    <span class="h1 fw-bold mb-0">Skincarely</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create an account</h5>

                  <div class="row">
                      <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="fn" class="form-label">First Name</label>
                            <input type="text" name="fn" class="form-control <?php echo (!empty($fname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $first_name; ?>"/>
                            <span class="invalid-feedback">
                                <?php echo $fname_err; ?>
                            </span>
                          </div>
                      </div>
                      <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="ln" class="form-label">Last Name</label>
                            <input type="text" name="ln" class="form-control <?php echo (!empty($lname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $last_name; ?>" required/>
                            <span class="invalid-feedback">
                                <?php echo $lname_err; ?>
                            </span>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-6 mb-4">
                          <div class="form-outline">
                              <label for="username" class="form-label">Username</label>
                              <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" />
                              <span class="invalid-feedback">
                                  <?php echo $username_err; ?>
                              </span>
                          </div>
                      </div>
                      <div class="col-md-6 mb-4">
                          <div class="form-outline">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>"/>
                              <span class="invalid-feedback">
                                  <?php echo $email_err; ?>
                              </span>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="form-outline mb-4">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control <?php echo (!empty($pass_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $pass; ?>" />
                          <span class="invalid-feedback">
                              <?php echo $pass_err; ?>
                          </span>
                      </div>
                      <div class="form-outline mb-4">
                          <label for="confirm_password" class="form-label">Confirm Password</label>
                          <input type="password" name="confirm_password" class="form-control <?php echo (!empty($$confirm_pw_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_pw; ?>" />
                          <span class="invalid-feedback">
                              <?php echo $confirm_pw_err; ?>
                          </span>
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
<?php
    include 'includes/login/footer.php';
?>