<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body>

  <!-- ======= Header ======= -->
  <?php include 'nav.php' ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Permit</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Permit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Permit Approval</h5>

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
                <th scope="col">Organization</th>
                <th scope="col">Chairperson</th>
                <th scope="col">Adviser</th>
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



    </div>
    </div>
    </div>

    <!-- EDIT -->

    <div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="successModalLabel">Approval</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="" id="txt_org_id">
            <input type="hidden" name="" id="txt_org_status">

            
            <div class="text-center">
              <i class="fas fa-check-circle fa-5x text-success"></i>
              <p class="text-success">Are you sure you want to <span id="span_approval_status">approve</span> this?</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="funcUpdateStatus();">Ok</button>
          </div>
        </div>
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
        data: {
          student_id: student_id
        },
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
  function EditItem(student_id, student_fullname, student_birthday, student_address) {
    $("#edit_student_id").val(student_id);
    $("#edit_student_fullname").val(student_fullname);
    $("#edit_student_birthday").val(student_birthday);
    $("#edit_student_address").val(student_address);


  }

  function funcUpdateStatus() {

    // Get form data
    const org_id = $("#txt_org_id").val();
    const status = $("#txt_org_status").val();

    // Prepare the data to be sent as JSON
    const data = JSON.stringify({
      org_id: org_id,
      status: status
    });

    // Send AJAX request
    $.ajax({
      url: 'http://localhost/backend/crud/organization/update.php',
      type: 'POST',
      contentType: 'application/json',
      data: data,
      beforeSend: function(xhr) {
        const token = localStorage.getItem('jwt');
        xhr.setRequestHeader('Authorization', token);
      },
      success: function(response) {
        if (response.status === 1) {

          $("#approveModal").modal('hide');

          $(`#tbl_pending_org_row_${org_id}`).remove();
       
        } else {
        }
      },
      error: function(xhr, status, error) {
        $('#responseMessage').html('<div class="alert alert-danger">An error occurred while inserting the item.</div>');
      }
    });

  }

  function funcApproveStatus(org_id,status) {
    $("#txt_org_id").val(org_id);
    $("#txt_org_status").val(status);

    $("#span_approval_status").html(status=="REJECTED" ? "REJECT":"ACTIVATE")
    
    $("#approveModal").modal('show');
  }



  $(document).ready(function() {
    // READs
    const token = localStorage.getItem('jwt');

    const formData = {
      org_status: "PENDING"
    }

    $.ajax({
      url: 'http://localhost/backend/crud/organization/read.php', // URL to your PHP script
      type: 'GET', // Request method
      dataType: 'json',
      data: formData,
      beforeSend: function(xhr) {
        // Set the Authorization header
        xhr.setRequestHeader('Authorization', token);
      },
      success: function(response) {
        const data = response.message;
        console.log(data)

        var rows = '';
        for (var i = 0; i < data.length; i++) {
          var item = data[i];

          var status_color = item.org_status === "ACTIVE" ? "success" : "danger";
          rows += `
                    <tr id="tbl_pending_org_row_${item.org_id}">
                        <td>${item.org_id}</td>
                        <td>${item.org_name}</td>
                        <td>${item.stud_name}</td>
                        <td>${item.adv_name}</td>
                        <td><span class="badge bg-${status_color}">${item.org_status}</span></td>

                        


                        div class="btn-group">
                           <td><button title="Reject" class="btn btn-sm btn-danger" onClick="funcApproveStatus('${item.org_id}','REJECTED')"><i class="bi bi-x-circle-fill"></i></i></button>
                           <button title="Approve" class="btn btn-sm btn-primary" onClick="funcApproveStatus('${item.org_id}','ACTIVE')"><i class="bi bi-check-circle-fill"></i></button>
                           <button title="View" class="btn btn-sm btn-secondary" onClick="readItem"><i class="bi bi-eye-fill"></i></button></td>
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
    $('#insertStudent').on('submit', function(event) {
      event.preventDefault();

      // Get form data
      const student_id = $('#student_id').val();
      const student_fullname = $('#student_fullname').val();
      const student_birthday = $('#student_birthday').val();
      const student_address = $('#student_address').val();

      // Prepare the data to be sent as JSON
      const data = JSON.stringify({
        student_id: student_id,
        student_fullname: student_fullname,
        student_birthday: student_birthday,
        student_address: student_address

      });

      // Send AJAX request
      $.ajax({
        url: 'http://localhost/backend/crud/student/create.php',
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
                                    <td>${student_id}</td>
                                    <td>${student_fullname}</td>
                                    <td>${student_birthday}</td>
                                    <td>${student_address}</td>

                                    <div class="btn-group">
                                    <td><button class="btn btn-sm btn-danger" onClick="deleteItem(${response.id})"><i class="bi bi-trash-fill"></i></button> <button class="btn btn-sm btn-primary" onClick="editItem(${response.id})"><i class="bi bi-pencil-square"></i></button></td>
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