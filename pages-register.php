<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/bcplogo.png" alt="Logo">
                  <span class="d-none d-lg-block">Admin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form id="registrationForm" class="row g-3" >


                    <div class="col-12">
                      <label for="txt_user_name" class="form-label">Username</label>
                      <input type="email" name="email" class="form-control" id="txt_user_name" >
                      <div class="invalid-feedback">Please choose a username.!</div>
                    </div>

                    <div class="col-12">
                      <label for="txt_user_email" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="txt_user_email" >
                        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="txt_user_password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="txt_user_password" >
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>


                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                  </form>

                  

                </div>
              </div>

              <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Account Created Successfully!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="text-center">
                      <i class="fas fa-check-circle fa-5x text-success"></i>
                      <p class="text-success">Your account has been created successfully!</p>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="loginButton">Login Now</button>
                  </div>
                </div>
              </div>
              </div>


              <div class="credits">
                BCP
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<script src="assets/js/jquery/jquery.min.js"></script>

<script>
  $(document).ready(function() {



$('#registrationForm').on('submit', function(e) {

    e.preventDefault();


    const formData = {
        user_name    : $('#txt_user_name').val(),
        user_email : $('#txt_user_email').val(),
        user_password: $('#txt_user_password').val(),
        };


        $.ajax({
            url     : 'http://localhost/backend/auth-file/registration.php',
            type    : 'POST',
            data    : formData,
            dataType: 'json',
            success : function(response) {
              if (response.status === 1) {
                $('#successModal').modal('show');
            } else {
                alert('Error creating account: ' + response.message);
            }
            },
            error: function(xhr, status, error) {
                alert("An error occurred: " + error);
            }
        });
        


});

            $('#loginButton').on('click', function() {
              window.location.href = 'login.php';
            });

});
</script>