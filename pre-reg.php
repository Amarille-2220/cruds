<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body>

  <!-- ======= Header ======= -->


  <main>

    <!-- <div class="pagetitle">
      <h1>Student Council</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Registration</li>
        </ol>
      </nav>
    </div> -->

    <section class="section">
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Registration</h5>

              <!-- Floating Labels Form -->
            <form class="row g-3" id="formOrgInsert" enctype="multipart/form-data" method="POST">

              <div class="col-md-12">
                  
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="org_name" placeholder="Organization Name">
                    <label for="org_name">Organization Name</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="stud_name" placeholder="Student Name">
                    <label for="stud_name">FullName</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="adv_name" placeholder="Adviser Name">
                    <label for="adv_name">Adviser</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="stud_course" placeholder="Your Course">
                    <label for="stud_course">Course</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="stud_section" placeholder="Your Section">
                    <label for="stud_section">Section</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="stud_email" placeholder="Your Email">
                    <label for="stud_email">Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="stud_contact" placeholder="Your Contact">
                    <label for="stud_contact">Contacts</label>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Application Form</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="applicationfile" id="applicationfile">
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Organization Chart</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="organizationfile" id="organizationfile">
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Letter of Intent</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="letterofintentfile" id="letterofintentfile">
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Request Letter</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="requestfile" id="requestfile">
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">ByLaws</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="bylawsfile" id="bylawsfile">
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Action Plan</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="actionfile" id="actionfile">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="login.php" class="btn btn-secondary ms-2">Cancel</a>
                </div>
              

            </form><!-- End floating Labels Form -->

            </div>
          </div>
    </section>

     <!-- add modal -->
  <div class="modal fade" id="myModal">
   <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Student</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container mt-5">
    <h2>Insert New Item</h2>
    <form id="insertStudent">
        <div class="form-group">
            <label for="student_id">Student ID</label>
            <input type="text" class="form-control" id="student_id">
        </div>
        <div class="form-group">
            <label for="student_fullname">Fullname</label>
            <input type="text" class="form-control" id="student_fullname" >
        </div>
        <div class="form-group">
            <label for="student_birthday">Birthday</label>
            <input type="date" class="form-control" id="student_birthday" >
        </div>
        <div class="form-group">
            <label for="student_address">Address</label>
            <input type="text" class="form-control" id="student_address" >
        </div>
        <div class="form-group">
        <label for="select-action">Year:</label>
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

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
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
                      <p class="text-success">You successfully registered</p>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="submitButton">Ok</button>
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
        url: 'http://localhost/backend/crud/student/read.php', // URL to your PHP script
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
                    <tr id="row${item.student_id}">
                        <td>${item.student_id}</td>
                        <td>${item.student_fullname}</td>
                        <td>${item.student_birthday}</td>
                        <td>${item.student_address}</td>

                        <div class="btn-group">
                           <td><button class="btn btn-sm btn-danger" onClick="deleteItem('${item.student_id}')"><i class="bi bi-trash-fill"></i></button>
                          <button class="btn btn-sm btn-primary" data-student=${item} onClick="EditItem('${item.student_id}','${item.student_fullname}','${item.student_address}','${item.student_address}')" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="bi bi-pencil-square"></i></button>
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
    // $('#formInsertOrg').on('submit', function(event) {
    //         event.preventDefault();

            // Get form data
    //         const org_name = $('#org_name').val();
    //         const stud_name = $('#stud_name').val();
    //         const stud_course = $('#stud_course').val();
    //         const stud_section = $('#stud_section').val();
    //         const stud_email = $('#stud_email').val();
    //         const stud_contact = $('#stud_contact').val();
    //         const applicationfile = $('#applicationfile');

    // //         // if(applicationfile.files.length> 0){

    //         // }


            

    //         // Prepare the data to be sent as JSON
    //         const data = JSON.stringify({
    //           org_name      : org_name,
    //           stud_name: stud_name,
    //           stud_course: stud_course,
    //           stud_section: stud_section,
    //           stud_email: stud_email,
    //           stud_contact: stud_contact
              

    //         });


    //         // Send AJAX request
    //         $.ajax({
    //             url: 'http://localhost/backend/crud/organization/create.php',
    //             type: 'POST',
    //             // contentType: 'application/json',
    //             data: formData,
    //             beforeSend: function(xhr) {
    //                 const token = localStorage.getItem('jwt');
    //                 xhr.setRequestHeader('Authorization', token);
    //             },
    //             success: function(response) {
    //               if (response.status === 1) {
    //                   $('#registerModal').modal('show');
    //               } else {
    //                   alert('Error creating account: ' + response.message);
    //               }
    //               },
    //               error: function(xhr, status, error) {
    //                   alert("An error occurred: " + error);
    //               }
    //           });
    //     });

    //     $('#confirmButton').on('click', function() {
    //           window.location.href = 'orglist.php';
    //         });

  });


  
</script>

<script>
        $(document).ready(function() {
            $('#formOrgInsert').on('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                var formData = new FormData(this);

                
            // Get form data
            const org_name = $('#org_name').val();
            const stud_name = $('#stud_name').val();
            const adv_name = $('#adv_name').val();
            const stud_course = $('#stud_course').val();
            const stud_section = $('#stud_section').val();
            const stud_email = $('#stud_email').val();
            const stud_contact = $('#stud_contact').val();

            formData.append("org_namex", org_name)
            formData.append("stud_namex", stud_name)
            formData.append("adv_namex", adv_name)
            formData.append("stud_coursex", stud_course)
            formData.append("stud_sectionx", stud_section)
            formData.append("stud_emailx", stud_email)
            formData.append("stud_contactx", stud_contact)
            formData.append("stud_sectionx", stud_section)
            



                console.log(formData)

                $.ajax({
                    url: 'http://localhost/backend/crud/organization/create.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                      if (response.status === 1) {
                          $('#registerModal').modal('show');
                      } else {
                          alert('Error creating account: ' + response.message);
                      }
                      },
                      error: function(xhr, status, error) {
                          alert("An error occurred: " + error);
                      }
                          });
            });

            $('#submitButton').on('click', function() {
              window.location.href = 'orglist.php';
            });
        });
    </script>