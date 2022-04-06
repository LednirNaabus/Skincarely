<?php include 'includes/login/head.php';?>
<!-- Login form -->
<section class="vh-100" style="background-color: #f7f3f2;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="dist/img/form-pic.jpg"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 800px; object-fit: cover;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="login.php" method="post" class="needs-validation" novalidate>
                  <div class="d-flex align-items-center mb-3 pb-1">
                  <i class="fas fa-crow fa-2x me-3" style="color: #AC7672;"></i>
                    <span class="h1 fw-bold mb-0">Skincarely</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="user">Username</label>
                    <input type="text" name="user" class="form-control form-control-lg" required/>
                    <span class="invalid-feedback">
                        Please enter your username.
                    </span>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="passwd">Password</label>
                    <input type="password" name="passwd" class="form-control form-control-lg" required/>
                    <span class="invalid-feedback">
                        Please enter your password.
                    </span>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-lg btn-block" type="submit" style="background-color: #AC7672; color: #fff;">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="registration.php" style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                  <p class="small text-muted">&copy; 2021-2022 Skincarely.ph</p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'includes/login/footer.php'; ?>