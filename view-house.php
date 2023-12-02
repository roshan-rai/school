
    <h1>Houses</h1>

    <div class="card-deck">
        <?php
        while ($house = $houses->fetch_assoc()) {
        ?>

            <div class="card" style="width: 18rem;">
                <img src="aboutimage.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $house['house_name']; ?></h5>
                    <p class="card-text">Captain: <?php echo $house['house_captain']; ?></p>
                    <p class="card-text">Color: <?php echo $house['house_color']; ?></p>
                    <div>
                        <form method="post" action="">
                            <input type="hidden" name="hid" value="<?php echo $house['house_id']; ?>" />
                            <input type="hidden" name="actionType" value="Display">
                            <button type="submit" class="btn btn-primary" id="studentsBtn">StudentsOld</button>
                            <button type="button" class="btn btn-primary" id="liveToastBtn">Students</button>
                        </form>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>

    <!-- Toast Container -->
    <div class="position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Notification</strong>
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
