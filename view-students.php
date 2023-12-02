  <div class="col-auto"> 

<?php
include "view-students-newform.php";
?>
  </div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
         <th>ID</th>
      <th>Name</th>
      <th>Class</th>
         <th></th>
      </tr>
     
    </thead>
      <tbody>
        <?php
            while ($student = $students-> fetch_assoc())
              {
                ?>
                  <tr>
                    <td><?php echo $student['student_id'];?></td>
                    <td>
                      <?php echo $student['student_name'];?></td>
                    </td>
                    <td>
                      <?php echo $student['student_class'];?></td>
                    </td>
                    <td><a href="house.php?id=<?php echo $student['student_id'];?>">House</a></td>
                  </tr>
                  
                <?php
              }
        ?>
      </tbody>
    
  </table>
</div>
