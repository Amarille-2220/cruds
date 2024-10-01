<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body>

  <!-- ======= Header ======= -->
  <?php include 'nav.php' ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Logbook</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Visitor</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Visitors Logbook</h5>
              <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal">
              <i class="bi bi-plus-square"></i>
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
                    <th scope="col">Course</th>
                    <th scope="col">Section</th>
                    <th scope="col">Position</th>
                    <th scope="col">Purpose</th>
                    <th scope="col">Time</th>

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
    <h2>Visitor Information</h2>
    <form id="insertStudent">
        <div class="form-group">
            <label for="visitor_id">Student ID</label>
            <input type="text" class="form-control" id="visitor_id">
        </div>
        <div class="form-group">
            <label for="visitor_name">Fullname</label>
            <input type="text" class="form-control" id="visitor_name" >
        </div>
        <div class="form-group">
            <label for="visitor_course">Course</label>
            <input type="text" class="form-control" id="visitor_course" >
        </div>
        <div class="form-group">
            <label for="visitor_section">Section</label>
            <input type="text" class="form-control" id="visitor_section" >
        </div>
        <div class="form-group">
            <label for="visitor_position">Position</label>
            <input type="text-area" class="form-control" id="visitor_position" >
        </div>
        <div class="form-group">
            <label for="visitor_purpose">Purpose</label>
            <textarea class="form-control" name="message" rows="6" placeholder="Purpose" id="visitor_purpose"></textarea>
        </div>
        </div>
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

      <!-- Modal Header 
      <div class="modal-header">
        <h4 class="modal-title">Edit Student Info</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body 
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
            <label for="student_course">Course</label>
            <input type="date" class="form-control" id="edit_student_course" >
        </div>
        <div class="form-group">
            <label for="student_section">Section</label>
            <input type="text" class="form-control" id="edit_student_section" >
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
      url: 'http://localhost/backend/crud/student/delete.php',
      type: 'POST',
      data: { student_id: student_id },
      dataType: 'json',
      beforeSend: function(xhr) {
        const token = localStorage.getItem('jwt');
        xhr.setRequestHeader('Authorization', token);
      },
      success: function(response) {
        if (response.success) {
          // Remove the row from the table
          $(`#row${student_id}`).remove();
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
        url: 'http://localhost/backend/crud/logbook/read.php', // URL to your PHP script
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
                    <tr class="tbl-logbook" id="row${item.visitor_id}">
                        <td>${item.visitor_id}</td>
                        <td>${item.visitor_name}</td>
                        <td>${item.visitor_course}</td>
                        <td>${item.visitor_section}</td>
                        <td>${item.visitor_position}</td>
                        <td>${item.visitor_purpose}</td>
                        <td>${item.visitor_date}</td>

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
    $('#insertStudent').on('submit', function(event) {
            event.preventDefault();

            // Get form data
            const visitor_id = $('#visitor_id').val();
            const visitor_name = $('#visitor_name').val();
            const visitor_course = $('#visitor_course').val();
            const visitor_section = $('#visitor_section').val();
            const visitor_position = $('#visitor_position').val();
            const visitor_purpose = $('#visitor_purpose').val();
            const visitor_date = $('#visitor_date').val();
            

            // Prepare the data to be sent as JSON
            const data = JSON.stringify({
              visitor_id      : visitor_id,
              visitor_name: visitor_name,
              visitor_course: visitor_course,
              visitor_section: visitor_section,
              visitor_position: visitor_position,
              visitor_purpose: visitor_purpose,
              visitor_date: visitor_date

            });

            // Send AJAX request
            $.ajax({
                url: 'http://localhost/backend/crud/logbook/create.php',
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
                            $('#tbl_tbody').append(`
                                <tr id="row${response.id}">
                                    <td>${visitor_id}</td>
                                    <td>${visitor_name}</td>
                                    <td>${visitor_course}</td>
                                    <td>${visitor_section}</td>
                                    <td>${visitor_position}</td>
                                    <td>${visitor_purpose}</td>
                                    <td>${visitor_date}</td>

                                    <div class="btn-group">
                                    <td><button class="btn btn-sm btn-danger" onClick="deleteItem(${response.id})"><i class="bi bi-trash-fill"></i></button></td>
                                    </div>
                                    <td></td>
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
        });
});
</script>