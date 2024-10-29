<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>
<?php include './url-api.php'; ?>

<body>

  <!-- ======= Header ======= -->
  <?php include 'nav.php' ?>
  <style>
        body {
            background-color: lightgray;
            font-family: 'Kanit', sans-serif;
        }

        .calendar-base {
            border-radius: 20px;
            background-color: white;
            padding: 20px;
            position: relative;
            z-index: 1;
            color: black;
        }

        .year {
            color: #E8E8E8;
            font-size: 30px;
            float: right;
            font-weight: bold;
        }

        .month-color {
            color: #27AE60;
            font-weight: bold;
        }

        .month-hover:hover {
            color: #27e879 !important;
        }

        .days {
            color: #AAAAAA;
            font-weight: 600;
            display: grid;
            grid-template-columns: repeat(7, 1fr); /* Align days in a grid */
            text-align: center; /* Center-align the days */
            margin-bottom: 10px; /* Space below the days */
        }

        .num-dates {
            display: grid;
            grid-template-columns: repeat(7, 1fr); /* 7 columns for the days of the week */
            gap: 10px; /* Space between the dates */
            margin-top: 20px;
        }

        .num-dates span {
            text-align: center; /* Center-align the dates */
            padding: 10px; /* Add some padding for better appearance */
            border-radius: 5px; /* Rounded corners for the dates */
            transition: background-color 0.3s; /* Smooth transition for hover effect */
        }

        .num-dates span:hover {
            background-color: #f0f0f0; /* Light gray background on hover */
        }

        .num-date {
            font-size: 150px;
            font-weight: 700;
            text-align: center; /* Center-align the selected date */
        }

        .day {
            font-size: 30px;
            text-align: center; /* Center-align the day */
        }

        .current-events {
            font-size: 15px;
            margin-top: 20px;
        }

        .create-event {
            font-size: 18px;
            margin-top: 30px;
        }

        .add-event {
            width: 20px;
            height: 20px;
            padding: 0;
            border-radius: 50%;
            border: solid white 2px;
            display: inline-block;
            margin-top: 10px;
        }

        .add {
            font-size: 25px;
            line-height: 20px;
        }

        .grey {
            color: #AAAAAA; /* Color for empty spaces */
        }
    </style>

  <main id="main" class="main">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 calendar-base">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="year" id="year"></div>
                    <div class="months" id="months"></div>
                </div>
                <hr />
                <div class="days">
                    <div>SUN</div>
                    <div>MON</div>
                    <div>TUE</div>
                    <div>WED</div>
                    <div>THU</div>
                    <div>FRI</div>
                    <div>SAT</div>
                </div>
                <div class="num-dates" id="num-dates"></div>
            </div>

            <div class="col-md-4 calendar-left">
                <div class="num-date" id="selected-date">--</div>
                <div class="day" id="selected-day">--</div>
                <div class="current-events">Current Events
                    <ul id="event-list">
                        <li>No events</li>
                    </ul>
                    <span class="posts">See post events</span>
                </div>
                <div class="create-event">Create an Event</div>
                <hr />
                <div class="add-event" id="add-event"><span class="add">+</span></div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    let currentDate = new Date();

    function renderCalendar() {
        const yearElement = document.getElementById('year');
        const monthsElement = document.getElementById('months');
        const numDatesElement = document.getElementById('num-dates');

        yearElement.innerText = currentDate.getFullYear();
        monthsElement.innerHTML = '';

        const monthNames = [
            "Jan", "Feb", "Mar", "Apr", "May", "Jun",
            "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
        ];

        monthNames.forEach((month, index) => {
            if (index === currentDate.getMonth()) {
                monthsElement.innerHTML += `<strong class="month-color">${month}</strong> `;
            } else {
                monthsElement.innerHTML += `<span class="month-hover">${month}</span> `;
            }
        });

        const firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth (), 1);
        const lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
        const daysInMonth = lastDayOfMonth.getDate();
        const firstDayOfWeek = firstDayOfMonth.getDay();

        numDatesElement.innerHTML = '';

        for (let i = 0; i < firstDayOfWeek; i++) {
            numDatesElement.innerHTML += `<span class="grey"> </span> `;
        }

        for (let i = 1; i <= daysInMonth; i++) {
            if (i === currentDate.getDate()) {
                numDatesElement.innerHTML += `<strong class="month-color">${i}</strong> `;
            } else {
                numDatesElement.innerHTML += `<span>${i}</span> `;
            }
        }

        const remainingDays = 7 - (firstDayOfWeek + daysInMonth) % 7;
        for (let i = 0; i < remainingDays; i++) {
            numDatesElement.innerHTML += `<span class="grey"> </span> `;
        }
    }

    function handleMonthChange(event) {
        const target = event.target;
        if (target.classList.contains('month-hover')) {
            const monthIndex = Array.prototype.indexOf.call(target.parentNode.children, target);
            currentDate.setMonth(monthIndex);
            renderCalendar();
        }
    }

    function handleDateSelect(event) {
        const target = event.target;
        if (target.tagName === 'SPAN' && !target.classList.contains('grey')) {
            const selectedDate = parseInt(target.innerText);
            currentDate.setDate(selectedDate);
            renderSelectedDate();
        }
    }

    function renderSelectedDate() {
        const selectedDateElement = document.getElementById('selected-date');
        const selectedDayElement = document.getElementById('selected-day');

        selectedDateElement.innerText = currentDate.getDate();
        selectedDayElement.innerText = getDayOfWeek(currentDate.getDay());
    }

    function getDayOfWeek(dayIndex) {
        const daysOfWeek = ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"];
        return daysOfWeek[dayIndex];
    }

    document.addEventListener('DOMContentLoaded', () => {
        renderCalendar();
        renderSelectedDate();

        const monthsElement = document.getElementById('months');
        monthsElement.addEventListener('click', handleMonthChange);

        const numDatesElement = document.getElementById('num-dates');
        numDatesElement.addEventListener('click', handleDateSelect);
    });
</script>

    
    </section>

    

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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

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
      url: '<?php echo $url_api; ?>/crud/student/delete.php',
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
                url: '<?php echo $url_api; ?>/crud/student/update.php',
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
        url: '<?php echo $url_api; ?>/crud/student/read.php', // URL to your PHP script
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
    $('#insertStudent').on('submit', function(event) {
            event.preventDefault();

            // Get form data
            const student_id = $('#student_id').val();
            const student_fullname = $('#student_fullname').val();
            const student_birthday = $('#student_birthday').val();
            const student_address = $('#student_address').val();

            // Prepare the data to be sent as JSON
            const data = JSON.stringify({
              student_id      : student_id,
              student_fullname: student_fullname,
              student_birthday: student_birthday,
              student_address: student_address

            });

            // Send AJAX request
            $.ajax({
                url: '<?php echo $url_api; ?>/crud/student/create.php',
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