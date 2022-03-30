<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincarely | Sign Up</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" >
    <!-- Font awesome icons -->
    <script src="https://kit.fontawesome.com/d9fb1896a3.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: #f7f3f2;">

<section class="vh-100" style="background-color: #f7f3f2;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
            <img src="img/placeholder.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;"/>
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form name = "vendorregister" action="creation.php" method="post">
                  <div class="d-flex align-items-center mb-3 pb-1">
                  <i class="fas fa-crow fa-2x me-3" style="color: #AC7672;"></i>
                    <span class="h1 fw-bold mb-0">Skincarely</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register an account</h5>

                <div class="row mb-4">
                    <div class="col">
                    <div class="form-outline">
                        <input type="text" id="firstname" name = "firstname" class="form-control form-control-lg" required />
                        <label class="form-label" for="firstname">First Name</label>
                    </div>
                    </div>
                    <div class="col">
                    <div class="form-outline">
                        <input type="text" id="lastname" name = "lastname" class="form-control form-control-lg" required />
                        <label class="form-label" for="lastname">Last Name</label>
                    </div>
                    </div>
                </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="email" name = "email" class="form-control form-control-lg" required />
                    <label class="form-label" for="email">Email Address</label>
                  </div>

                <div class="row mb-4">
                    <div class="col">
                    <div class="form-outline">
                        <input type="text" id="user" name = "user" class="form-control form-control-lg" required />
                        <label class="form-label" for="user">Username</label>
                    </div>
                    </div>
                    <div class="col">
                    <div class="form-outline">
                        <input type="password" id="pass" name = "pass" class="form-control form-control-lg" required/>
                        <label class="form-label" for="pass">Password</label>
                    </div>
                    </div>
                </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-lg btn-block" type="submit" style="background-color: #AC7672; color: #fff;">Register</button>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


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
</body>
</html>