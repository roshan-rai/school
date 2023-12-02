<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
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

<h1>Student for House</h1>

