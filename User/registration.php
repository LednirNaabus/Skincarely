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
                <form action="db_connection.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  <div class="d-flex align-items-center mb-3 pb-1">
                  <i class="fas fa-crow fa-2x me-3" style="color: #AC7672;"></i>
                    <span class="h1 fw-bold mb-0">Skincarely</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create an account</h5>

                  <div class="row">
                      <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="fn" class="form-label">First Name</label>
                            <input type="text" name="fn" class="form-control" required/>
                            <div class="invalid-feedback">
                                First name is required.
                            </div>  
                          </div>
                      </div>
                      <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label for="ln" class="form-label">Last Name</label>
                            <input type="text" name="ln" class="form-control" required/>
                            <div class="invalid-feedback">
                                Last name is required.
                            </div>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-6 mb-4">
                          <div class="form-outline">
                              <label for="username" class="form-label">Username</label>
                              <input type="text" name="username" class="form-control" required/>
                              <div class="invalid-feedback">
                                  Please input your desired username.
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 mb-4">
                          <div class="form-outline">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" name="email" class="form-control" required/>
                              <div class="invalid-feedback">
                                  Email is required.
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="form-outline mb-4">
                          <label for="pass" class="form-label">Password</label>
                          <input type="password" name="pass" class="form-control" required/>
                          <div class="invalid-feedback">
                              Password is required.
                          </div>
                      </div>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-lg btn-block" type="submit" style="background-color: #AC7672; color: #fff;">Register</button>
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