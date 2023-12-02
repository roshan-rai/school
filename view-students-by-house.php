<div class="position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Student for House</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                 <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                         <th>Student ID</th>
                      <th>Student Name</th>
                      <th>Class</th>
                      </tr>
                     
                    </thead>
                      <tbody>
                        <?php
                            while ($student = $students-> fetch_assoc())
                              {
                                ?>
                                  <tr>
                                    <td><?php echo $student['student_id'];?></td>
                                    <td><?php echo $student['student_name'];?></td>
                                    <td> <?php echo $student['student_class'];?></td>
                                  </tr>                  
                                <?php
                              }
                        ?>
                      </tbody>    
                  </table>
            </div>
            </div>
        </div>
    </div>

    <script>
        // Show the toast when the "Students" button is clicked
        document.getElementById('liveToastBtn').addEventListener('click', function () {
            var toast = new bootstrap.Toast(document.getElementById('liveToast'));
            toast.show();
        });
    </script>

