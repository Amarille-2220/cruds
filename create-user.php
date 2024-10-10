<!DOCTYPE html>
<html lang="en">

<?php include 'admin-head.php' ?>

<body>

  <!-- ======= Header ======= -->
  <?php include 'admin-nav.php' ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Users Info</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Student Affairs</li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Users Information</h5>
              <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal">
              <i class="bi bi-person-add"></i>
              </button>

              <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

              <!-- TStudent Information -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="tbl_tbody">

                </tbody>
              </table>
              <!-- End Student Information -->

            </div>
          </div>
    </section>

     <!-- add modal -->
  <div class="modal fade" id="myModal">
   <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container mt-5">
    <h2>Create User</h2>
    <form id="insertStudent">
        <div class="form-group">
            <label for="txt_user_id">Student ID</label>
            <input type="text" class="form-control" id="txt_user_id">
        </div>
        <div class="form-group">
            <label for="txt_user_name">Fullname</label>
            <input type="text" class="form-control" id="txt_user_name" >
        </div>
        <div class="form-group">
          <label for="txt_user_course">Course</label>
          <input type="text" class="form-control" id="txt_user_course" >
        </div>
        <div class="form-group">
          <label for="txt_user_year">Year</label>
          <input type="text" class="form-control" id="txt_user_year" >
        </div>
        <div class="form-group">
            <label for="txt_user_address">Address</label>
            <input type="text" class="form-control" id="txt_user_address" >
        </div>
        <div class="form-group">
            <label for="txt_user_bday">Birthday</label>
            <input type="date" class="form-control" id="txt_user_bday" >
        </div>
        <div class="form-group">
            <label for="txt_user_email">Email</label>
            <input type="text" class="form-control" id="txt_user_email" >
        </div>
        <div class="form-group">
            <label for="txt_user_password">Password</label>
            <input type="password" class="form-control" id="txt_user_password" >
        </div>
        <!-- <div class="form-group">
        <label for="student_year">Year:</label>
        <input type="text" class="form-control" id="student_year" >
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="select-action" data-bs-toggle="dropdown" aria-expanded="false">
                Select year:
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" data-value="action1">1ST YEAR</a></li>
                <li><a class="dropdown-item" href="#" data-value="action2">2ND YEAR</a></li>
                <li><a class="dropdown-item" href="#" data-value="action3">3RD YEAR</a></li>
                <li><a class="dropdown-item" href="#" data-value="action3">4TH YEAR</a></li>
            </ul>
        </div>
        <input type="hidden" id="selected-action" name="selected_action">
    </div>
        </div> -->
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                <button type="button" class="btn btn-danger mt-3" data-bs-dismiss="modal">Close</button>
    </form>
    <div id="responseMessage" class="mt-3"></div>
</div>
      </div>


    </div>
  </div>
</div>

<!-- EDIT -->

<div class="modal fade" id="modalEdit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Student Info</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container mt-5">
    <form id="insertStudent">
        <div class="form-group">
            <label for="student_id">Student ID</label>
            <input type="text" class="form-control" id="edit_student_id">
        </div>
        <div class="form-group">
            <label for="student_fullname">Fullname</label>
            <input type="text" class="form-control" id="edit_student_fullname" >
        </div>
        <div class="form-group">
            <label for="student_birthday">Birthday</label>
            <input type="date" class="form-control" id="edit_student_birthday" >
        </div>
        <div class="form-group">
            <label for="student_address">Address</label>
            <input type="text" class="form-control" id="edit_student_address" >
        </div>
        <div class="form-group">
            <label for="student_age">Year</label>
            <input type="text" class="form-control" id="edit_student_fullname" >
        </div>
        <button type="button" onclick="saveEdit()" class="btn btn-primary mt-3">Submit</button>
        <button type="button" class="btn btn-danger mt-3" data-bs-dismiss="modal">Close</button>
    </form>
    <div id="responseMessage" class="mt-3"></div>
</div>
      </div>

      <!-- Modal footer -->
    </div>
  </div>
</div>

<!-- Add a modal dialog for deletion confirmation -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this item?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
      </div>
    </div>
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
                    <button type="button" class="btn btn-primary" id="loginButton">Ok</button>
                  </div>
                </div>
              </div>

 
</div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include 'footer.php' ?>

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
    $('.dropdown-menu li a').on('click', function() {
        var selectedAction = $(this).data('value');
        $('#select-action').text($(this).text());
        $('#selected-action').val(selectedAction);
    });
});

// DELETE
function deleteItem(student_id) {
  $('#deleteModal').modal('show');
  $('#confirmDelete').off('click').on('click', function() {
    // Send the AJAX request to delete the item
    $.ajax({
      url: 'http://localhost/backend/auth-file/delete.php',
      type: 'POST',
      data: { user_id: user_id },
      dataType: 'json',
      beforeSend: function(xhr) {
        const token = localStorage.getItem('jwt');
        xhr.setRequestHeader('Authorization', token);
      },
      success: function(response) {
        if (response.success) {
          // Remove the row from the table
          $(`#row${user_id}`).remove();
          alert('Item deleted successfully.');
        } else {
          alert('Error deleting item: ' + response.message);
        }
      },
      error: function(xhr, status, error) {
        console.error('Error:', error);
        alert('An error occurred while deleting the item.');
      }
    });
    // Close the modal
    $('#deleteModal').modal('hide');
  });
}

        //EDIT
        function EditItem(student_id,student_fullname,student_birthday,student_address) {
          $("#edit_student_id").val(student_id);
          $("#edit_student_fullname").val(student_fullname);
          $("#edit_student_birthday").val(student_birthday);
          $("#edit_student_address").val(student_address);


        }

      function saveEdit(){
 
            // Get form data
            const student_id = $('#edit_student_id').val();
            const student_fullname = $('#edit_student_fullname').val();
            const student_birthday = $('#edit_student_birthday').val();
            const student_address = $('#edit_student_address').val();

            // Prepare the data to be sent as JSON
            const data = JSON.stringify({
              student_id      : student_id,
              student_fullname: student_fullname,
              student_birthday: student_birthday,
              student_address : student_address
            });

            // Send AJAX request
            $.ajax({
                url: 'http://localhost/backend/crud/student/update.php',
                type: 'POST',
                contentType: 'application/json',
                data: data,
                beforeSend: function(xhr) {
                    const token = localStorage.getItem('jwt');
                    xhr.setRequestHeader('Authorization', token);
                },
                success: function(response) {
                  console.log(response);
                    if (response.status === 1) {
                      $(`#row${student_id}`).remove();
                            $('#tbl_tbody').append(`
                                <tr id="row${student_id}">
                                    <td>${student_id}</td>
                                    <td>${student_fullname}</td>
                                    <td>${student_birthday}</td>
                                    <td>${student_address}</td>

                                      <div class="btn-group">
                                       <td> <button class="btn btn-sm btn-danger" onClick="deleteItem('${student_id}')"><i class="bi bi-trash-fill"></i></button>
                                        <button class="btn btn-sm btn-primary" onClick="EditItem('${student_id}','${student_fullname}','${student_birthday}','${student_address}')"  data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="bi bi-pencil-square"></i></button></td>
                                      </div>
                                    </td>



                                </tr>
                            `);
                            $('#responseMessage').html('<div class="alert alert-success">Item inserted successfully.</div>');
                        } else {
                            $('#responseMessage').html('<div class="alert alert-danger">Error: ' + response.message + '</div>');
                        }
                },
                error: function(xhr, status, error) {
                    $('#responseMessage').html('<div class="alert alert-danger">An error occurred while inserting the item.</div>');
                }
            });
 


      }



    $(document).ready(function() {
    // READs
    const token = localStorage.getItem('jwt');
    $.ajax({
        url: 'http://localhost/backend/auth-file/read.php', // URL to your PHP script
        type: 'GET', // Request method
        dataType: 'json', // Expected data type from server
        beforeSend: function(xhr) {
            // Set the Authorization header
            xhr.setRequestHeader('Authorization', token);
        },
        success: function(response) {
            const data = response.message;

            var rows = '';
            for (var i = 0; i < data.length; i++) {
                var item = data[i];
                rows += `
                    <tr id="row${item.user_id}">
                        <td>${item.user_name}</td>
                        <td>${item.user_email}</td>


                        <div class="btn-group">
                           <td><button class="btn btn-sm btn-danger" onClick="deleteItem('${item.user_email}')"><i class="bi bi-trash-fill"></i></button>
                          <button class="btn btn-sm btn-primary" data-student=${item} onClick="EditItem('${item.user_name}','${item.user_email}')" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="bi bi-pencil-square"></i></button>
                          <button class="btn btn-sm btn-success" onClick="readItem"><i class="bi bi-eye-fill"></i></button>
                          </td>
                        </div>
                        <td></td>
                    </tr>
                `;
            }
            // Insert the rows into the table body
            $('#tbl_tbody').html(rows);
        },
        error: function(xhr, status, error) {
            // Handle error
            console.error('Error:', error);

            $('#tbl_list').html(JSON.stringify(response.status));
        }
    });

    // INSERT
    $('#myModal').on('submit', function(e) {

e.preventDefault();


const formData = {
    user_id    : $('#txt_user_id').val(),
    user_name    : $('#txt_user_name').val(),
    user_course    : $('#txt_user_course').val(),
    user_year    : $('#txt_user_year').val(),
    user_address : $('#txt_user_address').val(),
    user_bday: $('#txt_user_bday').val(),
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
          window.location.href = 'create-user.php';
        });

  });
</script>